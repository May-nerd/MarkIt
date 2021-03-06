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

Route::get('/notifications', function () {
    return view('notifications');
});

Auth::routes();


Route::post('/registrationform', 'RegistrationController@index');

Route::group(['middleware' => 'auth'], function(){

	Route::get('/', 'HomeController@welcome');

	Route::get('/home', 'HomeController@index');
	Route::resource('/profile', 'ProfileController');

	Route::get('/addauction',  'AuctionController@add');	
	Route::get('/auction/{id}',  'AuctionController@show');	
	Route::post('/createauction',  'AuctionController@create');	
	Route::get('/deleteauction/{id}',  'AuctionController@destroy');	

	Route::post('/createmark',  'MarkController@index');	

	// Route::get('/activeitems',  'HomeController@activeitems');
	Route::get('/markeditems',  'HomeController@markeditems');
	Route::get('/search',  'HomeController@search');

});