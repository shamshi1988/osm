<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		//echo Auth::user()->user_type;
		// echo "<pre>";
		// dd(Auth::user());
		// echo "</pre>";
		return View::make('user.view')
	  ->with('users',User::all())
	  ->with('title','All Users');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user.create')
		->with('title','Create Users');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		///dd(Input::all());
			$rules = array(
			'code'       => 'required|unique:users',
			'user_type'  => 'required',
			'email'      => 'required|email|unique:users',
			'password'  => 'required|confirmed',
			//'slug'      => '',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('users')
			->withErrors($validator)
			->withInput();

				
		} else {
			// store
			$User = new User;
			$User->code       = Input::get('code');
			$User->user_type  = Input::get('user_type');		
			$User->email      = Input::get('email');
			$User->password   = Hash::make(Input::get('password'));
						
			$User->save();

			// redirect
			Session::flash('success', 'Successfully created user!');
			return Redirect::to('users');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
			public function show($id)
			{
				//
			}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	

		
}
