<?php

use App\Http\Controllers\C_admin;
use App\Http\Controllers\C_barang;
use App\Http\Controllers\C_checkout;
use App\Http\Controllers\C_home;
use App\Http\Controllers\C_Item;
use App\Http\Controllers\C_kategori;
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


// Route Users
Route::get('product-details', [C_home::class, 'productDetails']);
Route::get('home', [C_home::class, 'index']);
Route::get('contact', [C_home::class, 'contact']);
Route::get('shop', [C_home::class, 'shop']);
Route::get('checkout', [C_home::class, 'checkout']);
Route::get('cart', [C_home::class, 'cart']);

// Route Admin
Route::get('admin', [C_admin::class, 'index']);

//// Route Barang
Route::get('databarang', [C_barang::class, 'databarang'])->name('databarang');
Route::get('addbarang', [C_barang::class, 'addbarang']);
Route::get('databarang/list', [C_barang::class, 'getData'])->name('databarang.list');
Route::post('store', [C_barang::class, 'store'])->name('store');
//// End Route Barang

//// Route Kategori
Route::get('kategori', [C_kategori::class, 'kategori']);
Route::get('addkategori', [C_kategori::class, 'addkategori']);
Route::get('kategori/list', [C_kategori::class, 'getData'])->name('kategori.list');
//// End Route Kategori

//// Route Transaksi
Route::get('transaksi', [C_admin::class, 'transaksi']);
//// End Route Transaksi

//// Route Laporan
Route::get('laporan', [C_admin::class, 'laporan']);
//// End Route Laporan

//// Route User
Route::get('user', [C_admin::class, 'user']);
//// End Route User

//// Route Setting
Route::get('setting', [C_admin::class, 'setting']);
//// End Route Setting

//// Route CMS
Route::get('cms', [C_admin::class, 'cms']);
//// End Route CMS

//// Route Auth
Route::get('login', [C_home::class, 'login']);
//// End Route Auth

// End Route Admin
