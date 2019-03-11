@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile">
			<a href="{{ route('admin.settings.edit', $setting->id) }}" class="company_edit">
              <i class="fa fa-pencil-square-o"></i> Edit
            </a>  
			

    	<div class="tile-body sho-settings">
    		<div class="row">
          <div class="col-md-12">
            <img style="width:100%" src="{{ asset('uploads/site/'.$setting->logo) }}">
          </div>


              <p>
                <strong>Site Title</strong>: 
                {{ $setting->sitetitle }}
              </p>
              <p>
                <strong>Comapny Email</strong>: 
                {{ $setting->admin_email }}
              </p>
			<p>
                <strong>Support Email</strong>: 
                {{ $setting->support_email }}
             </p>
			<p>
                <strong>Company Address</strong>: 
                {{ $setting->company_address }}
             </p>




          <p>
            <strong>Status</strong>: 
            @if($setting->maintenance_mode=='1')
            Active
            @else
            Not active
            @endif
          </p>
          </div>
        </div>    		

    	</div>
    </div>
  </div>
</div>
@stop