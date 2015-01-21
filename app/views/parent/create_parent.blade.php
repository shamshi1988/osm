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
<li class="active"><span>Manage Parents</span></li>
</ol>
<h1>Create New Parents</h1>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="main-box">
<header class="main-box-header clearfix">

</header>
<div class="main-box-body clearfix">
{{ Form::open(array('url' => 'parents')) }}

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

<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Admin Email"data-toggle="tooltip" data-placement="bottom" title="Enter Admin Email" name='email' value='{{Input::old("email")}}'>
@if($errors->has('email'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('email')}}</font></span>
@endif 
</div>
<div class="form-group">
<input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter Password"data-toggle="tooltip" data-placement="bottom" title="Enter Password" name='password' value='{{Input::old("password")}}'>
@if($errors->has('password'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('password')}}</font></span>
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

<div class="form-group example-twitter-oss">

<div class="input-group">
<span class="input-group-addon"><i class="fa fa-phone"></i></span>
<input type="text" class="form-control" maxlength='12' data-toggle="tooltip" data-placement="bottom" title="Enter Phone 2" name='phone_2' value='{{Input::old("phone_2")}}' placeholder='Enter Phone 2'>
</div>
<span class="help-block">ex. 9999999999</span>
@if($errors->has('phone_2'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('phone_2')}}</font></span>
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