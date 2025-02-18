<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/portfolio', [HomeController::class, 'portfolio']);
Route::get('/android', [HomeController::class, 'android']);
Route::get('/ios', [HomeController::class, 'ios']);
Route::get('/website', [HomeController::class, 'website']);
Route::get('/desktop', [HomeController::class, 'desktop']);
Route::get('/cctv', [HomeController::class, 'cctv']);
Route::get('/iot', [HomeController::class, 'iot']);
Route::get('/otomasi', [HomeController::class, 'otomasi']);