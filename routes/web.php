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

Route::get('/home', 'HomeController@index');

Route::get('/profile/{username}', 'ProfileController@profile');

Route::post('/registrationform', 'RegistrationController@index');
