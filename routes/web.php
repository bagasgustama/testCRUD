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
    return view('welcome');
});

Route::get('/pegawai','\App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/inputdata','\App\Http\Controllers\PegawaiController@inputdata');
Route::post('/pegawai/inputdata/create','\App\Http\Controllers\PegawaiController@create');
Route::get('/pegawai/edit/{id}','\App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update/{id}','\App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/delete/{id}','\App\Http\Controllers\PegawaiController@delete');
Route::get('/api','\App\Http\Controllers\APIController@index');
Route::get('/api/inputdata','\App\Http\Controllers\APIController@inputdata');