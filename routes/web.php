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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/hello', 'Hello@show')->name ('hello');

Auth::routes();

Route::get('/travel', 'travel@show')->name ('travel');

Route::get('/admin', 'dashboardController@index');

Route::get('/home3', function () {
    return view('home3');
});

Route::get('/general', function () {
    return view('admin.driver.general');
});
Route::resource('driver', 'driverController');

Route::resource('tiket', 'tiketController');
Route::resource('posts', 'PostsController');

Route::resource('mobil', 'mobilController');
