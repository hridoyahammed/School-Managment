@extends('layout.master')

@section('title', 'Exam_Create')
@section('content')

<h1>Exam</h1><br>
	{!! Form::open(array('route'=> 'exam.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <div style="height:auto; width:55%;  ">

    <div style="text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('examid') ? 'has-error' : '' }}">
            {{ Form::label('examid', 'Exam ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('examid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Exam ID'))}}
                @if($errors->has('examid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('examid') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('heldon') ? 'has-error' : '' }}">
            {{ Form::label('heldon', 'Held On', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('heldon', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Held On'))}}
                @if($errors->has('heldon'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('heldon') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('year') ? 'has-error' : '' }}">
            {{ Form::label('year', 'Year', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('year', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Year'))}}
                @if($errors->has('year'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('year') }}</strong>
                   </span>
          @endif
    </div>


    

    <div style="margin-top: 10px;" class="row">
        	<div class="col-md-4"></div>
        	{{Form::submit('Submit', array('class'=>'btn btn-success col-md-4'))}}

        </div>
   </div>


@endsection