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


// Route::resource('/items','ItemControler');
Route::get('/barang/view','BarangController@index');

Route::resource('/barang','BarangController');

Route::get('{path}', function () {
    return view('welcome');
})->where( 'path', '([A-z\d-\/_.]+)?' );

