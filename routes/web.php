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

Route::get('products', 'ProductController@index')->name('products');

Route::get('products/getdata', 'ProductController@getdata')->name('products.getdata');

Route::get('/create', 'ProductController@create')->name('create');

Route::post('/store', 'ProductController@store')->name('store');

Route::get('/edit/{product}', 'ProductController@edit')->name('edit');

Route::post('/update/{product}', 'ProductController@update')->name('update');

Route::get('/show/{product}', 'ProductController@show')->name('show');

Route::get('/delete/{product}', 'ProductController@delete')->name('delete');

Route::post('/destroy/{product}', 'ProductController@destroy')->name('destroy');









