@extends('layout.master')
@section('title', 'Teacher Profile')

@section('content')

        <!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Profile</title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin/css/teacher_profile.css')}}" />
</head>
<body>




<div class="container-fluid">
    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-8 heading wrapper">
            <h2 style="font-family:  Arial, Helvetica,sans-serif; color: white; text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"><b>Baitulaman Adarsho Academi, Faridpur</b></h2>
            <h5 style="font-family:  Arial, Helvetica, sans-serif; font-weight:500;">Established:1965</h5>
            <h4>Teacher Information</h4>
            <div class="col-md-12 line"></div>
            <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                         <img  class="img img-responsive" src="../public/files/teacher/{{$try->image}}"/>
                        </div>
                        <div class="col-md-4"></div>
            </div>
            <div class="row content">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-12">
                                    <label><span class="span">Teacher Name:</span> {{$try->name}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Teacher Id:</span> {{$try->nid}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Blood:</span> {{$try->blood}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Gender:</span> {{$try->gender}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Religion:</span> {{$try->rel}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Phone:</span> {{$try->phone}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Email:</span> {{$try->email}}</label><br>
                                </div>
                                <div class="col-md-12">
                                    <label><span class="span">Address:</span> {{$try->address}}</label><br>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>


</body>
</html>
@endsection