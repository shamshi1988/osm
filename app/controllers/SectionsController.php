<?php

class SectionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data = Section::all();
		//dd($data);
	
		return View::make('section/view ')
		->with('sections', $data)
		->with('title', 'All Sections');

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$data = Classes::all();

		//dd($data);

		
		return View::make('section.create')
		->with('classes', $data);

		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'code'       => 'required|unique:sections',
			'name'  	 => 'required',
			'classes_id' => 'required'
			
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('sections')
			->withErrors($validator)
			->withInput();
				
		} 
		else 
		{
			// store
			$section = new Section;
			$section->code       = Input::get('code');
			$section->name   = Input::get('name');
			$section->classes_id   = Input::get('classes_id');		
			
			$section->save();

			// redirect
			Session::flash('success', 'Successfully created Class!');
			return Redirect::to('sections');
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
