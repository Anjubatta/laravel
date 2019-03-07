<li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Web Site</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ ($title['active']=='profile')?'active':'' }}"><a href="{{route('admin.profile.index')}}"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li class="{{ ($title['active']=='settings')?'active':'' }}"><a href="{{route('admin.settings.index')}}"><i class="fa fa-circle-o"></i> Settings</a></li>
           
          </ul>
        </li>