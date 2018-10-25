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

  
Route::get('/login', [ 'as' => 'login', 'uses' =>'LoginController@login']);
Route::get('/loggedin', 'UserLoggedIn@auth');


//check trough middleware if user is logged in
Route::group(['middleware' => ['auth']], function() {
    // ----- ALL GET REQUESTS ----- 
    Route::get('/', 'HomeController@home');

    Route::get('/home', 'HomeController@home');

    Route::get('/interests', 'InterestsController@index');

    Route::get('/profile', 'ProfileController@profile');

    Route::get('/dashboard','DashboardController@dashboard');

    Route::get('/relax', 'RelaxController@relax');

    Route::get('/calendar', 'CalendarController@show');

    Route::get('/update', 'StravaApiController@update');

    Route::get('/admin', 'AdminController@show')->middleware('admin');

    Route::get('/logout', 'UserLoggedIn@logout');

    // ----- ALL POST REQUESTS -----

    
    
    Route::post('/', 'RelaxController@store');

    Route::post('/interests', 'InterestsController@save');
});
