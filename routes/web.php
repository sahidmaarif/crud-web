<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);

Route::resource('categories', CategoryController::class);
Route::resource('products', ProductController::class);
Route::get('/products/{product}/detail', function ($id) {

    $product = \App\Models\Product::findOrFail($id);

    $product->increment('clicks');

    return $product;

});