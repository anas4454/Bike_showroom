<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;




Route::get('/', [ProductController::class , 'index'])->name('home');
Route::get('/products', [ProductController::class , 'allProducts'])->name('products');
Route::get('/bike/{product:slug}', [ProductController::class , 'singleProduct'])->name('singleproduct');
Route::get('/cart', [ProductController::class , 'cart'])->name('cart');
Route::get('/checkout', [ProductController::class , 'checkout'])->name('checkout');
Route::get('/account', [ProductController::class , 'account'])->name('account');
Route::get('/category', [CategoryController::class , 'index'])->name('category');
Route::get('/collection', [CollectionController::class , 'collection'])->name('collection');

