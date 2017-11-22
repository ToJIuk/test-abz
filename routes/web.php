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

Route::resource('main', 'MainController');

Route::get('/', 'TreeController@index');

Route::get('/list/{field?}/{sort?}', 'MainController@index')->middleware('auth')->name('list');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
