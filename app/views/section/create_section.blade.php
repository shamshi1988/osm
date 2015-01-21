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
<li class="active"><span>Manage Sections</span></li>
</ol>
<h1>Create New Section</h1>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="main-box">
<header class="main-box-header clearfix">
</header>
<div class="main-box-body clearfix">
{{ Form::open(array('url' => 'sections')) }}

	<div class="form-group">
		{{ Form::text('code', Input::old('code'), array('class' => 'form-control','placeholder'=>'Enter Code')) }}
		@if($errors->has('code'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('code')}}</font></span>
		@endif 
	</div>
	<div class="form-group">

<select class="form-control" name='classes_id'>
 @if($classes->count() > 0)
	<option value='0'>Select Class</option>
    @foreach($classes as $class)
     <option value='{{$class->id}}'>{{$class->name}}</option>
    @endforeach
  @else
   <option value='0'>Create Class First</option>
  @endif
</select>
@if($errors->has('class'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('class')}}</font></span>
@endif 
</div>
	<div class="form-group">
		{{ Form::text('name', Input::old('name'), array('class' => 'form-control','placeholder'=>'Enter Class Name')) }}
		@if($errors->has('name'))
 		<span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('name')}}</font></span>
		@endif
	</div>
	<div class="form-group">
	{{ Form::submit('Create Section!', array('class' => 'btn btn-primary')) }}
	</div>
	{{ Form::close() }}
</div>
</div>
</div>
  @include('layout.right_sidebar')
</div>
</div>

@stop