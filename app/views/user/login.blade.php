<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Online School Manager</title>
 
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css"/>
 
<script src="js/demo-rtl.js"></script>
 
<link rel="stylesheet" type="text/css" href="css/libs/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="css/libs/nanoscroller.css"/>
 
<link rel="stylesheet" type="text/css" href="css/compiled/theme_styles.css"/>
 
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300|Titillium+Web:200,300,400' rel='stylesheet' type='text/css'>
 
<link type="image/x-icon" href="favicon.png" rel="shortcut icon"/>
<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body id="login-page">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div id="login-box">
<div id="login-box-holder">
<div class="row">
<div class="col-xs-12">
	 @if(Session::has('error'))
               <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{Session::get('error')}}</font></span>
     @endif
<header id="login-header">
<div id="login-logo">
<img src="img/logo.png" alt=""/>
</div>
</header>
<div id="login-box-inner">
	{{ Form::open(array('url' => URL::Route('post-login'))) }}
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user"></i></span>
<input class="form-control" type="text" placeholder="Email address" name="email" value='{{Input::old("email")}}'>
@if($errors->has('email'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('email')}}</font></span>
@endif 
</div>
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" class="form-control" placeholder="Password" name="password" value='{{Input::old("password")}}'>
@if($errors->has('password'))
 <span class="help-block"><i class="icon-remove-sign"></i> <font color='red'>{{$errors->first('password')}}</font></span>
@endif 
</div>
<div id="remember-me-wrapper">
<div class="row">
<div class="col-xs-6">
<div class="checkbox-nice">
<input type="checkbox" id="remember-me" checked="checked"/>
<label for="remember-me">
Remember me
</label>
</div>
</div>
<a href="forgot-password.html" id="login-forget-link" class="col-xs-6">
Forgot password?
</a>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<input name="_token"  value="{{csrf_token()}}" type="hidden">
<button type="submit" class="btn btn-success col-xs-12">Login</button>
</div>
</div>
{{ Form::close() }}

</div>
</div>
</div>
</div>
<div id="login-box-footer">
<div class="row">
<div class="col-xs-12">
Do not have an account?
<a href="registration.html">
Register now
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="config-tool" class="closed">
<a id="config-tool-cog">
<i class="fa fa-cog"></i>
</a>
<div id="config-tool-options">
<h4>Layout Options</h4>
<ul>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-header"/>
<label for="config-fixed-header">
Fixed Header
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-sidebar"/>
<label for="config-fixed-sidebar">
Fixed Left Menu
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-fixed-footer"/>
<label for="config-fixed-footer">
Fixed Footer
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-boxed-layout"/>
<label for="config-boxed-layout">
Boxed Layout
</label>
</div>
</li>
<li>
<div class="checkbox-nice">
<input type="checkbox" id="config-rtl-layout"/>
<label for="config-rtl-layout">
Right-to-Left
</label>
</div>
</li>
</ul>
<br/>
<h4>Skin Color</h4>
<ul id="skin-colors" class="clearfix">
<li>
<a class="skin-changer" data-skin="" data-toggle="tooltip" title="Default" style="background-color: #34495e;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-white" data-toggle="tooltip" title="White/Green" style="background-color: #2ecc71;">
</a>
</li>
<li>
<a class="skin-changer blue-gradient" data-skin="theme-blue-gradient" data-toggle="tooltip" title="Gradient">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-turquoise" data-toggle="tooltip" title="Green Sea" style="background-color: #1abc9c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-amethyst" data-toggle="tooltip" title="Amethyst" style="background-color: #9b59b6;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-blue" data-toggle="tooltip" title="Blue" style="background-color: #2980b9;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-red" data-toggle="tooltip" title="Red" style="background-color: #e74c3c;">
</a>
</li>
<li>
<a class="skin-changer" data-skin="theme-whbl" data-toggle="tooltip" title="White/Blue" style="background-color: #3498db;">
</a>
</li>
</ul>
</div>
</div>
 
<script src="js/demo-skin-changer.js"></script>  
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.nanoscroller.min.js"></script>
<script src="js/demo.js"></script>  
 
 
<script src="js/scripts.js"></script>
 
</body>

<!-- Mirrored from centaurus.adbee.technology/v3/login.html by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 05 Dec 2014 12:09:45 GMT -->
</html>