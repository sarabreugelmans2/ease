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

Route::get('/', function () { return view('welcome');});

Route::get('/home', 'HomeController@home');

Route::get('/login', 'LoginController@login');

Route::get('/interests', 'InterestsController@index');

Route::get('/profile', 'ProfileController@profile');

Route::get('/dashboard', 'DashboardController@dashboard');

Route::get('/loggedin', 'UserLoggedIn@auth');

Route::get('/relax', 'RelaxController@relax');

Route::get('/calendar', 'CalendarController@show');

Route::get('/update', 'StravaApiController@update');
// ----- ALL POST REQUESTS -----

Route::post('/', 'RelaxController@store');