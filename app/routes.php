<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showGames');
Route::get('/game/{id}','GameController@showGame');

Route::group(array('prefix' => 'api'), function()
{
    Route::get('/games', 'GamesController@showGames');
    Route::get('/game/{id}', 'GamesController@showGame');
});

