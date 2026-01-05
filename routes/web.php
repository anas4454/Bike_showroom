<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ProductController::class , 'index'])->name('home');
Route::get('/products', [ProductController::class , 'allProducts'])->name('products');
Route::get('/bike/{product:slug}', [ProductController::class , 'singleProduct'])->name('singleproduct');
Route::get('/cart', [ProductController::class , 'cart'])->name('cart');
Route::get('/checkout', [ProductController::class , 'checkout'])->name('checkout');
Route::get('/account', [ProductController::class , 'account'])->name('account');
Route::get('/category', [CategoryController::class , 'index'])->name('category');
Route::get('/collection', [CollectionController::class , 'collection'])->name('collection');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
