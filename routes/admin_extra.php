<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\HomeSiteSettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\InstagramFeedController;
use App\Http\Controllers\Admin\UploadImageController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => 'authAdmin'], function () {
    Route::get('/dashboard', [DashBoardController::class, 'index'])->name('admin.home');

    Route::post('upload', [UploadImageController::class, 'upload'])->name('ckeditor.upload');


    Route::resource('category', CategoryController::class);
    Route::get('category/destroy/{id}', [CategoryController::class, 'destroy'])->name('destroy.category');
    Route::resource('sub-category', SubCategoryController::class);
    Route::get('sub-category/destroy/{id}', [SubCategoryController::class, 'destroy'])->name('destroy.sub-category');

    Route::resource('product', ProductController::class);
    Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy.product');
    Route::post('product/image', [ProductController::class, 'delete_image'])->name('destroy.product.image');
    Route::post('product/image/update', [ProductController::class, 'update_image'])->name('update.product.image');

    Route::get('product/{id}/inventory', [InventoryController::class, 'index'])->name('inventory.index');
    Route::post('inventory/{id}/update', [InventoryController::class, 'update'])->name('inventory.update');
    Route::post('inventory/{id}', [InventoryController::class, 'store'])->name('inventory.store');
    Route::get('inventory/{id}/destroy', [InventoryController::class, 'destroy'])->name('inventory.destroy');


    Route::resource('user', UserController::class);
    Route::get('user/destroy/{id}', [UserController::class, 'destroy'])->name('destroy.user');
    Route::get('user/active/{id}', [UserController::class, 'active'])->name('active.user');

    Route::prefix('settings')->group(function(){
        Route::resource('banner', BannerController::class);
        Route::get('banner/destroy/{id}', [BannerController::class, 'destroy'])->name('destroy.banner');
        Route::resource('instagram-feed', InstagramFeedController::class);
        Route::get('instagram-feed/destroy/{id}', [InstagramFeedController::class, 'destroy'])->name('instagram-feed.destroy');
    });

});
