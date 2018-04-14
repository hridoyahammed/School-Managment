@extends('layout.master')

@section('title', 'Sub_Show')
@section('content')

	<center><h1>Teacher List</h1></center><br>
    <table class="table table-striped table-bordered">
	<tr>
		<th>Sl</th>
		<th>Image</th>
		<th>Teacher ID</th>
		<th>Teacher Name</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone</th>
		<th style="text-align: center;" colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)

		<tr>
			<td>{{$sl++}}</td>
			<td style="text-align: center;"><img height="50px" width="auto" src="public/files/teacher/{{$student->image}}"></td>
			<td><a href="{{route('teacher.show', $student->id)}}">{{$student->name}}</a></td>
			<td>{{$student->tid}}</td>
			<td>{{$student->gender}}</td>
			<td>{{$student->email}}</td>
			<td>{{$student->phone}}</td>
			<td  style="text-align: center;"><a href="{{route('teacher.edit', $student->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></td> 
			<td  style="text-align: center;">
				{!!Form::open(array('route'=> ['teacher.update',$student->id], 'method'=>'DELETE'))!!} 
			

			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection