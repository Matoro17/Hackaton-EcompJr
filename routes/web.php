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

Route::get('/index', 'SiteController@index');
Route::get('/lista-cats', 'SiteController@cats');
Route::get('/about','SiteController@about');
Route::get('/products','SiteController@products');
Route::get('/store', 'SiteController@store');
