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

// Route::get('/records', 'RecordsController@index');
// Route::get('/records/{id}', 'RecordsController@show');
Route::resource('/records','RecordsController', ['except' => ['destroy']]);

Route::resource('/denounceds','DenouncedsController', ['except' => ['destroy']]);
Route::resource('/denouncers','DenouncersController', ['except' => ['destroy']]);
Route::resource('/crimes','CrimesController', ['except' => ['destroy']]);
