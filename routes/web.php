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

Route::get('admin/login','AdminController@getLogin')->name('login');
Route::post('admin/login','AdminController@postLogin');
Route::get('admin/logout','AdminController@logout');

Route::group(['prefix'=>'/admin','middleware'=>['auth']],function(){
    Route::group(['prefix'=>'home'],function(){
        Route::get('index',function(){
            return view('admin.home.index');
        });
    });
    Route::group(['prefix'=>'user'],function(){
        Route::get('listuser','UserController@getList')->name('index');
        Route::post('adduser','UserController@postThem');
        Route::post('update/{user_id}','UserController@postUpdate');
        Route::get('listuser/{user_id}', 'UserController@getDelete');
        Route::get('search', 'UserController@getSearch');
    });
});