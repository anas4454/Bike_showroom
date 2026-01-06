<?php

use App\Http\Controllers\Admin;
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



Route::middleware('auth' , 'verified')->prefix('dashboard')->group(function(){

    // Dashboard route
    Route::get('/' , [Admin::class , 'index'])->name('dashboard');

    // Product routes
    Route::get('/products' , [Admin::class , 'products'])->name('dashboard.products');
    Route::get('/products/create' , [Admin::class , 'createProduct'])->name('dashboard.products.create');
    Route::get('/products/edit' , [Admin::class , 'editProduct'])->name('dashboard.products.edit');
    Route::get('/products/delete' , [Admin::class , 'deleteProduct'])->name('dashboard.products.delete');
    Route::get('/products/show' , [Admin::class , 'showProduct'])->name('dashboard.products.show');

    //category routes
    Route::get('/categories' , [Admin::class , 'categories'])->name('dashboard.categories');
    Route::get('/categories/create' , [Admin::class , 'createCategory'])->name('dashboard.categories.create');
    Route::get('/categories/edit' , [Admin::class , 'editCategory'])->name('dashboard.categories.edit');
    Route::get('/categories/delete' , [Admin::class , 'deleteCategory'])->name('dashboard.categories.delete');
    Route::get('/categories/show' , [Admin::class , 'showCategory'])->name('dashboard.categories.show');

    //collection routes
    Route::get('/collections' , [Admin::class , 'collection'])->name('dashboard.collections');
    Route::get('/collections/create' , [Admin::class , 'createCollection'])->name('dashboard.collections.create');
    Route::get('/collections/edit' , [Admin::class , 'editCollection'])->name('dashboard.collections.edit');
    Route::get('/collections/delete' , [Admin::class , 'deleteCollection'])->name('dashboard.collections.delete');
    Route::get('/collections/show' , [Admin::class , 'showCollection'])->name('dashboard.collections.show');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
