<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();


Route::post('/cart', [CartController::class, 'store'])->name('cart');

Route::get('/checkout', [CartController::class, 'index'])->name('checkout');

Route::get('/checkout/get/items', [CartController::class, 'getCartItemsForCheckout']);

Route::post('/process/user/payment', [CartController::class, 'processPayment']);
