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

Route::get('/', function () {
    return redirect()->action('ShowsController@index');
});

Route::auth();

Route::get('/home', 'ShowsController@index');

Route::post('/users/{user}/shows', 'ShowsController@store');

Route::resource('shows', 'ShowsController');

Route::resource('users', 'UsersController');
