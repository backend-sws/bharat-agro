<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/products', [SiteController::class, 'products'])->name('products');
Route::get('/products/{slug}', [SiteController::class, 'productDetail'])->name('products.detail');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/schemes', [SiteController::class, 'schemes'])->name('schemes');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');

Route::post('/inquiry', [SiteController::class, 'submitInquiry'])->name('inquiry.submit');
