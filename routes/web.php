<?php

use App\Http\Controllers\C_checkout;
use App\Http\Controllers\C_home;
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
    return view('index');
});

Route::get('/product-details', [C_home::class, 'productDetails']);
Route::get('/home', [C_home::class, 'index']);
Route::get('/contact', [C_home::class, 'contact']);
Route::get('/shop', [C_home::class, 'shop']);
Route::get('/checkout', [C_checkout::class, 'checkout']);
