<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// Main Routes with name for better organization
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');

// Service Routes Group
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/android', [HomeController::class, 'android'])->name('android');
    Route::get('/ios', [HomeController::class, 'ios'])->name('ios');
    Route::get('/website', [HomeController::class, 'website'])->name('website');
    Route::get('/desktop', [HomeController::class, 'desktop'])->name('desktop');
    Route::get('/cctv', [HomeController::class, 'cctv'])->name('cctv');
    Route::get('/iot', [HomeController::class, 'iot'])->name('iot');
    Route::get('/otomasi', [HomeController::class, 'otomasi'])->name('otomasi');
});

// Keep old routes for backward compatibility
Route::get('/android', [HomeController::class, 'android']);
Route::get('/ios', [HomeController::class, 'ios']);
Route::get('/website', [HomeController::class, 'website']);
Route::get('/desktop', [HomeController::class, 'desktop']);
Route::get('/cctv', [HomeController::class, 'cctv']);
Route::get('/iot', [HomeController::class, 'iot']);
Route::get('/otomasi', [HomeController::class, 'otomasi']);


// Sitemap generation
Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'))
        ->add(Url::create('/about')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(Url::create('/portfolio')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(Url::create('/android')->setPriority(0.7)->setChangeFrequency('weekly'))
        ->add(Url::create('/ios')->setPriority(0.7)->setChangeFrequency('weekly'))
        ->add(Url::create('/website')->setPriority(0.7)->setChangeFrequency('weekly'))
        ->add(Url::create('/desktop')->setPriority(0.7)->setChangeFrequency('weekly'))
        ->add(Url::create('/cctv')->setPriority(0.7)->setChangeFrequency('weekly'))
        ->add(Url::create('/iot')->setPriority(0.7)->setChangeFrequency('weekly'))
        ->add(Url::create('/otomasi')->setPriority(0.7)->setChangeFrequency('weekly'));

    return $sitemap->toResponse(request());
})->name('sitemap');
