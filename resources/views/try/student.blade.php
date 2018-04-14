@extends('layout.master')


@section('title', 'Student list')


@section('content')
<center><h1>Student List</h1></center><br>
<table class="table table-striped table-bordered ">
	<tr>
		<th>Sl</th>
		<th>Image</th>
		<th>Name</th>
		<th>ID</th>
		<th>Age</th>
		<th>Class</th>
		<th>Section</th>
		<th>Session</th>
		<th style="text-align: center;" colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)
		<tr>
			<td>{{$sl++}}</td>
			
			<td style="text-align: center;"><img height="50px" width="auto" src="public/files/student/{{$student->image}}"></td>
			<td><a href="{{route('try.show', $student->id)}}">{{$student->name}}</a></td>
			<td>{{$student->sid}}</td>
			<td>{{$student->age}}</td>
			<td>{{$student->class}}</td>
			<td>{{$student->section}}</td>
			<td>{{$student->session}}</td>
			<td style="text-align: center;"><a href="{{route('try.edit', $student->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></td> 
			<td style="text-align: center;">
			{!!Form::open(array('route'=> ['try.update',$student->id], 'method'=>'DELETE'))!!} 

			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>
<div class="text-center">
	{!! $data->links() !!}
</div> 


@endsection