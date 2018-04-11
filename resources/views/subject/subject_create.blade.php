@extends('layout.master')

@section('title', 'Subject_Create')
@section('content')

<h1>Add Subject</h1><br>
	{!! Form::open(array('route'=> 'subject.store', 'class'=>'form-horizontal', 'files'=>true)) !!}
  <div style="height:auto; width:55%;  ">

    <div style="text-align: left; font-weight:500;  background-color:#E7E6E6;  margin: 0px; " class="row" class="{{ $errors->has('suid') ? 'has-error' : '' }}">
            {{ Form::label('suid', 'Subject ID', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('suid', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Subject ID'))}}
                @if($errors->has('suid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('suid') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500;  background-color: #F7DCFA; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('suname') ? 'has-error' : '' }}">
            {{ Form::label('suname', 'Subject Name', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('suname', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Subject Name'))}}
                @if($errors->has('suname'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('suname') }}</strong>
                   </span>
          @endif
    </div>

    <div style="text-align: left; font-weight:500; background-color:#E7E6E6; margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('fmark') ? 'has-error' : '' }}">
            {{ Form::label('fmark', 'Full Mark', array('class'=>'col-md-4 form-group'))}}
            {{ Form::text('fmark', '', array('class'=>'col-md-8 form-control', 'placeholder'=>'Full Mark'))}}
                @if($errors->has('fmark'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('fmark') }}</strong>
                   </span>
          @endif
    </div>

    <div  style="text-align: left; font-weight:500;  background-color: #F7DCFA;  margin: 0px; margin-top:10px; " class="row" class="{{ $errors->has('class') ? 'has-error' : '' }}">
            {{ Form::label('class', 'Class', array('class'=>'col-md-4 form-group'))}}
            {{ Form::select('class', ['class'=>'Select Class','One'=>'1', 'Two'=>'2', 'Three'=>'3', 'Four'=>'4', 'Five'=>'5'], array('class'=>'col-md-8 form-control', 'placeholder'=>'Class'))}}
                 @if($errors->has('class'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color: red;">
          <strong>{{ $errors->first('class') }}</strong>
                   </span>
          @endif
    </div>

    <div  style=" text-align: left; font-weight:500;  background-color:#E7E6E6; margin: 0px; margin-top:10px;" class="row" class="{{ $errors->has('tid') ? 'has-error' : '' }}">
            {{ Form::label('tid', 'Techer ID', array('class'=>'col-md-4 form-group'))}}
            <select name="tid" id="" class="form-control col-md-6">
                        <option value="">Select teacher</option>
                        @foreach($teachers as $teacher)
                            <option value="{{$teacher->tid}}">{{$teacher->name}}</option>
                        @endforeach
                    </select>
                @if($errors->has('tid'))
                <div class="col-md-6"></div>
         <span class="col-md-6" style="text-align: right; color:red;">
          <strong>{{ $errors->first('tid') }}</strong>
                   </span>
          @endif
    </div>

    

    <div style="margin-top: 10px;" class="row">
        	<div class="col-md-4"></div>
        	{{Form::submit('Submit', array('class'=>'btn btn-success col-md-4'))}}

        </div>
   </div>


@endsection