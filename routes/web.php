<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Product List
Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

// Product Details
Route::get('/products/{id}', [ProductController::class, 'show'])
    ->whereNumber('id')
    ->name('products.show');

// Featured Product
Route::get('/products-featured', [ProductController::class, 'featured'])
    ->name('products.featured');

// Filter Products
Route::get('/products-filter/{category?}', [ProductController::class, 'filter'])
    ->name('products.filter');
