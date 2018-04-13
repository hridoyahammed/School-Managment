@extends('layout.master')

@section('title', 'Mark_Show')
@section('content')

	<center><h1><b>Mark List</b></h1></center><br>
<table class="table table-stripped table-bordered">
	<tr style="text-align: center;">
		<th>Sl</th>
		<th>Subject ID</th>
		<th>Year</th>
		<th>Mark</th>
		<th>Student ID</th>
		<th>Exam ID</th>
		<th colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)

		<tr style="text-align: center;">
			<td>{{$sl++}}</td>
			<td>{{$student->suid}}</td>
			<td>{{$student->year}}</td>
			<td>{{$student->mark}}</td>
			<td>{{$student->stid}}</td>
			<td>{{$student->exid}}</td>
			<td><a href="{{route('mark.edit', $student->id)}}" class="btn btn-primary">Edit</a></td> 
			<td>
				{!!Form::open(array('route'=> ['mark.update',$student->id], 'method'=>'DELETE'))!!} 
			

			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection