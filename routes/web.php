<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/about', [\App\Http\Controllers\HomeController::class, 'about']);
Route::get('/products/{id}', [\App\Http\Controllers\HomeController::class, 'product']);
Route::get('/contact', [\App\Http\Controllers\HomeController::class, 'contact']);
Route::get('/qualityassurance', [\App\Http\Controllers\HomeController::class, 'qualityassurance']);
Route::get('/certification', [\App\Http\Controllers\HomeController::class, 'certification']);
Route::get('/research', [\App\Http\Controllers\HomeController::class, 'research']);
