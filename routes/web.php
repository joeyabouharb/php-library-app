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

Route::get('/', 'HomeController@index');

Route::get('/book/details/{id}', 'BookController@details');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search/result', 'SearchController@result');


Route::get('/book/create', 'BookController@create');


Route::post('/book/add', 'BookController@add');