@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile">    			
		
		@if($setting)
			@include('admin.settings.show');
		@else:
			@include('admin.settings.create');
		@endif;
    	
    
    </div>
  </div>
</div>
@stop