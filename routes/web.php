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

Route::get('/', function () {
    return view('welcome');
});
// Trang quản trị
Route::get('admin/home',function(){
    return view('admin.users.list_user');
});
// Route::get('admin/login', 'AdminController@getlogin')->name('login');
// Route::post('admin/login', 'AdminController@postlogin');
Route::get('admin/login','AdminController@index')->name('login');