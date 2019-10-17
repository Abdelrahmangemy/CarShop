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