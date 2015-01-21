@if(Session::has('success'))
<div class="alert alert-success">
<i class="fa fa-check-circle fa-fw fa-lg"></i>
<strong>{{Session::get('success')}}</strong> 
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
<i class="fa fa-times-circle fa-fw fa-lg"></i>
<strong>{{Session::get('error')}}</strong>
</div>
@endif