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


Route::get(md5('/Chickenhut'), 'HomeController@chicken')->name('Chickenhut');
Route::get(md5('/Rajdarbar'), 'HomeController@raj')->name('Rajdarbar');
Route::get(md5('/Mexicano'), 'HomeController@mex')->name('Mexicano');
Route::get(md5('/Fish'), 'HomeController@fish')->name('Fish');
Route::get(md5('/Burger'), 'HomeController@burger')->name('Burger');
Route::get(md5('/Ice'), 'HomeController@ice')->name('Ice');

