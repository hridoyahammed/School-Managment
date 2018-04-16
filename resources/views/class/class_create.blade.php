@extends('layout.master')

@section('title', 'Class_Create')
@section('content')

<h1>Class Add</h1><br>
	{!! Form::open(array('route'=> 'class.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <div style="height:auto; width:55%;  ">

    <div style="text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('class_name') ? 'has-error' : '' }}">
            {{ Form::label('class_name', 'Class Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('class_name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Class name'))}}
                @if($errors->has('class_name'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('class_name') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('section') ? 'has-error' : '' }}">
            {{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('section', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Section'))}}
                @if($errors->has('section'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('section') }}</strong>
                   </span>
          @endif
    </div>

    <div style="margin-top: 10px;" class="row">
        	<div class="col-md-4"></div>
        	{{Form::submit('Submit', array('class'=>'btn btn-success col-md-4'))}}

        </div>
   </div>


@endsection