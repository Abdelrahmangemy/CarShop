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

Auth::routes();


Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
/*
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
// Profile must be Login first
Route::group(['middleware'=>'auth'],function(){
	Route::get('/profile','ProfileController@index');
	Route::get('/orders','ProfileController@orders');
	Route::get('/address','ProfileController@address');
	Route::post('/updateAddress','ProfileController@updateAddress');
	Route::get('/password','ProfileController@password');
	Route::put('/updatePassword','ProfileController@updatePassword');
	Route::get('/WishList','HomeController@View_Wishist');
	Route::post('addToWishList','HomeController@addWishlist')->name('addToWishList');
	Route::get('/removeWishList/{id}','HomeController@removeWishList');
});


/* front end routes */




/* admin routes 


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']], function() {

	Route::get('/', function () {
	    return view('admin.index');
	});
	Route::resource('product','ProductController');
	Route::resource('category','CategoriesController');
	Route::resource('users','UserController');
	//for Shipping address must login first so i'll put here 
	Route::post('/formvalidate','CheckoutController@address');

});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
