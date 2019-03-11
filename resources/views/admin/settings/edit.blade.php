@extends('layouts.admin')
@section('content')
<div class="row edit-settings">
  <div class="col-md-12">
    <div class="tile">
       <div class="tile-title green">
     
          <a href="{{ route('admin.settings.index') }}" class="btn btn-outline-warning table_top_btn"><i class="fa fa-arrow-left"></i> Back</i></a>
      </div>

        {!! Form::model($setting, ['route' => ['admin.settings.update', $setting->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data']) !!}
          <div class="tile-body">

            @include('admin.settings.partials.form')

          </div>

          <div class="tile-footer">
            <button class="btn btn-warning" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>

            <a class="btn btn-secondary" href="{{ route('admin.settings.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
          </div>

        {!! Form::close() !!}

    </div>
  </div>
</div>
@stop