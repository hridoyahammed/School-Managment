@extends('layout.master')

@section('title', 'Exam_Show')
@section('content')

	<center><h1>Exam List</h1></center><br>
<table class="table table-striped table-bordered">
	<tr>
		<th>Sl</th>
		<th>Exam ID</th>
		<th>Held On</th>
		<th>Year</th>
		<th style="text-align: center;" colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)

		<tr>
			<td>{{$sl++}}</td>
			<td>{{$student->examid}}</td>
			<td>{{$student->heldon}}</td>
			<td>{{$student->year}}</td>
			<td style="text-align: center;"><a href="{{route('exam.edit', $student->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a></td> 
			<td style="text-align: center;">
				{!!Form::open(array('route'=> ['exam.update',$student->id], 'method'=>'DELETE'))!!} 
				<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection