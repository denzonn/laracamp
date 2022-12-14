<?php

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

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('login', function () {
    return view('pages.login');
})->name('login');

Route::get('checkout', function () {
    return view('pages.checkout');
})->name('checkout');

Route::get('success-checkout', function () {
    return view('pages.success_checkout');
})->name('success-checkout');