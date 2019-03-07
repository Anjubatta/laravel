  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('uploads/users/')}}/{{ Auth::user()->image }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->fname }} {{ Auth::user()->lname }} </p>
          
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        @if(auth()->user()->role=='1')

            @include('layouts.admin.sidemenus.admin')

        @elseif(auth()->user()->role=='2')

            @include('layouts.admin.sidemenus.admin')

        @endif
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>