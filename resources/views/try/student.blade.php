@extends('layout.master')


@section('title', 'Student list')


@section('content')
<center><h1><b><i>Student List</i></b></h1></center><br>
<table class="table table-stripped table-bordered ">
	<tr style="text-align: center;">
		<th>Sl</th>
		<th>Image</th>
		<th>Name</th>
		<th>ID</th>
		<th>Age</th>
		<th>Class</th>
		<th>Section</th>
		<th>Session</th>
		<th colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)
		<tr style="text-align: center;">
			<td>{{$sl++}}</td>
			
			<td><img height="50px" width="auto" src="public/files/student/{{$student->image}}"></td>
			<td><a href="{{route('try.show', $student->id)}}">{{$student->name}}</a></td>
			<td>{{$student->sid}}</td>
			<td>{{$student->age}}</td>
			<td>{{$student->class}}</td>
			<td>{{$student->section}}</td>
			<td>{{$student->session}}</td>
			<td><a href="{{route('try.edit', $student->id)}}" class="btn btn-primary">Edit</a></td> 
			<td>
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