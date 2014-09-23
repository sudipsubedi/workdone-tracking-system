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


Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('login', array('as'=>'login', 'uses'=>'UserController@login'));//display the login form

Route::post('login', array('as' => 'login', 'uses'=>'UserController@validate'));//for handling validation

Route::get('login/auth', array('as' => 'auth', 'uses'=>'UserController@authen'));

Route::get('logout', array('as' => 'logout', 'uses' => 'UserController@logout'));

Route::get('main', array('as'=> 'main', 'before' => 'auth','uses' => 'UserController@show'));//show main page

Route::get('staff', array('as' => 'staff', 'before' => 'auth', 'uses' => 'StaffController@show'));//show staff entry form