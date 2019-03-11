@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile show-prof">
			<a href="{{ route('admin.profile.edit', $profile->id) }}" class="company_edit">
              <i class="fa fa-pencil-square-o"></i> Edit
            </a>  
			

    	<div class="tile-body">
    		<div class="row">
          <div class="col-md-2">
            <img style="width:100%" src="{{ asset('uploads/users/'.$profile->image) }}">
          </div>

          <div class="col-md-10">

              <p>
                <strong>First Name </strong>: 
                {{ $profile->fname }}
              </p>
              <p>
                <strong>Last Name</strong>: 
                {{ $profile->lname }}
              </p>
			<p>
                <strong>Email</strong>: 
                {{ $profile->email }}
             </p>
			
          </div>
        </div>


        </div>    		

    	</div>
    </div>
  </div>
</div>
@stop