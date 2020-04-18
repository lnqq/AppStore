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

//tao 1 middlewaer cho users nua 
Route::view('admin/login','Admin.page.login')->name('login.admin');
Route::post('admin/login','UserController@loginAdmin')->name('admin.login');
Route::group(['prefix' => 'admin', 'middleware' => 'adminMiddleware'], function(){
	Route::view('/','Admin.page.index');
	Route::resource('brand','brandsController');
	Route::resource('category','CategoryController');
	Route::resource('product','ProductsController');
	Route::resource('customer','CustomersController');
	Route::resource('orders','OrderController');
});

Route::get('home','HomeController@index');

//client
//login facebook
Route::get('callback/{social}','UserController@handleProviderCallback');
Route::get('login/{social}','UserController@redirectProvider')->name('login.social');
Route::post('updatepass','UserController@updatePassClient')->name('updatepassword');

Route::post('login','UserController@loginClient')->name('login');
Route::post('register','UserController@registerClient')->name('register');
Route::get('logout','UserController@logout');

//cart
Route::resource('cart','CartController');
Route::get('addcart/{id}','CartController@addCart')->name('addCart');
Route::get('checkout','CartController@checkout')->name('cart.ckeckout');
Route::post('/thanhtoan', 'CartController@thanhtoan')->middleware('UserMiddleware');
Route::get('product/{id}/detail','HomeController@detail')->name('product.detail');
Route::get('indexbrand/{id}','HomeController@indexbrand')->name('indexbrand');
Route::get('indexcategories/{id}','HomeController@indexcategories')->name('indexcategories');

//Laravel Localization - Pick Language
Route::get('/set-language/{lang}', 'LanguagesController@set')->name('set.language');