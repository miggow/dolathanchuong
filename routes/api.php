<?php

use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/products/{product}/variants', [ProductController::class, 'getVariants'])->name('api.products.variants');
Route::post('/product/toggle', [ProductController::class, 'toggleSwitch'])->name('product.toggle');
Route::post('/cart/add', [CartController::class, 'addToCart']);
Route::post('/product/type/{id}', [ProductController::class, 'updateProductType']);
Route::post('/product/status/{id}', [ProductController::class, 'updateProductStatus']);
// Route::post('/cart/add', 'Api\CartController@addToCart');
Route::delete('/cart/{cart}', 'Api\CartController@removeFromCart')->name('api.cart.remove');
