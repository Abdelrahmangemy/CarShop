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
/* front end routes */

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/category/{id}','HomeController@showCates');
Route::get('/contact',function(){
	return view('frontend.contact');
});
Route::get('/productDetail/{id}','HomeController@detailPro');
Route::get('/cart','CartController@index');
Route::get('/cart/addItem/{id}','CartController@addItem');
Route::put('/cart/update/{id}','CartController@update');
Route::get('/cart/remove/{id}','CartController@destroy');
Route::get('checkout','CheckoutController@index');


/* front end routes */




/* admin routes */

Auth::routes();
Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function() {

	Route::get('/', function () {
	    return view('admin.index');
	});
	Route::resource('product','ProductController');
	Route::resource('category','CategoriesController');
	Route::resource('users','UserController');
});