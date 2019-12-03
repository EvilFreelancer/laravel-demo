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
Route::get('/post/{post_id}', 'Web\IndexController@post')->name('post.show');
Route::get('/user/{user_id}', 'Web\IndexController@user')->name('user.show');
