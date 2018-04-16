@extends('layout.master')

@section('title', 'Attendenc_Create')
@section('content')

<h1>Attendenc</h1><br>
	{!! Form::open(array('route'=> 'attendenc.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <div style="height:auto; width:55%;  ">

    <div style="text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('sid') ? 'has-error' : '' }}">
            {{ Form::label('sid', 'Student ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('sid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Student ID'))}}
                @if($errors->has('sid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('sid') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('date') ? 'has-error' : '' }}">
            {{ Form::label('date', 'Date', array('class'=>'col-md-4 form-group'))}}
            {{ Form::date('date', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Date'))}}
                @if($errors->has('date'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('date') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('roll') ? 'has-error' : '' }}">
            {{ Form::label('roll', 'Roll', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('roll', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Roll'))}}
                @if($errors->has('roll'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('roll') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #A6FEA4;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('class') ? 'has-error' : '' }}">
           {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('class', ['class'=>'Select Class','One'=>'1', 'Two'=>'2', 'Three'=>'3', 'Four'=>'4', 'Five'=>'5'], array('class'=>'col-md-8 form-control', 'placeholder'=>'Class'))}}
                 @if($errors->has('class'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #E7E6E6;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('section') ? 'has-error' : '' }}">
            {{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('section','', array('class'=>'col-md-8 form-control', 'placeholder'=>' Section'))}}
                 @if($errors->has('section'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('section') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #A6FEA4;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('intime') ? 'has-error' : '' }}">
            {{ Form::label('intime', 'In Time', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('intime','', array('class'=>'col-md-8 form-control', 'placeholder'=>' In Time'))}}
                 @if($errors->has('intime'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('intime') }}</strong>
                   </span>
          @endif
    </div>


    <div  style="text-align: left; font-weight:500;  background-color: #E7E6E6;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('outtime') ? 'has-error' : '' }}">
            {{ Form::label('outtime', 'Section', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('outtime','', array('class'=>'col-md-8 form-control', 'placeholder'=>' Out Time'))}}
                 @if($errors->has('outtime'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('outtime') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #A6FEA4;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('status') ? 'has-error' : '' }}">
            {{ Form::label('status', 'Status', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('status','', array('class'=>'col-md-8 form-control', 'placeholder'=>' Status'))}}
                 @if($errors->has('status'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('status') }}</strong>
                   </span>
          @endif
    </div>
    

    <div style="margin-top: 10px;" class="row">
        	<div class="col-md-4"></div>
        	{{Form::submit('Submit', array('class'=>'btn btn-success col-md-4'))}}

        </div>
   </div>


@endsection