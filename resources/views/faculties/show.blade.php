@extends('home')


@section('content')


<h1>select a department to view courses</h1>

		        <li><a href="{{$faculty->faculty_abbreviation}}/{{$department->department_name}}/courses">{{$department->department_name}}</a></li>





@endsection