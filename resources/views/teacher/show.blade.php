@extends('layout.master')

@section('title', 'Sub_Show')
@section('content')

	<center><h1><b>Teacher List</b></h1></center><br>
<table class="table table-stripped table-bordered">
	<tr style="text-align: center;">
		<th>Sl</th>
		<th>Image</th>
		<th>Teacher ID</th>
		<th>Teacher Name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone</th>
		<th colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)

		<tr style="text-align: center;">
			<td>{{$sl++}}</td>
			<td><img height="50px" width="auto" src="public/files/teacher/{{$student->image}}"></td>
			<td><a href="{{route('try.show', $student->id)}}">{{$student->name}}</a></td>
			<td>{{$student->tid}}</td>
			<td>{{$student->gender}}</td>
			<td>{{$student->email}}</td>
			<td>{{$student->phone}}</td>
			<td><a href="{{route('teacher.edit', $student->id)}}" class="btn btn-primary">Edit</a></td> 
			<td>
				{!!Form::open(array('route'=> ['teacher.update',$student->id], 'method'=>'DELETE'))!!} 
			

			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection