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
    return view('welcome');
});


Route::view('/', 'welcome')->name('home');
Route::view('/pubg', 'pubg')->name('pubg');
Route::view('/fortnite', 'fortnite')->name('fortnite');
Route::view('/voucher', 'voucher')->name('voucher');
Route::view('/cart', 'cart')->name('cart');
Route::view('/directPay', 'direct-pay')->name('directPay');
