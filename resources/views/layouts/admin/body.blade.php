
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{$title['title']}}
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">{{$title['title']}}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     
        <!-- Left col -->
     
      @yield('content')
     

    </section>
    <!-- /.content -->
  </div>