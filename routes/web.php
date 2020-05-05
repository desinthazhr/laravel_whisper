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
    return view('landing');
});

Auth::routes();
Route::get('/about','PageController@about');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/makanan','MenuController@makanan');
Route::get('/minuman','MenuController@minuman');

Route::get('/pengunjung', 'PageController@pengunjung');
Route::post('/pengunjung', 'PageController@inisiasi');
Route::get('/selesai', 'PageController@selesai');

Route::get('/pengunjung/pesanan', 'PesananController@pesanan');
Route::get('/pengunjung/makanan', 'PesananController@makanan');
Route::get('/pengunjung/minuman', 'PesananController@minuman');

Route::get('/pesanan/{lantai}/{meja}', 'PesananController@show');
Route::patch('/pesanan/{lantai}/{meja}', 'PesananController@update');


Route::resource('/pesanan', 'PesananController');
Route::resource('/menu','MenuController');