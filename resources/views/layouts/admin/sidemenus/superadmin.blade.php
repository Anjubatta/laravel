<li class="header">MAIN NAVIGATION</li>
        <li class="{{ ($title['active']=='setting')?'active':'' }} treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($title['active']=='setting')?'active':'' }}"><a href="{{route('admin.dashboard.index')}}"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
           
		   <li class="{{ ($title['active']=='chnagepassword')?'active':'' }}"><a href="{{route('admin.chnagepassword.index')}}"><i class="fa fa-circle-o"></i> Change Password</a></li>
           
		   </ul>
        </li>