<?php

use App\Http\Controllers\C_admin;
use App\Http\Controllers\C_checkout;
use App\Http\Controllers\C_home;
use App\Http\Controllers\C_Item;
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



Route::get('/', [C_home::class, 'index']);



Route::get('product-details', [C_home::class, 'productDetails']);
Route::get('home', [C_home::class, 'index']);
Route::get('contact', [C_home::class, 'contact']);
Route::get('shop', [C_home::class, 'shop']);
Route::get('checkout', [C_home::class, 'checkout']);
Route::get('login', [C_home::class, 'login']);
Route::get('cart', [C_home::class, 'cart']);
Route::get('admin', [C_admin::class, 'index']);
Route::get('admin/list', [C_admin::class, 'getData'])->name('admin.list');
