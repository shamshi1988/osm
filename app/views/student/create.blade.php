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
<li class="active"><span>Manage Students</span></li>
</ol>
<h1>Create New Students</h1>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="main-box">
<header class="main-box-header clearfix">

</header>
<div class="main-box-body clearfix">
{{ Form::open(array('url' => 'students')) }}

<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Student Code"data-toggle="tooltip" data-placement="bottom" title="Enter Student Code" name='code' value='{{Input::old("code")}}'>
@if($errors->has('code'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('code')}}</font></span>
@endif 
</div>

<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name"data-toggle="tooltip" data-placement="bottom" title="Enter First Name" name='fname' value='{{Input::old("fname")}}'>
@if($errors->has('fname'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('fname')}}</font></span>
@endif 
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Middle Name"data-toggle="tooltip" data-placement="bottom" title="Enter Middle Name" name='mname' value='{{Input::old("mname")}}'>
@if($errors->has('mname'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('mname')}}</font></span>
@endif 
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name"data-toggle="tooltip" data-placement="bottom" title="Enter Last Name" name='lname' value='{{Input::old("lname")}}'>
@if($errors->has('lname'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('lname')}}</font></span>
@endif 
</div>

<div class="form-group">

<select class="form-control" name='class'>
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
<select class="form-control" name='section'>
 @if($sections->count() > 0)
	<option value='0'>Select Section</option>
    @foreach($sections as $section)
     <option value='{{$section->id}}'>{{$section->name}}</option>
    @endforeach
  @else
   <option value='0'>Create Section First</option>
  @endif
</select>
@if($errors->has('section'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('section')}}</font></span>
@endif 
</div>
<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Roll No"data-toggle="tooltip" data-placement="bottom" title="Enter Roll No" name='roll_no' value='{{Input::old("roll_no")}}'>
@if($errors->has('roll_no'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('roll_no')}}</font></span>
@endif 
</div>

<div class="form-group">
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Student Email"data-toggle="tooltip" data-placement="bottom" title="Enter Student Email" name='email' value='{{Input::old("email")}}'>
@if($errors->has('email'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('email')}}</font></span>
@endif 
</div>

<div class="form-group">
<textarea class="form-control" id="exampleTextarea" rows="3" data-toggle="tooltip" data-placement="bottom" title="Enter Student Address" placeholder="Enter Student Address" name='address'>{{Input::old("address")}}</textarea>
@if($errors->has('address'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('address')}}</font></span>
@endif
</div>

<div class="form-group example-twitter-oss">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-phone"></i></span>
<input type="text" class="form-control" maxlength='12' data-toggle="tooltip" data-placement="bottom" title="Enter Phone 1" name='phone_1' value='{{Input::old("phonbe_1")}}' placeholder='Enter Phone 1'>
</div>
<span class="help-block">ex. 9999999999</span>
@if($errors->has('phone_1'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('phone_1')}}</font></span>
@endif 
</div>

<div class="form-group">
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Religion"data-toggle="tooltip" data-placement="bottom" title="Enter Religion" name='religion' value='{{Input::old("religion")}}'>
@if($errors->has('religion'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('religion')}}</font></span>
@endif 
</div>


<div class="form-group">
<input name="_token"  value="{{csrf_token()}}" type="hidden">
<input type='submit' name='Submit' class='btn btn-primary' value='Create New Student'>
</div>
{{ Form::close() }}
</div>
</div>
</div>

  @include('layout.right_sidebar')

</div>
</div>

@stop