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

Route::get('/', array(
	'as' => 'get-login',
	'uses' => 'SiteController@getLogin'));
Route::post('/post-login', array(
	'as' => 'post-login',
	'uses' => 'SiteController@postLogin'));


Route::group(array('before' => 'csrf'),function(){
	// Route::post('/', array(
	// 'as' => 'post-login',
	// 'uses' => 'SiteController@postLogin'));
});

Route::group(array('before' => 'is_loggedin'),function(){
	// Route::post('/', array(
	// 'as' => 'post-login',
	// 'uses' => 'SiteController@postLogin'));
	
	Route::resource('users', 'UserController');
	Route::resource('students', 'StudentController');
	Route::resource('parents', 'ParentController');
	Route::resource('classes', 'ClassesController');
	Route::resource('sections', 'SectionsController');
	Route::resource('teachers', 'TeacherController');
	Route::get('/dashboard', array(
	'as' => 'get-dashboard',
	'uses' => 'SiteController@getDashboard'));

		Route::get('/logout',array(
	     'as' => 'get-logout',
	     'uses' => 'SiteController@getLogout'
	    ));
});



Route::get('/test/{id}', array('as' => 'test', 'uses' => 'TestController@abc'));