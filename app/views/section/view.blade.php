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
<li class="active"><span>Manage Sections</span></li>
</ol>
<div class="clearfix">
<h1 class="pull-left">All Section</h1>
<div class="pull-right top-page-ui">
<a href="" class="btn btn-primary pull-right">
<i class="fa fa-plus-circle fa-lg"></i> Add New Section
</a>
</div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="main-box">
<header class="main-box-header clearfix">

</header> <div class="main-box-body clearfix">     <table class="table user-
list table-hover"> <thead> <tr> 
<th><span>Sr.No</span></th>
<th><span>Name</span></th>
 <th>Action</th> </tr> </thead> <tbody>
@if($sections->count() > 0)   <?php $i=1; ?>     @foreach($sections as $section)
	
	  <tr>
	    <td>{{$i}}</td>
		<td>{{$section->name}}</td>
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