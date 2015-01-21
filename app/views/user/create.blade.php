@extends('layout.master')

@section('content')
  
  <div id="content-wrapper">
<div class="row">
<div class="col-lg-12">

<div class="row">
<div class="col-lg-12">
	@include('layout.alerts')
<ol class="breadcrumb">
<li><a href="">Home</a></li>
<li class="active"><span>Manage Users</span></li>
</ol>
<h1>Create New Users</h1>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="main-box">
<header class="main-box-header clearfix">
</header>
<div class="main-box-body clearfix">
{{ Form::open(array('url' => 'users')) }}

	<div class="form-group">
		{{ Form::text('code', Input::old('code'), array('class' => 'form-control','placeholder'=>'Enter Code')) }}
		@if($errors->has('code'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('code')}}</font></span>
		@endif 
	</div>
	<div class="form-group">
		{{ Form::select('user_type', array('3'=>'Parent','2'=>'Teacher','1'=>'Admin'),Input::old('user_type'), array('class' => 'form-control','placeholder'=>'Enter User Type')) }}
		@if($errors->has('user_type'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('user_type')}}</font></span>
		@endif
	</div>
	<div class="form-group">
		{{ Form::email('email', Input::old('email'), array('class' => 'form-control', 'placeholder'=>'Enter Email')) }}
		@if($errors->has('email'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('email')}}</font></span>
		@endif
	</div>
 
	<div class="form-group">
		{{ Form::text('password', Input::old('password'), array('type'=>'password',  'class' => 'form-control', 'placeholder'=>'Enter password')) }}
		@if($errors->has('password'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('password')}}</font></span>
		@endif
	</div>
	<div class="form-group">
		<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Re Enter Password"data-toggle="tooltip" data-placement="bottom" title="Re Enter Password" name='password_confirmation' value=''>
		@if($errors->has('password_confirmation'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('password_confirmation')}}</font></span>
		@endif
	</div>
	<div class="form-group">
	{{ Form::submit('Create the User!', array('class' => 'btn btn-primary')) }}
	</div>
	{{ Form::close() }}
</div>
</div>
</div>
  @include('layout.right_sidebar')
</div>
</div>

@stop