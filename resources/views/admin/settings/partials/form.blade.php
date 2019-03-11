<div class="form-group {!! ($errors->has('name') ? 'has-error' : '') !!}">
    {!! Form::label('sitetitle','Site Title', ['class' => 'control-label']) !!}
    {!! Form::text('sitetitle', null, ['class' => 'form-control' . ($errors->has('sitetitle') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('sitetitle', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('logo') ? 'has-error' : '') !!}">
    
    {!! $errors->first('logo', '<span class="help-block">:message</span>') !!}
    @if(Request::segment(4)=='edit')
   
        @if(@$setting->logo)
        <span class="show-image">
            <img src="{{ asset('uploads/site/'.$setting->logo) }}" width="200px">
			</span>
        @endif
    @endif
	{!! Form::label('logo',' Student image', ['class' => 'control-label']) !!}
    {!! Form::file('logo', null, ['class' => 'form-control' . ($errors->has('logo') ? ' is-invalid' : '') ]) !!}
</div>

<div class="form-group {!! ($errors->has('email') ? 'has-error' : '') !!}">
    {!! Form::label('admin_email','Admin Email', ['class' => 'control-label']) !!}
    {!! Form::email('admin_email', null, ['class' => 'form-control' . ($errors->has('admin_email') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('admin_email', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {!! ($errors->has('email') ? 'has-error' : '') !!}">
    {!! Form::label('support_email','Support Email', ['class' => 'control-label']) !!}
    {!! Form::email('support_email', null, ['class' => 'form-control' . ($errors->has('support_email') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('support_email', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {!! ($errors->has('company_address') ? 'has-error' : '') !!}">
    {!! Form::label('company_address','Company Address', ['class' => 'control-label']) !!}
    {!! Form::textarea('company_address', null, ['class' => 'form-control' . ($errors->has('company_address') ? ' is-invalid' : ''), 'rows' => '4' ]) !!}
    {!! $errors->first('company_address', '<span class="help-block">:message</span>') !!}
</div>


<div class="form-group {!! ($errors->has('maintenance_mode') ? 'has-error' : '') !!}">
    {!! Form::label('maintenance_mode','Maintenance Mode', ['class' => 'control-label']) !!}</br>
    {!! Form::radio('maintenance_mode', 1) !!} No
    {!! Form::radio('maintenance_mode', 0) !!} Yes
    {!! $errors->first('maintenance_mode', '<span class="help-block">:message</span>') !!}
</div>