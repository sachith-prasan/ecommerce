<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('shop.index');
})->name('shop.index');

Route::get('/login', function () {
    return view('shop.login_register');
})->name('shop.login');

Route::get('/shop-list', function () {
    return view('shop.shoplist');
})->name('shop');

Route::get('/cart', function () {
    return view('shop.shop_cart');
})->name('shop.cart');

Route::get('/checkout', function () {
    return view('shop.shop_checkout');
})->name('shop.checkout');

Route::get('/reset-password', function () {
    return view('shop.reset_password');
})->name('shop.reset_password');

Route::get('/product/{id}', function() {
    return view('shop.product_detail');
})->name('shop.product_detail');

Route::get('/about', function () {
    return view('shop.about');
})->name('shop.about');

Route::get('/contact', function () {
    return view('shop.contact');
})->name('shop.contact');

Route::get('/wishlist', function () {
    return view('shop.wishlist');
})->name('shop.wishlist');

