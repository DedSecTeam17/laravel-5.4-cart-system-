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

Route::get('/itemshelf', "PagesController@getAllItem")->name('admin_view');


Route::get('/admin', "AdminController@adminPanel")->name('admin.index');


Route::post('/send','PagesController@send')->name('send_email');


Route::resource('laptops','LaptopController');

Route::resource('carts','CartController',['except'=>'store']);


Route::post('carts/store/','CartController@store')->name('carts.store');



Route::resource('hardware','HardWareController');


Route::resource('categories','CategoriesController');

Route::resource('tags','TagController');

Route::resource('comments','CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//|        | POST      | carts                      | carts.store        | App\Http\Controllers\CartController@store                              | web          |
//|        | GET|HEAD  | carts                      | carts.index        | App\Http\Controllers\CartController@index                              | web          |
//|        | GET|HEAD  | carts/create               | carts.create       | App\Http\Controllers\CartController@create                             | web          |
//|        | DELETE    | carts/{cart}               | carts.destroy      | App\Http\Controllers\CartController@destroy                            | web          |
//|        | PUT|PATCH | carts/{cart}               | carts.update       | App\Http\Controllers\CartController@update                             | web          |
//|        | GET|HEAD  | carts/{cart}               | carts.show         | App\Http\Controllers\CartController@show                               | web          |
//|        | GET|HEAD  | carts/{cart}/edit          | carts.edit