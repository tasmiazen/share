<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ URL::to('dist/img/tasu.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
       
          <li>
		  <a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>           
        </li>
		<li> 
          <a href="/" target="_blank"><i class="fa fa-globe"></i> <span>View Website</span></a>
        </li>
        <li class="treeview">
          <a href="">
            <i class="fa fa-edit"></i> <span>Posts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/topic/topics"><i class="fa fa-circle-o"></i> All Posts</a></li>
            <li><a href="/topic/topics/create"><i class="fa fa-circle-o"></i> Add New</a></li>
          </ul>
        </li>
         <li><a href="/admin/users"><i class="fa fa-book"></i> <span>Users</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>