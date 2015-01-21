<div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">
<ul class="nav nav-pills nav-stacked">
<li>
<a href="{{ URL::to('dashboard') }}">
<i class="fa fa-dashboard"></i>
<span>Dashboard</span>
<span class="label label-info label-circle pull-right">28</span>
</a>
</li>
<li>
<a href="#" class="dropdown-toggle"  class="active">
<i class="fa fa-table"></i>
<span>Manage Students</span>
<i class="fa fa-chevron-circle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="{{ URL::to('students/create') }}">
Create New Students
</a>
</li>
<li>
<a href="{{ URL::to('students') }}">
View Students
</a>
</li>
</ul>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-table"></i>
<span>Manage Parents</span>
<i class="fa fa-chevron-circle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="{{ URL::to('parents/create') }}">
Create Parent
</a>
</li>
<li>
<a href="{{ URL::to('parents') }}">
View Parents
</a>
</li>
</ul>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-table"></i>
<span>Manage Classes</span>
<i class="fa fa-chevron-circle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="{{ URL::to('classes/create') }}">
Create New Class
</a>
</li>
<li>
<a href="{{ URL::to('classes') }}">
View All Class
</a>
</li>
</ul>
</li>
<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-table"></i>
<span>Manage Sections</span>
<i class="fa fa-chevron-circle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="{{ URL::to('sections/create') }}">
Create New Section
</a>
</li>
<li>
<a href="{{ URL::to('sections') }}">
View Section
</a>
</li>
</ul>
</li>

<li>
<a href="#" class="dropdown-toggle">
<i class="fa fa-table"></i>
<span>Manage Users</span>
<i class="fa fa-chevron-circle-right drop-icon"></i>
</a>
<ul class="submenu">
<li>
<a href="{{ URL::to('users/create') }}">
Create New User
</a>
</li>
<li>
<a href="{{ URL::to('users') }}">
View User
</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</section>
</div>