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
	$nome = 'com Laravel';
    return view('site/welcome', compact('nome'));
});

Auth::routes();


Route::middleware('auth')->namespace('Admin')->prefix('admin')->group(function () {

	Route::resource('posts','AdminPostController');

	Route::resource('videos','AdminVideoController');
});

Route::get('inicio', 'HomeController@index');

Route::get('post/{id}', 'HomeController@post');















