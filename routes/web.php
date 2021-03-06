<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::resource('/post', 'PostController');

route::resource('/event', 'EventController');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('/', 'AdminController');
    Route::resource('post', 'Admin\PostController');
    Route::resource('event', 'Admin\EventController');
});