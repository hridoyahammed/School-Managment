@extends('layout.master')

@section('title', 'Attendenc_Show')
@section('content')

	<center><h1>Attendenc List</h1></center><br>
<table class="table table-striped table-bordered">
	<tr>
		<th>Sl</th>
		<th>Student ID</th>
		<th>Date</th>
		<th>Class</th>
		<th>Section</th>
		<th>In Time</th>
		<th>Out Time</th>
		<th>Status</th>
		<th style="text-align: center;">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)

		<tr>
			<td>{{$sl++}}</td>
			<td>{{$student->sid}}</td>
			<td>{{$student->date}}</td>
			<td>{{$student->class}}</td>
			<td>{{$student->section}}</td>
			<td>{{$student->intime}}</td>
			<td>{{$student->outtime}}</td>
			<td>{{$student->status}}</td> 
			<td  style="text-align: center;">
				{!!Form::open(array('route'=> ['attendenc.update',$student->id], 'method'=>'DELETE'))!!} 
			

			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection