<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WishlistController;

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
Route::post('/towishlist', [WishlistController::class, 'store'])->name('towishlist');

Route::get('/cart', [CartController::class, 'getCartPage'])->name('cart');
Route::get('/wishlist', [WishlistController::class, 'getWishlistPage'])->name('wishlist');

Route::get('/contact-us', [ContactController::class, 'getContactPage'])->name('contact');

Route::get('/checkout', [CartController::class, 'getCheckoutPage'])->name('checkout');

Route::get('/cart/get/items', [CartController::class, 'getCartItemsForCartPage']);
Route::post('/cart/item/increment', [CartController::class, 'incrementItemInCheckout']);
Route::post('/cart/item/decrement', [CartController::class, 'decrementItemInCheckout']);
Route::post('/cart/delete/item', [CartController::class, 'deleteItemInCheckout']);

Route::get('/wishlist/get/items', [WishlistController::class, 'getItemsForWishlistPage']);
Route::post('/wishlist/item/increment', [WishlistController::class, 'incrementItemInWishlist']);
Route::post('/wishlist/item/decrement', [WishlistController::class, 'decrementItemInWishlist']);
Route::post('/wishlist/delete/item', [WishlistController::class, 'deleteItemInWishlist']);
Route::post('/wishlist/item/move', [WishlistController::class, 'moveToCart']);


Route::get('/cart/success', [CartController::class, 'displaySuccess']);
Route::get('/cart/clear', [CartController::class, 'clearCart']);

Route::post('/process/user/payment', [CartController::class, 'processPayment']);

Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/get', [ProductController::class, 'getProducts']);
