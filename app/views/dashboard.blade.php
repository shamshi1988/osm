@extends('layout.master')

@section('content')
  
@if(Auth::check())
  			@if(Auth::user()->user_type=='1')
				@include('layout.admin_dashboard')
			@elseif(Auth::user()->user_type=='3')
				@include('layout.parent_dashboard')
			@elseif(Auth::user()->user_type=='2')
				@include('layout.teacher_dashboard')	
 			 @endif
		@endif	
@stop