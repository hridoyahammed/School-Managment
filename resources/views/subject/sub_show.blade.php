@extends('layout.master')

@section('title', 'Sub_Show')
@section('content')

	<center><h1><b><i>View Subject</i></b></h1></center><br>
<table class="table table-stripped table-bordered">
	<tr style="text-align:center; ">
		<th>Sl</th>
		<th>Subject ID</th>
		<th>Subject Name</th>
		<th>Full Mark</th>
		<th>Class</th>
		<th>Techer ID</th>
		<th colspan="2">Action</th>
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)
		<tr style="text-align: center;">
			<td>{{$sl++}}</td>
			<td>{{$student->suid}}</td>
			<td>{{$student->suname}}</td>
			<td>{{$student->fmark}}</td>
			<td>{{$student->class}}</td>
			<td>{{$student->tid}}</td>
			<td><a href="{{route('subject.edit', $student->id)}}" class="btn btn-primary">Edit</a></td> 
			<td>
				{!!Form::open(array('route'=> ['subject.update',$student->id], 'method'=>'DELETE'))!!} 
			

			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection