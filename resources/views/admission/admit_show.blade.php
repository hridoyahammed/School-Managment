@extends('layout.master')


@section('title', 'Admission List')


@section('content')
<center><h1> Admission List</h1></center><br>
<table class="table table-responsive table-bordered table-striped">
	<tr style="text-align: center;">
		<th>Sl</th>
		<th>Image </th>
		<th>Name</th>
		<th>Class</th>
		<th>Year</th>
		<th>Father Name</th>
		<th>Mother Name</th>
		<th>Previous School Name</th>
		<th>Number</th>
		<th>Date Of Birth</th>
		<th>Father's Occupation</th>
		<th>Mother's Occupation</th>
		<th>Annual Income</th>
		<th>Guardian NID</th>
		<th>Blood Group</th>
		<th>Religion</th>
		<th>Status</th>
		<th>Present Address</th>
		<th>Permanent Address</th>
		<th>Gender</th>
		<th>Quotas</th>
		<th colspan="2">Action</th>
		
	</tr>
	<?php $sl=1; ?>
	@foreach($data as $student)
		<tr style="text-align: center;">
			<td>{{$sl++}}</td>
			
			<td><img height="50px" width="auto" src="public/files/admission/{{$student->image}}"></td>
			<td>{{$student->name}}</td>
			<td>{{$student->class}}</td>
			<td>{{$student->year}}</td>
			<td>{{$student->fname}}</td>
			<td>{{$student->mname}}</td>
			<td>{{$student->psn}}</td>
			<td>{{$student->phone}}</td>
			<td>{{$student->dob}}</td>
			<td>{{$student->fo}}</td>
			<td>{{$student->mo}}</td>
			<td>{{$student->ai}}</td>
			<td>{{$student->gnid}}</td>
			<td>{{$student->blood}}</td>
			<td>{{$student->rel}}</td>
			<td>{{$student->sta}}</td>
			<td>{{$student->prad}}</td>
			<td>{{$student->pead}}</td>
			<td>{{$student->gender}}</td>
			<td>{{$student->qut}}</td>
			<td><a href="" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a></td> 
			<td>
			
			{!!Form::open(array('route'=> ['admission.update',$student->id], 'method'=>'DELETE'))!!}
			<button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
</table>

@endsection