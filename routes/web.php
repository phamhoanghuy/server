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

Route::group(['middleware' => 'guest:web'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/login', 'Auth\LoginController@login')->name('login');
        Route::post('/login', 'Auth\LoginController@submitLogin')->name('login.submit');

        Route::get('/register', 'Auth\LoginController@register')->name('register');
        Route::get('/home', 'HomeController@index')->name('home');

        Route::post('admin/logout', 'Auth\LoginController@logout')->name('logout');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
