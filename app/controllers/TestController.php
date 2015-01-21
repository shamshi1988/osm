<?php

class TestController extends BaseController {


	public function index(){

		return 'hello';
	}

	public function abc($id){

		return $id;
	}
}