{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile cá nhân</title>
    <link rel="stylesheet" href="">
</head>
<body>
<p>Họ và tên: {{ $name }} </p>
<p>Năm sinh {{ $year }}</p>
<p>Trường học: {{ $school }}</p>
<p>Quê quán: {{$home}}</p>

Giới thiệu bản thân : {!! '<b>ko có sở thích </b>'!!}

<p>Mục tiêu nghề nghiệp: {{ $job }}</p>




</body>
</html> --}}

@extends('layouts.master')

@section('title')   {{-- @section('ten yield') --}}
Trang profile
@endsection

@section('css')
<style type="text/css">
	.detail{
		color:red;
	}
</style>

@section('content')
<div class="detail">
	<p>Họ và tên: {{ $name }} </p>
	<p>Năm sinh {{ $year }}</p>
	<p>Trường học: {{ $school }}</p>
	<p>Quê quán: {{$home}}</p>

	<p>Giới thiệu bản thân:  {!! '<b>ko có sở thích </b>'!!} </p>

	<p>Mục tiêu nghề nghiệp: {{ $job }}</p>
</div>


@endsection