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
    return view('layouts.homepage');
})->name('homepage');


Route::get('/products', function () {
    return view('layouts.productlist');
})->name('products');


Route::get('/about', function () {
    return view('layouts.aboutus');
})->name('about');