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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/user', 'UserController');
Route::get('file/list','FileController@index');
Route::get('file/show', 'FileController@show');
Route::get('file/upload','FileController@create');
Route::post('/file/store','FileController@store');
Route::post('file/update','FileController@update');
Route::get('file/edit/{id}','FileController@edit');
Route::post('file/destroy/{id}','FileController@destroy');