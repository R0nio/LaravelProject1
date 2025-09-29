<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about',[ TestController::class, 'about' ])->name('about');

Route::get('/contact',[ TestController::class, 'contact' ])->name('contact');

Route::get('/product', [ProductController::class, 'index'])
            ->name('products.index');

Route::delete('/product/{product}', [ProductController::class, 'destroy'])
            ->name('products.destroy');