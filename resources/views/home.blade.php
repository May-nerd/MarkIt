@extends('layouts.app')

@section('content')
	<div id="welcome">
		<img src="/uploads/6.jpg" alt="Welcome Banner">
		<h2> Markit </h2>
	</div>
	<div class="container">
		<div class="col-md-3 col-md-3 sidebar">
			<ul class="nav nav-sidebar">
				<p> Categories </p> 
				<li><a href="#"> #fashion </a></li>
				<li><a href="#"> #homeliving </a></li>
				<li><a href="#"> #electronics </a></li>
				<li><a href="#"> #healthandbeauty</a></li>
				<li><a href="#"> #babyandtoys </a></li>
				<li><a href="#"> #sportsandtravel </a></li>
				<li><a href="#"> #motors </a></li>
				<li><a href="#"> #others </a></li>
			</ul>
		</div>
		<div class="col-md-9">
			hello
		</div>
	</div>	
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endpush

