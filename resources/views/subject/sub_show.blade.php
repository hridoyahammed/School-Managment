@extends('layout.master')

@section('title', 'Sub_Show')
@section('content')

	<center><h1><b><i>View Subject</i></b></h1></center><br>
<table class="table table-stripped">
	<tr>
		<th>Sl</th>
		<th>Subject ID</th>
		<th>Subject Name</th>
		<th>Full Mark</th>
		<th>Class</th>
		<th>Techer ID</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)
		<tr>
			<td>{{$sl++}}</td>
			<td>{{$student->suid}}</td>
			<td>{{$student->suname}}</td>
			<td>{{$student->fmark}}</td>
			<td>{{$student->class}}</td>
			<td>{{$student->tid}}</td>
			<td><a href="{{route('subject.edit', $student->id)}}" class="btn btn-primary">Edit</a></td> 
			<td>
				{!!Form::open(array('route'=> ['subject.update',$student->id], 'method'=>'DELETE'))!!} 
			

			<button type="submit" class="btn btn-danger" onclick="return deleteConfirm()"><i class="ion ion-ios-trash-outline">Delete</i></button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection