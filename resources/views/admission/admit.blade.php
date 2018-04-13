@extends('layout.admission')

@section('title', 'Admission Page')
@section('content')
<h1>Admission Form</h1><br>
	{!! Form::open(array('route'=> 'admission.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <center>
  <div style="height:auto; background-color:#E9F7EF; width:55%;  ">

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::label('name', 'Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('name', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Name'))}}
                @if($errors->has('name'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('name') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500; background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('class') ? 'has-error' : '' }}">
            {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('class', ['class'=>'Select Class','One'=>'1', 'Two'=>'2', 'Three'=>'3', 'Four'=>'4', 'Five'=>'5'],array('class'=>'col-md-8 form-control', 'placeholder'=>'Class'))}}
                 @if($errors->has('class'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('class') }}</strong>
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

    <div style="text-align: left; font-weight:500;  background-color: #F7DCFA;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('fname') ? 'has-error' : '' }}">
            {{ Form::label('fname', 'Father Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('fname', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Father Name'))}}
                @if($errors->has('fname'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('fname') }}</strong>
                   </span>
          @endif
    </div>

    <div  style=" text-align: left; font-weight:500; background-color:#E7E6E6;  margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('mname') ? 'has-error' : '' }}">
            {{ Form::label('mname', 'Mother Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('mname', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Mother Name'))}}
                @if($errors->has('mname'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('mname') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('psn') ? 'has-error' : '' }}">
            {{ Form::label('psn', 'Previous School Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('psn', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Previous School Name'))}}
                @if($errors->has('psn'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('psn') }}</strong>
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

    <div style=" text-align: left; font-weight:500;  background-color: #F7DCFA; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('dob') ? 'has-error' : '' }}">
            {{ Form::label('dob', 'Date Of Birth', array('class'=>'col-md-4 form-group'))}}
            {{ Form::date('dob', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Date Of Birth'))}}
                @if($errors->has('dob'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('dob') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('fo') ? 'has-error' : '' }}">
            {{ Form::label('fo', "Father's Occupation", array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('fo', '', array('class'=>'col-md-8 form-control', 'placeholder'=>"Father's Occupation"))}}
                @if($errors->has('fo'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('fo') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500;  background-color: #F7DCFA;  margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('mo') ? 'has-error' : '' }}">
            {{ Form::label('mo', "Mother's Occupation", array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('mo', '', array('class'=>'col-md-8 form-control', 'placeholder'=>"Mother's Occupation"))}}
                @if($errors->has('mo'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('mo') }}</strong>
                   </span>
          @endif
    </div>

    <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('ai') ? 'has-error' : '' }}">
            {{ Form::label('ai', 'Annual Income', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('ai', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Annual Income'))}}
                @if($errors->has('ai'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('ai') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('gnid') ? 'has-error' : '' }}">
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

  
        <div style="text-align: left; font-weight:500; background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('Rel') ? 'has-error' : '' }}">
            {{ Form::label('Rel', 'Religion', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('Rel', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Religion'))}}
            @if($errors->has('Rel'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('Rel') }}</strong>
                   </span>
          @endif
        </div>

        <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('sta') ? 'has-error' : '' }}">
            {{ Form::label('sta', 'Status', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('sta', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Status'))}}
            @if($errors->has('sta'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('sta') }}</strong>
                   </span>
          @endif
        </div>

       

        <div style=" text-align: left; font-weight:500;  background-color: #F7DCFA;  margin: 0px; margin-top:10px;" class="row"  class="{{ $errors->has('prad') ? 'has-error' : '' }}">
            {{ Form::label('prad', 'Present Address*', array('class'=>'col-md-4 form-group'))}}
            {{ Form::textarea('prad', '',['size' => '20x3'], array('class'=>'col-md-8 form-control', 'placeholder'=>'Present Address'))}}
                @if($errors->has('prad'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('prad') }}</strong>
                   </span>
          @endif
            
        </div>

        <div style=" text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row"  class="{{ $errors->has('pead') ? 'has-error' : '' }}">
            {{ Form::label('pead', 'Permanent Address*', array('class'=>'col-md-4 form-group'))}}
            {{ Form::textarea('pead', '',['size' => '20x3'], array('class'=>'col-md-8 form-control', 'placeholder'=>'Permanent Address'))}}
                @if($errors->has('pead'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('pead') }}</strong>
                   </span>
          @endif
            
        </div>

        <div style="text-align: left; font-weight:500;   background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="form-control">
            {{ Form::label('gender', 'Gender', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('gender', ['gender'=>'Select Gender','F'=>'Female', 'M'=>'Male'] ,array('class'=>'form-control'))}}
            @if($errors->has('gender'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('gender') }}</strong>
                   </span>
          @endif
        </div>


        <div style=" text-align: left; font-weight:500; background-color:#E7E6E6;  margin: 0px; margin-top:10px;" class="row"  class="{{ $errors->has('image') ? 'has-error' : '' }}">
                {{ Form::label('image', ' Image', array('class'=>'col-md-4 control-label'))}}  
                {{ Form::file('image', array('class'=>'col-md-8 form-control'))}}

                   @if($errors->has('image'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('image') }}</strong>
                   </span>
          @endif
           </div>

           <div style="text-align: left; font-weight:500; background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('qut') ? 'has-error' : '' }}">
            {{ Form::label('qut', 'Quotas', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('qut', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Quotas'))}}
            @if($errors->has('qut'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('qut') }}</strong>
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
