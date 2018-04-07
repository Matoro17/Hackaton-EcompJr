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

Route::get('/index.html', 'SiteController@index');
Route::get('/lista', 'SiteController@membros');
Route::get('/about.html','SiteController@about');
Route::get('/products.html','SiteController@products');
Route::get('/store.html', 'SiteController@store');
