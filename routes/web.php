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
Route::get('add','BookController@create');
Route::post('add','BookController@store');
Route::get('book','BookController@index');
Route::get('edit/{id}','BookController@edit');
Route::post('edit/{id}','BookController@update');
Route::delete('{id}','BookController@destroy');

Route::get('/', function () {
    return view('welcome');
});
