@extends('layout.master')

@section('content')
  
  <div id="content-wrapper">
<div class="row">
<div class="col-lg-12">

<div class="row">
<div class="col-lg-12">
	@include('layout.alerts')
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active"><span>Manage Students</span></li>
</ol>
<div class="clearfix">
<h1 class="pull-left">All Students</h1>
<div class="pull-right top-page-ui">
<a href="" class="btn btn-primary pull-right">
<i class="fa fa-plus-circle fa-lg"></i> Add New Student
</a>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="main-box">
<header class="main-box-header clearfix">

</header>
<div class="main-box-body clearfix">
    <table class="table user-list table-hover">
<thead>
<tr>
<th><span>Sr.No</span></th>
<th><span>Name</span></th>
<th class="text-center"><span>Status</span></th>
<th><span>Email</span></th>
<th>Action</th>
</tr>
</thead>
<tbody>
  @if($students->count() > 0)
  <?php $i=1; ?>
    @foreach($students as $student)
	
	  <tr>
	    <td>{{$i}}</td>
		<td>{{$student->fname}} {{$student->mname}} {{$student->lname}}</td>
		<td class="text-center">
		 @if($student->user_type == 1)
		 <span class="label label-success">Active</span>
		 @else
		 <span class="label label-default">Inactive</span>
		 @endif
		
		</td>
		<td>{{$student->email}}</td>
		<td style="width: 20%;">

<a href="" class="table-link">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
</span>
</a>
<a href="#" class="table-link danger">
<span class="fa-stack">
<i class="fa fa-square fa-stack-2x"></i>
<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
</span>
</a>
</td>
</tr>
	  <?php $i++; ?>
	@endforeach
  @else
  <tr><td colspan='7'><font color='red'>No Schools Created Under This System</font></td></tr>
  @endif


</tbody>
</table>
</div>
</div>
</div>

  @include('layout.right_sidebar')

</div>
</div>
</div>
</div>
@stop