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

Route::get('/hello', function()
{
	return View::make('hello');
});

Route::get('/teste',  array('as' => 'teste', 'uses' => 'PostsController@getTeste'));
Route::get('/admin', array('as' => 'admin', 'uses' => 'PostsController@getAdmin'));
Route::post('/login', array('as' => 'login', 'uses' => 'UsersController@postLogin'));
Route::post('/add', array('as' => 'add_new_post', 'uses' => 'PostsController@postAdd'));
Route::get('/logout', array('as' => 'logout', 'uses' => 'UsersController@getLogout'));
Route::get('/', array('as' => 'index', 'uses' => 'PostsController@getIndex'));




