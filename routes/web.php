<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\Adminlogin;
use App\Http\Middleware\Userlogin;
use Illuminate\Support\Facades\Route;



//Stripr Route

Route::get('/stripe' , [ProductController::class, 'stripecheckout'])->name('stripe.checkout');
Route::get('/stripe/session' , [ProductController::class, 'stripeSession'])->name('stripe.session');
Route::get('/stripe/success' , [ProductController::class, 'stripeSuccess'])->name('stripe.success');
Route::get('/stripe/cancel' , [ProductController::class, 'stripeCancel'])->name('stripe.cancel');





Route::middleware('auth', 'verified', Adminlogin::class)->prefix('users')->group(function () {

    // User Dashboard route
    Route::get('/', [Admin::class, 'userindex'])->name('users.index');

      Route::get('/information' , [Admin::class, 'userinformation'])->name('users.information');
});

//  Route::get('/user' , [Admin::class , 'userindex'])->name('users.index');






Route::get('/confirmordermail', [ProductController::class, 'confirm_email'])->name('confirm_email');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/site.php';
require __DIR__.'/routeadmin.php';
