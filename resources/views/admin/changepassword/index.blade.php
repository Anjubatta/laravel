@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="tile"> 		
		{!! Form::open(['route' => 'admin.changepassword.store', 'enctype' => 'multipart/form-data']) !!}
        
          <div class="tile-body">

            
		<div class="form-group {!! ($errors->has('current') ? 'has-error' : '') !!}">
			{!! Form::label('current','Current Password', ['class' => 'control-label']) !!}
			{!! Form::text('current', null, ['class' => 'form-control' . ($errors->has('current') ? ' is-invalid' : '') ]) !!}
			{!! $errors->first('current', '<span class="help-block">:message</span>') !!}
		</div>
  
		<div class="form-group {!! ($errors->has('password') ? 'has-error' : '') !!}">
			{!! Form::label('password','New Password', ['class' => 'control-label']) !!}
			{!! Form::text('password', null, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : '') ]) !!}
			{!! $errors->first('password', '<span class="help-block">:message</span>') !!}
		</div>
  
		<div class="form-group {!! ($errors->has('password_confirmation') ? 'has-error' : '') !!}">
			{!! Form::label('password_confirmation','Confirm Password', ['class' => 'control-label']) !!}
			{!! Form::text('password_confirmation', null, ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : '') ]) !!}
			{!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
		</div>

            

          </div>

          <div class="tile-footer">
            <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Change Password</button>

            <a class="btn btn-secondary" href="{{ route('admin.settings.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
          </div>

        {!! Form::close() !!}
    
    </div>
  </div>
</div>
@stop