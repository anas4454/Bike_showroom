<?php

use App\Http\Controllers\Admin;
use App\Http\Middleware\Adminlogin;
use Illuminate\Support\Facades\Route;

Route::middleware('auth' , 'varified' ,Adminlogin::class)->prefix('admin')->group(function(){

    // Dashboard route
    Route::get('/', [Admin::class, 'index'])->name('dashboard');

    // Product routes
    Route::get('/products', [Admin::class, 'products'])->name('dashboard.products');
    Route::get('/products/create', [Admin::class, 'createProduct'])->name('dashboard.products.create');
    Route::POST('/products/store', [Admin::class, 'storeProduct'])->name('dashboard.products.store');
    Route::get('/products/edit', [Admin::class, 'editProduct'])->name('dashboard.products.edit');
    Route::get('/products/delete', [Admin::class, 'deleteProduct'])->name('dashboard.products.delete');
    Route::get('/products/show/{product}', [Admin::class, 'showProduct'])->name('dashboard.products.show');

    // category routes
    Route::get('/categories', [Admin::class, 'categories'])->name('dashboard.categories');
    Route::get('/categories/create', [Admin::class, 'createCategory'])->name('dashboard.categories.create');
    Route::get('/categories/edit', [Admin::class, 'editCategory'])->name('dashboard.categories.edit');
    Route::get('/categories/delete', [Admin::class, 'deleteCategory'])->name('dashboard.categories.delete');
    Route::get('/categories/show', [Admin::class, 'showCategory'])->name('dashboard.categories.show');

    // collection routes
    Route::get('/collections', [Admin::class, 'collection'])->name('dashboard.collections');
    Route::get('/collections/create', [Admin::class, 'createCollection'])->name('dashboard.collections.create');
    Route::get('/collections/edit', [Admin::class, 'editCollection'])->name('dashboard.collections.edit');
    Route::get('/collections/delete', [Admin::class, 'deleteCollection'])->name('dashboard.collections.delete');
    Route::get('/collections/show', [Admin::class, 'showCollection'])->name('dashboard.collections.show');

    // order routes
    Route::get('/orders', [Admin::class, 'adminOrderConfirm'])->name('dashboard.orders');
    Route::get('/orders/detail/{order}', [Admin::class, 'adminOrderdetail'])->name('dashboard.orders.detail');
    Route::POST('/dashboard/orders/{order}',[Admin::class, 'updateStatus'])->name('dashboard.orders.updateStatus');


    //payments routes
    Route::get('/payments', [Admin::class, 'payments'])->name('dashboard.payments');

    //usersin dashboard routes
    Route::get('/users', [Admin::class, 'users'])->name('dashboard.users');
});



