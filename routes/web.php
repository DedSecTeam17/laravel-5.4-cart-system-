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

Route::get('/', "PagesController@getIndex");

Route::get('/helps',"PagesController@getHelps");

Route::get('/contact', "PagesController@getContact");

Route::get('/itemshelf', "PagesController@getAllItem");


Route::resource('laptops','LaptopController');

Route::resource('hardware','HardWareController');


Route::resource('categories','CategoriesController');

Route::resource('tags','TagController');
