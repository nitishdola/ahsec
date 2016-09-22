@extends('administrator.layout')
@section('title') Home @stop
@section('pageTitle') Dashboard @stop
@section('breadCrumb') 
<li>
	<i class="fa fa-home"></i>
	<a href="{{ route('home') }}">Dashboard</a>
</li>

@stop
@section('pageContent')
<div class="span6">
	
</div>

<div class="span6">

</div>
@endsection