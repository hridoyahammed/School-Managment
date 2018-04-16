@extends('layout.master')

@section('title', 'Teacher Page')
@section('content')
<h1>Teacher Form</h1><br>
	{!! Form::open(array('route'=> 'teacher.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  
  <div style="height:auto;  width:55%;  ">

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('tid') ? 'has-error' : '' }}">
            {{ Form::label('tid', 'Teacher ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('tid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Teacher ID'))}}
                @if($errors->has('tid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('tid') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500; background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::label('name', 'Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('name','',array('class'=>'col-md-8 form-control', 'placeholder'=>'Name'))}}
                 @if($errors->has('name'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('name') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('nid') ? 'has-error' : '' }}">
            {{ Form::label('nid', 'NID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('nid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'NID'))}}
                @if($errors->has('nid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('nid') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('dob') ? 'has-error' : '' }}">
            {{ Form::label('dob', 'Date Of Birth', array('class'=>'col-md-4 form-group'))}}
            {{ Form::date('dob', '', array('class'=>'col-md-8 form-control', 'placeholder'=>' Date Of Birth'))}}
                @if($errors->has('dob'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('dob') }}</strong>
                   </span>
          @endif
    </div>

    <div  style=" text-align: left; font-weight:500; background-color:#E7E6E6;  margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('blood') ? 'has-error' : '' }}">
            {{ Form::label('blood', 'Blood Group', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('blood', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Blood Group'))}}
                @if($errors->has('blood'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('blood') }}</strong>
                   </span>
          @endif
    </div>

       <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('gender') ? 'has-error' : '' }}">
            {{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('gender', ['gender'=>'Select Gender','F'=>'Female', 'M'=>'Male'] ,array('class'=>'form-control'))}}
            @if($errors->has('gender'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('gender') }}</strong>
                   </span>
          @endif
        </div>


    

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('phone') ? 'has-error' : '' }}">
            {{ Form::label('phone', 'Phone', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('phone', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Phone'))}}
                @if($errors->has('phone'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('phone') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('rel') ? 'has-error' : '' }}">
            {{ Form::label('rel', 'Religion', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('rel', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Religion'))}}
                @if($errors->has('rel'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('rel') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('email') ? 'has-error' : '' }}">
            {{ Form::label('email', "Email Address", array('class'=>'col-md-4 form-group'))}}
            {{ Form::email('email', '', array('class'=>'col-md-8 form-control', 'placeholder'=>"Email Address"))}}
                @if($errors->has('email'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('email') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500;  background-color: #A6FEA4;  margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('address') ? 'has-error' : '' }}">
            {{ Form::label('address', "Address", array('class'=>'col-md-4 form-group'))}}
            {{ Form::textarea('address', '',['size' => '20x3'], array('class'=>'col-md-8 form-control', 'placeholder'=>"Address"))}}
                @if($errors->has('address'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('address') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row"  class="{{ $errors->has('image') ? 'has-error' : '' }}">
                {{ Form::label('image', ' Image', array('class'=>'col-md-4 control-label'))}}  
                {{ Form::file('image', array('class'=>'col-md-8 form-control'))}}

                   @if($errors->has('image'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('image') }}</strong>
                   </span>
          @endif
           </div>

      <div style="margin-top: 10px;" class="row">
          <div class="col-md-4"></div>
          {{Form::submit('Register', array('class'=>'btn btn-success col-md-4'))}}

      </div>
  </div>
      </center>
        <br>
        {!! Form::close() !!}
@endsection