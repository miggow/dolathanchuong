<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login', [AuthController::class, 'do_login'])->name('do-login');
Route::post('register', [AuthController::class, 'do_register'])->name('do-register');


Route::group(['prefix' => 'product', 'as' => 'feature.'], function(){
    Route::get('', [HomeController::class, 'product'])->name('product.list');
    Route::get('{id}', [HomeController::class, 'product_detail'])->name('product.detail');
});
