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

Route::get('/records', 'RecordsController@index');
Route::get('/records/{id}', 'RecordsController@show');

Route::post('/denouncers', 'DenouncersController@store');
Route::get('/denouncers', 'DenouncersController@index');
Route::get('/denouncers/create', 'DenouncersController@create');
Route::get('/denouncers/{id}', 'DenouncersController@show');
Route::patch('/denouncers/{id}', 'DenouncersController@update');
Route::get('/denouncers/{id}/edit', 'DenouncersController@edit');

Route::resource('/algo','DenouncedsController');