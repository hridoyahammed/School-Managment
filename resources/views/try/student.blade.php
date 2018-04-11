@extends('layout.master')


@section('title', 'Student list')


@section('content')
<center><h1><b><i>Student List</i></b></h1></center><br>
<table class="table table-stripped">
	<tr>
		<th>Sl</th>
		<th>Image</th>
		<th>Name</th>
		<th>ID</th>
		<th>Age</th>
		<th>Class</th>
		<th>Section</th>
		<th>Session</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)
		<tr>
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

			<button type="submit" class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>
<div class="text-center">
	{!! $data->links() !!}
</div> 


@endsection