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
    return view('home');
});

Route::get('/price', 'apbncontroller@prices')->name('price');

Route::get('/contact', 'apbncontroller@contacts')->name('contact');

Route::get('/home', 'apbncontroller@homee')->name('home');

Route::get('/order', 'apbncontroller@orders')->name('order');

Route::get('/drawings', 'apbncontroller@drawing')->name('drawings');

Route::get('/order2', 'apbncontroller@orders2')->name('order2');

Route::get('/order3', 'apbncontroller@orders3')->name('order3');

Route::get('/order4', 'apbncontroller@orders4')->name('order4');






