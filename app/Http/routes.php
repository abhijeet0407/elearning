<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/changepassword', 'HomeController@changepassword');
Route::get('/forgotpassword', 'forgotController@forgotpassword');
Route::get('/forgotpass', 'forgotController@forgotpass');
Route::get('/forgotpasssubmit', 'forgotController@forgotpasssubmit');
Route::get('/videologcount', 'HomeController@videologcount');
Route::get('/userregister','UserRegistrationController@index');
Route::get('/userregistercreate','UserRegistrationController@create');
Route::post('/userregistercreate','UserRegistrationController@store');
Route::get('/userdestroy','UserRegistrationController@userdestroy');
Route::get('/userlog','UserRegistrationController@userlog');
Route::get('/videolog','UserRegistrationController@videolog');
