<?php

class SiteController extends BaseController {


	public function index()
	{

		return 'hello';
	}
	
	public function getDashboard()
	{

		return View::make('dashboard')
		->with('title','Dashboard');
	}

	public function getLogin(){

		if (Auth::check())
			{
			    // The user is logged in...

			    return Redirect::to('dashboard');
			}

		return View::make('user/login');
	}
	public function postLogin()
	{
		//dd(Input::all());

		if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) 
		{

			$user =Auth::user();
	    	return Redirect::to('dashboard')
	    	->with('success', 'You are now logged in!');
		} 
		else 
		{
    	return Redirect::to('/')
        ->with('success', 'Your username/password combination was incorrect')
        ->withInput();
		}
	}
	public function getLogout()
	{

		Auth::logout();
		return Redirect::to('/')
		->with('success', 'Successfully Logout!');
	}
}