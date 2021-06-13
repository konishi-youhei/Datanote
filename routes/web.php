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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 'middleware'=>'auth:admin'を追加
Route::group(['prefix' => 'admin', 'middleware'=>'auth:admin'], function(){

    //管理者ログインしたユーザーのみアクセス可能にしたいルーティングを記述
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');

});

//ログインやログアウト後のページに関しては、非ログイン時にアクセスするので'middleware'=>'auth:admin'の外に記述する
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('admin/register', 'Admin\RegisterController@showRegisterForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register')->name('admin.register');
