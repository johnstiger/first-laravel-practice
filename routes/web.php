<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/about', 'utangController@about');
Route::get('/utang','utangController@index');
Route::get('/services', 'utangController@services');
Route::get('/Utang/create', 'utangController@create');
Route::post('/utang', 'utangController@store');
Route::get('/utang/{utang}','utangController@edit');