@extends('layout.master')
@section('title', 'Student Profile')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/a.css')}}" />
</head>
<body>




<div class="head">
    <h1>...{{$try->name}} Profile...</h1>
</div>

<div style="border: 1px solid #CBCBCB; border-radius: 5px; background-color: #FCFCFC; box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" id="container">
    <div id="profile">
        <div class="col-md-12"><div class="about">
                <div class="profile-photo">
                    <img style="height:154px; width:150px; box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="../public/files/student/{{$try->image}}"/>
                </div><br>
                <h1>{{$try->name}}</h1>
                <h3>Student of Shadipur High School.</h3>
                
            </div>
            <ul class="basic-info">
                <li><h3>BASIC INFO </h3></li>
                <li style="text-align: center;"><label>Father Name:</label><span style="margin-top:5px;">{{$try->fname}}</span></li>
                <li style="text-align: center;"><label>Mother Name:</label><span style="margin-top:5px;">{{$try->mname}}</span></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 zz ">
                <h3 class="head2">Academic Information*:</h3>
                <ul class="basic-info ">
                    <li><label>Class:</label><span style="margin-top:5px;">{{$try->class}}</span></li>
                    <li><label>Registration:</label><span style="margin-top:5px;">{{$try->reg}}</span></li>
                    <li><label>Roll:</label><span style="margin-top:5px;">{{$try->roll}}</span></li>
                    <li><label>Shift:</label><span style="margin-top:5px;">{{$try->shift}}</span></li>
                    <li><label>Section:</label><span style="margin-top:5px;">{{$try->section}}</span></li>
                    <li><label>Session:</label><span style="margin-top:5px;">{{$try->session}}</span></li>
                    <li><label>ID:</label><span style="margin-top:5px;">{{$try->sid}}</span></li>
            </div>
            <div class="col-md-6 yy">
                <h3 style="margin-top:-25px;" class="head3">Other's Information*:</h3>
                <ul class="basic-info" style="margin-right:10px;">
                    <li><label>Phone:</label><span style="margin-top:5px; ">{{$try->phone}}</span></li>
                    <li><label>Date Of Birth:</label><span style="margin-top:5px; ">{{$try->dob}}</span></li>
                    <li><label>Gender:</label><span style="margin-top:5px;">{{$try->gender}}</span></li>
                    <li><label>Blood Group:</label><span style="margin-top:5px;">{{$try->blood}}</span></li>
                    <li><label>Address:</label><span style="margin-top:5px;">{{$try->address}}</span></li>
                    <li><label>Guardian:</label><span style="margin-top:5px;">{{$try->gname}}</span></li>
                    <li><label>Guardian Id:</label><span style="margin-top:5px;">{{$try->gnid}}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <br><br>

    
</div>

</body>
</html>
@endsection