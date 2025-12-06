<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PerformanceCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'performance:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check website performance metrics and optimization status';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🚀 PT Putra Wisanggeni Satu - Performance Check');
        $this->newLine();

        // Environment Check
        $this->checkEnvironment();

        // Cache Check
        $this->checkCache();

        // Database Check
        $this->checkDatabase();

        // Storage Check
        $this->checkStorage();

        // Optimization Status
        $this->checkOptimization();

        // Recommendations
        $this->showRecommendations();
    }

    private function checkEnvironment()
    {
        $this->info('📊 Environment Status:');

        $env = app()->environment();
        $debug = config('app.debug');

        $this->line("Environment: " . ($env === 'production' ? '<fg=green>✓</> Production' : '<fg=yellow>⚠</> ' . ucfirst($env)));
        $this->line("Debug Mode: " . ($debug ? '<fg=red>✗</> Enabled (DISABLE in production!)' : '<fg=green>✓</> Disabled'));
        $this->line("PHP Version: <fg=cyan>" . PHP_VERSION . "</>");
        $this->line("Laravel Version: <fg=cyan>" . app()->version() . "</>");

        // Check OPcache
        $opcacheEnabled = function_exists('opcache_get_status') && opcache_get_status();
        $this->line("OPcache: " . ($opcacheEnabled ? '<fg=green>✓</> Enabled' : '<fg=yellow>⚠</> Disabled (Enable for better performance)'));

        $this->newLine();
    }

    private function checkCache()
    {
        $this->info('💾 Cache Status:');

        $cacheDriver = config('cache.default');
        $this->line("Cache Driver: <fg=cyan>{$cacheDriver}</>");

        // Test cache write/read
        try {
            Cache::put('test_key', 'test_value', 10);
            $value = Cache::get('test_key');
            $working = ($value === 'test_value');
            Cache::forget('test_key');

            $this->line("Cache Working: " . ($working ? '<fg=green>✓</> Yes' : '<fg=red>✗</> No'));
        } catch (\Exception $e) {
            $this->line("Cache Working: <fg=red>✗</> Error: " . $e->getMessage());
        }

        // Check cached configs
        $configCached = file_exists(app()->getCachedConfigPath());
        $routesCached = file_exists(app()->getCachedRoutesPath());
        $viewsCached = file_exists(storage_path('framework/views'));

        $this->line("Config Cached: " . ($configCached ? '<fg=green>✓</> Yes' : '<fg=yellow>⚠</> No (Run: php artisan config:cache)'));
        $this->line("Routes Cached: " . ($routesCached ? '<fg=green>✓</> Yes' : '<fg=yellow>⚠</> No (Run: php artisan route:cache)'));
        $this->line("Views Cached: " . ($viewsCached ? '<fg=green>✓</> Yes' : '<fg=yellow>⚠</> No (Run: php artisan view:cache)'));

        $this->newLine();
    }

    private function checkDatabase()
    {
        $this->info('🗄️ Database Status:');

        try {
            $connection = DB::connection();
            $dbName = $connection->getDatabaseName();

            $this->line("Connection: <fg=green>✓</> Connected to '{$dbName}'");

            // Count tables
            $tables = DB::select('SHOW TABLES');
            $tableCount = count($tables);
            $this->line("Tables: <fg=cyan>{$tableCount}</>");

            // Test query performance
            $start = microtime(true);
            DB::select('SELECT 1');
            $duration = round((microtime(true) - $start) * 1000, 2);

            $status = $duration < 10 ? '<fg=green>✓</>' : ($duration < 50 ? '<fg=yellow>⚠</>' : '<fg=red>✗</>');
            $this->line("Query Speed: {$status} {$duration}ms");

        } catch (\Exception $e) {
            $this->line("Connection: <fg=red>✗</> " . $e->getMessage());
        }

        $this->newLine();
    }

    private function checkStorage()
    {
        $this->info('📁 Storage Status:');

        $storagePath = storage_path();
        $publicPath = public_path();

        // Check permissions
        $storageWritable = is_writable($storagePath);
        $publicWritable = is_writable($publicPath);

        $this->line("Storage Writable: " . ($storageWritable ? '<fg=green>✓</> Yes' : '<fg=red>✗</> No (Fix permissions)'));
        $this->line("Public Writable: " . ($publicWritable ? '<fg=green>✓</> Yes' : '<fg=red>✗</> No (Fix permissions)'));

        // Check disk space
        $totalSpace = disk_total_space($storagePath);
        $freeSpace = disk_free_space($storagePath);
        $usedPercent = round((($totalSpace - $freeSpace) / $totalSpace) * 100, 1);

        $spaceStatus = $usedPercent < 80 ? '<fg=green>✓</>' : ($usedPercent < 90 ? '<fg=yellow>⚠</>' : '<fg=red>✗</>');
        $this->line("Disk Usage: {$spaceStatus} {$usedPercent}% used");

        // Check log file size
        $logFile = storage_path('logs/laravel.log');
        if (file_exists($logFile)) {
            $logSize = filesize($logFile);
            $logSizeMB = round($logSize / 1024 / 1024, 2);
            $logStatus = $logSizeMB < 50 ? '<fg=green>✓</>' : ($logSizeMB < 100 ? '<fg=yellow>⚠</>' : '<fg=red>✗</>');
            $this->line("Log File Size: {$logStatus} {$logSizeMB} MB");
        }

        $this->newLine();
    }

    private function checkOptimization()
    {
        $this->info('⚡ Optimization Status:');

        $optimizations = [
            'Config Cached' => file_exists(app()->getCachedConfigPath()),
            'Routes Cached' => file_exists(app()->getCachedRoutesPath()),
            'Views Cached' => count(File::files(storage_path('framework/views'))) > 0,
            'Composer Optimized' => file_exists(base_path('vendor/composer/autoload_classmap.php')),
        ];

        foreach ($optimizations as $name => $status) {
            $icon = $status ? '<fg=green>✓</>' : '<fg=yellow>⚠</>';
            $this->line("{$icon} {$name}");
        }

        $this->newLine();
    }

    private function showRecommendations()
    {
        $this->info('💡 Recommendations:');

        $recommendations = [];

        if (config('app.debug') === true) {
            $recommendations[] = '🔴 CRITICAL: Disable APP_DEBUG in production!';
        }

        if (!file_exists(app()->getCachedConfigPath())) {
            $recommendations[] = '⚠️ Run: php artisan config:cache';
        }

        if (!file_exists(app()->getCachedRoutesPath())) {
            $recommendations[] = '⚠️ Run: php artisan route:cache';
        }

        if (config('cache.default') === 'file') {
            $recommendations[] = '💡 Consider using Redis for cache in production';
        }

        if (!function_exists('opcache_get_status') || !opcache_get_status()) {
            $recommendations[] = '💡 Enable OPcache in php.ini for better performance';
        }

        if (empty($recommendations)) {
            $this->line('<fg=green>✓</> All good! No recommendations at this time.');
        } else {
            foreach ($recommendations as $rec) {
                $this->line($rec);
            }
        }

        $this->newLine();
        $this->info('✨ Performance check complete!');
    }
}
