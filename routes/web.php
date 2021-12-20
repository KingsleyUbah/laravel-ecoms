<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;

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
Route::get('/checkout/success', [CartController::class, 'displaySuccess']);

Route::post('/process/user/payment', [CartController::class, 'processPayment']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/get', [ProductController::class, 'getProducts']);
