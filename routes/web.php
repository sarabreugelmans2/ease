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


// ----- ALL GET REQUESTS -----

Route::get('/', 'HomeController@home');

Route::get('/home', 'HomeController@home')->middleware('auth');

Route::get('/login', [ 'as' => 'login', 'uses' =>'LoginController@login']);

Route::get('/interests', 'InterestsController@index')->middleware('auth');

Route::get('/profile', 'ProfileController@profile')->middleware('auth');

Route::get('/dashboard','DashboardController@dashboard')->middleware('auth');

Route::get('/loggedin', 'UserLoggedIn@auth');

Route::get('/relax', 'RelaxController@relax')->middleware('auth');

Route::get('/calendar', 'CalendarController@show')->middleware('auth');

Route::get('/update', 'StravaApiController@update')->middleware('auth');

Route::get('/admin', 'AdminController@show')->middleware('admin');
// ----- ALL POST REQUESTS -----

Route::post('/', 'RelaxController@store')->middleware('auth');