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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Auth::routes();


Route::post('/registrationform', 'RegistrationController@index');

Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index');
	Route::resource('/profile', 'ProfileController');

	Route::get('/addauction',  'AuctionController@add');	
	Route::get('/auction/{id}',  'AuctionController@show');	
	Route::post('/createauction',  'AuctionController@create');	

	Route::get('/activeitems',  function () {
	    return view('activeitems');
	});
});