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

Route::get('/', 'Web\IndexController@index');
Route::get('/test/{date}', 'Web\IndexController@test');

Route::get('res/dummy', 'Web\ResController@dummy')->name('res.dummy');
Route::resource('res', 'Web\ResController@index');

Route::resource('res.subres', 'Web\SubresController@index');
