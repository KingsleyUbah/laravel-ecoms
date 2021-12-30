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


Route::post('/tocart', [CartController::class, 'store'])->name('tocart');
Route::get('/cart', [CartController::class, 'getCartPage'])->name('cart');

Route::get('/checkout', [CartController::class, 'getCheckoutPage'])->name('checkout');

Route::get('/cart/get/items', [CartController::class, 'getCartItemsForCartPage']);
Route::post('/cart/increment', [CartController::class, 'incrementItemInCheckout']);
Route::post('/cart/decrement', [CartController::class, 'decrementItemInCheckout']);
Route::post('/cart/delete/item', [CartController::class, 'deleteItemInCheckout']);
Route::get('/cart/success', [CartController::class, 'displaySuccess']);
Route::get('/cart/clear', [CartController::class, 'clearCart']);

Route::post('/process/user/payment', [CartController::class, 'processPayment']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/get', [ProductController::class, 'getProducts']);
