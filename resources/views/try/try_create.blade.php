@extends('layout.master')

@section('title', 'Registration_Page')
@section('content')
<h1>Student Registration Form</h1><br>
	{!! Form::open(array('route'=> 'try.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <div style="height:auto; width:55%;  ">

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; " class="row" class="{{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::label('name', 'Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Name'))}}
                @if($errors->has('name'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('name') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('sid') ? 'has-error' : '' }}">
            {{ Form::label('sid', 'ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('sid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'ID'))}}
                @if($errors->has('sid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('sid') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('fname') ? 'has-error' : '' }}">
            {{ Form::label('fname', 'Father Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('fname', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Father Name'))}}
                @if($errors->has('fname'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('fname') }}</strong>
                   </span>
          @endif
    </div>

    <div  style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('mname') ? 'has-error' : '' }}">
            {{ Form::label('mname', 'Mother Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('mname', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Mother Name'))}}
                @if($errors->has('mname'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('mname') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500; background-color: #A6FEA4;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('class') ? 'has-error' : '' }}">
            {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('class', ['class'=>'Select Class','One'=>'1', 'Two'=>'2', 'Three'=>'3', 'Four'=>'4', 'Five'=>'5'],array('class'=>'col-md-8 form-control', 'placeholder'=>'Class'))}}
                 @if($errors->has('class'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('section') ? 'has-error' : '' }}">
            {{ Form::label('section', 'Section', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('section', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Section'))}}
                @if($errors->has('section'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('section') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('session') ? 'has-error' : '' }}">
            {{ Form::label('session', 'Session', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('session', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Section'))}}
                @if($errors->has('session'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('session') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('roll') ? 'has-error' : '' }}">
            {{ Form::label('roll', 'Roll', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('roll', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Roll'))}}
                @if($errors->has('roll'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red; ">
          <strong>{{ $errors->first('roll') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('reg') ? 'has-error' : '' }}">
            {{ Form::label('reg', 'Reg', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('reg', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Reg'))}}
                @if($errors->has('reg'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('reg') }}</strong>
                   </span>
          @endif
    </div>

        <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('shift') ? 'has-error' : '' }}">
            {{ Form::label('shift', 'Shift', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('shift', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Shift'))}}
               @if($errors->has('shift'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('shift') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('phone') ? 'has-error' : '' }}">
            {{ Form::label('phone', 'Phone', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('phone', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Phone'))}}
                @if($errors->has('phone'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('phone') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('dob') ? 'has-error' : '' }}">
            {{ Form::label('dob', 'Date Of Birth', array('class'=>'col-md-4 form-group'))}}
            {{ Form::date('dob', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Date Of Birth'))}}
                @if($errors->has('dob'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('dob') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('gnid') ? 'has-error' : '' }}">
            {{ Form::label('gnid', 'Guardian NID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('gnid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Guardian NID'))}}
                @if($errors->has('gnid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('gnid') }}</strong>
                   </span>
          @endif
    </div>

  <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('blood') ? 'has-error' : '' }}">
            {{ Form::label('blood', 'Blood Group', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('blood', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Blood Group'))}}
                @if($errors->has('blood'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('blood') }}</strong>
                   </span>
          @endif
    </div>

  
        <div style="text-align: left; font-weight:500;  background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('age') ? 'has-error' : '' }}">
            {{ Form::label('age', 'Age', array('class'=>'col-md-4 form-group'))}}
            {{ Form::number('age', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Student Age'))}}
            @if($errors->has('age'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('age') }}</strong>
                   </span>
          @endif
        </div>

       

        <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row"  class="{{ $errors->has('address') ? 'has-error' : '' }}">
            {{ Form::label('address', 'Address', array('class'=>'col-md-4 form-group'))}}
            {{ Form::textarea('address', '',['size' => '20x3'], array('class'=>'col-md-8 form-control', 'placeholder'=>'Address'))}}
                @if($errors->has('address'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('address') }}</strong>
                   </span>
          @endif
            
        </div>

        <div style="text-align: left; font-weight:500; background-color: #A6FEA4; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('gender') ? 'has-error' : '' }}">
            {{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('gender', ['gender'=>'Select Gender','Female'=>'Female', 'Male'=>'Male'] ,array('class'=>'form-control'))}}
            @if($errors->has('gender'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('gender') }}</strong>
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
        <br>
        {!! Form::close() !!}
@endsection