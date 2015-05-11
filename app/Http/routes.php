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

Route::get('/', 'HomeController@index');

Route::get('/hi', function() {
	return view('hello');
});


Route::get('/matches', 'MatchController@index');

Route::get('/standing', 'StandingController@table');
Route::get('/standing/table', 'StandingController@table');
Route::get('/standing/top-scores', 'StandingController@topScores');
Route::get('/standing/top-assists', 'StandingController@topAssists');


Route::get('/news', 'PostsController@index');
