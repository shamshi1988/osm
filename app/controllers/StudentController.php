<?php

class StudentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('student.view')
		->with('students',Student::all())
		->with('title','All Student');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('student/create')
		->with('classes',Classes::all())
		->with('sections',Section::all())
		->with('title','Create Student');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//dd(Input::all());
		$rules = array(
			'code'       => 'required|unique:students',
			'fname'  	 => 'required|alpha|min:3',
			'mname'  	 => 'required|alpha|min:3',
			'lname'  	 => 'required|alpha|min:3',
			'class'  	 => 'required',
			'section'  	 => 'required',
			'roll_no'  	 => 'required|integer',
			'email'      => 'required|email|unique:students',
			'address'  	 => 'required|min:5',
			'phone_1'  	 => 'required|min:10',
			'religion'   => 'required|alpha|min:3',
			//'slug'      => '',
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('students')
			->withErrors($validator)
			->withInput();
				
		} 
		else 
		{
			// store
			$Student = new Student;
			$Student->code       = Input::get('code');
			$Student->fname   = Input::get('fname');	
			$Student->mname   = Input::get('mname');		
			$Student->lname   = Input::get('lname');
			$Student->class   = Input::get('class');
			$Student->section = Input::get('section');
			$Student->roll_no = Input::get('roll_no');									
			$Student->email   = Input::get('email');
			$Student->address = Input::get('address');
			$Student->phone   = Input::get('phone_1');
			$Student->religion= Input::get('religion');
						
			$Student->save();

			// redirect
			Session::flash('success', 'Successfully created user!');
			return Redirect::to('students');
		}
	}
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

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	

}
