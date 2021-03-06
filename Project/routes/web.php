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

Route::get('/', function (){
    return view('client.home-page');
});


Route::get('/category', function (){
    return view('client.category');
});

Route::get('/preview', function (){
    return view('client.preview-pdf');
});

Route::get('/admin', function () {
    return view('layout.admin-master-layout');
});

Route::get('/detail', function (){
    return view('client.detail');
});

Route::resource('/admin/user', 'UserController');
Route::resource('/admin/file', 'FileController');
Route::resource('/admin/folder', 'FolderController');
Route::resource('/admin/tag', 'TagController');
