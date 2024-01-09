<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'], function(){
    Route::resource('category', CategoryController::class);
    Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy.category');

    Route::resource('product', ProductController::class);
    Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy.product');

    Route::resource('user', UserController::class);
    Route::get('user/destroy/{id}', [UserController::class, 'destroy'])->name('destroy.user');
    Route::get('user/active/{id}', [UserController::class, 'active'])->name('active.user');
});
