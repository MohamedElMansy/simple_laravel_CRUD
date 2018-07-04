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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/products','productController@index')->name('products.index')->middleware('auth');

Route::get('/products/create','ProductController@create')->name('products.create')->middleware('auth');
Route::post('/products','ProductController@store')->name('products.store')->middleware('auth');
Route::delete('/products/{id}','ProductController@destroy')->name('products.destroy');

Route::get('/products/{id}','ProductController@show')->name('products.show');

Route::get('/categories','CategoryController@index')->name('categories.index');

Route::get('/products/edit/{id}','ProductController@edit')->name('products.edit');

Route::post('/products/update','ProductController@update')->name('products.update');


