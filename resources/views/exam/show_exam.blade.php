@extends('layout.master')

@section('title', 'Exam_Show')
@section('content')

	<center><h1><b>Exam List</b></h1></center><br>
<table class="table table-stripped table-bordered">
	<tr style="text-align: center;">
		<th>Sl</th>
		<th>Exam ID</th>
		<th>Held On</th>
		<th>Year</th>
		<th colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)

		<tr style="text-align: center;">
			<td>{{$sl++}}</td>
			<td>{{$student->examid}}</td>
			<td>{{$student->heldon}}</td>
			<td>{{$student->year}}</td>
			<td><a href="{{route('exam.edit', $student->id)}}" class="btn btn-primary">Edit</a></td> 
			<td>
				{!!Form::open(array('route'=> ['exam.update',$student->id], 'method'=>'DELETE'))!!} 
				<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection