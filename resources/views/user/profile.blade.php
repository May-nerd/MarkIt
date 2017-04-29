@extends('layouts.app')

<style type="text/css">
	.profile-img{
		max-width: 200px;
		border: 5px solid #fff;
		border-radius: 100%;
	}
</style>

@section('content')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel-body text-center">
				<img class="profile-img" src="/uploads/profile-img.jpg">

				<h2>{{ $user->name }} <i> ({{ $user->username }})</i>
				</h2>
				<h5>{{ $user->email }}</h5>
				<h5>{{ $user->bio }}</h5>
				<h5></h5>

				<input type="submit" class="btn btn-success" value="Follow"></input>
			</div>
		</div>
	</div>
@endsection