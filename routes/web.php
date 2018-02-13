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


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes();

// Route::resource('/items','ItemControler');
Route::get('/barang/view','BarangController@index');

Route::resource('/barang','BarangController');

Route::get('/barang/view','BarangController@index');

Route::post('/save-barang','BarangController@saveBarangSementara');
Route::post('/delete-barang','BarangController@deleteBarangSementara');
Route::get('/barang-sementara/','BarangController@barangSementara');


Route::resource('/users','UserController');

// Route::get('{path}', function () {
//     return view('welcome');
// })->where( 'path', '([A-z\d-\/_.]+)?' );

