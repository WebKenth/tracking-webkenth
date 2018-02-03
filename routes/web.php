<?php

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

Auth::routes();

Route::get('/', 'TrackingController@shop');
Route::get('/shop', 'TrackingController@shop');
Route::get('/product', 'TrackingController@product');
Route::get('/basket', 'TrackingController@basket');
Route::get('/checkout', 'TrackingController@checkout');
Route::get('/receipt', 'TrackingController@receipt');
