@extends('layout.master')

@section('title', 'Mark_Update')
@section('content')

<h1>Update Mark</h1><br>
	{!! Form::open(array('route'=> ['mark.update',$try->id],'method'=>'PUT', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <div style="height:auto; width:55%;  ">

    <div style="text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('suid') ? 'has-error' : '' }}">
            {{ Form::label('suid', 'Subject ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('suid', $try->suid, array('class'=>'col-md-8 form-control', 'placeholder'=>'Subject ID'))}}
                @if($errors->has('suid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('suid') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('year') ? 'has-error' : '' }}">
            {{ Form::label('year', 'Year', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('year', $try->year, array('class'=>'col-md-8 form-control', 'placeholder'=>'Year'))}}
                @if($errors->has('year'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('year') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('mark') ? 'has-error' : '' }}">
            {{ Form::label('mark', 'Mark', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('mark', $try->mark, array('class'=>'col-md-8 form-control', 'placeholder'=>'Mark'))}}
                @if($errors->has('mark'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('mark') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #A6FEA4;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('stid') ? 'has-error' : '' }}">
            {{ Form::label('stid', 'Student ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('stid',$try->stid, array('class'=>'col-md-8 form-control', 'placeholder'=>'Student ID'))}}
                 @if($errors->has('stid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('stid') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #E7E6E6;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('exid') ? 'has-error' : '' }}">
            {{ Form::label('exid', 'Exam ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('exid',$try->exid, array('class'=>'col-md-8 form-control', 'placeholder'=>'Exam ID'))}}
                 @if($errors->has('exid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('exid') }}</strong>
                   </span>
          @endif
    </div>
    

    <div style="margin-top: 10px;" class="row">
        	<div class="col-md-4"></div>
        	{{Form::submit('Submit', array('class'=>'btn btn-success col-md-4'))}}

        </div>
   </div>


@endsection