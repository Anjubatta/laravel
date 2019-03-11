

<div class="form-group {!! ($errors->has('image') ? 'has-error' : '') !!}">
   
    
    @if(Request::segment(4)=='edit')
   
        @if(@$profile->image)
        <span class="show-image">
            <img src="{{ asset('uploads/users/'.$profile->image) }}" width="200px">
        </span>
        @endif
    @endif
	 {!! Form::label('image',' User image', ['class' => 'control-label']) !!}
    {!! Form::file('image', null, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : '') ]) !!}
	{!! $errors->first('image', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('fname') ? 'has-error' : '') !!}">
    {!! Form::label('fname','First Name', ['class' => 'control-label']) !!}
    {!! Form::text('fname', null, ['class' => 'form-control' . ($errors->has('fname') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('fname', '<span class="help-block">:message</span>') !!}
</div>

<div class="form-group {!! ($errors->has('lname') ? 'has-error' : '') !!}">
    {!! Form::label('lname','Last Name', ['class' => 'control-label']) !!}
    {!! Form::text('lname', null, ['class' => 'form-control' . ($errors->has('lname') ? ' is-invalid' : '') ]) !!}
    {!! $errors->first('lname', '<span class="help-block">:message</span>') !!}
</div>

