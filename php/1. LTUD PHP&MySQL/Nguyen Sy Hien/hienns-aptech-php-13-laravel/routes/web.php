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

Route::get('/', function () { return view('welcome'); });

Route::post('create', 'UserController@create');

Route::get('index', 'UserController@index')->name('user');

Route::get('show/{id}', 'UserController@show'); 

Route::post('destroy/{id}', 'UserController@destroy');

Route::get('edit/{id}', 'UserController@edit');

Route::post('update/{id}', 'UserController@update');
