<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OptimizeResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only optimize HTML responses
        if ($this->isHtmlResponse($response)) {
            // Minify HTML in production
            if (!config('app.debug')) {
                $content = $response->getContent();
                $content = $this->minifyHtml($content);
                $response->setContent($content);
            }

            // Add cache headers for GET requests (non-authenticated users)
            if ($request->method() === 'GET' && !$request->user()) {
                // Cache static pages for 1 hour
                $response->header('Cache-Control', 'public, max-age=3600, must-revalidate');
                $response->header('Expires', gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');

                // Add ETag for better caching
                $etag = md5($response->getContent());
                $response->header('ETag', $etag);

                // Check if client has cached version
                $requestEtag = $request->header('If-None-Match');
                if ($requestEtag === $etag) {
                    return response('', 304)
                        ->header('Cache-Control', 'public, max-age=3600, must-revalidate')
                        ->header('ETag', $etag);
                }
            }

            // Add compression hint
            $response->header('Vary', 'Accept-Encoding');
        }

        // Security headers for all responses
        $response->headers->set('X-Frame-Options', 'SAMEORIGIN');
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        return $response;
    }

    /**
     * Check if response is HTML
     */
    private function isHtmlResponse($response): bool
    {
        $contentType = $response->headers->get('Content-Type', '');
        return strpos($contentType, 'text/html') !== false ||
               (empty($contentType) && is_string($response->getContent()));
    }

    /**
     * Minify HTML content
     */
    private function minifyHtml(string $html): string
    {
        // Preserve pre and textarea content
        $preserveBlocks = [];
        $placeholder = '___PRESERVE_BLOCK___';

        // Preserve script and style tags
        $html = preg_replace_callback(
            '/<(script|style)[^>]*>.*?<\/\1>/is',
            function($matches) use (&$preserveBlocks, $placeholder) {
                $key = $placeholder . count($preserveBlocks);
                $preserveBlocks[$key] = $matches[0];
                return $key;
            },
            $html
        );

        // Remove HTML comments (except IE conditionals)
        $html = preg_replace('/<!--(?!\s*(?:\[if [^\]]+]|<!|>))(?:(?!-->).)*-->/s', '', $html);

        // Remove whitespace between tags
        $html = preg_replace('/>\s+</', '><', $html);

        // Remove multiple spaces
        $html = preg_replace('/\s+/', ' ', $html);

        // Restore preserved blocks
        foreach ($preserveBlocks as $key => $value) {
            $html = str_replace($key, $value, $html);
        }

        return trim($html);
    }
}
