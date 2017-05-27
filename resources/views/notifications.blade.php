@extends('layouts.main')

@section('content')
	<div class="markit-container markit-content" style="max-width:1400px;margin-top:80px">    
	<h1> All Notifications </h1>
	<hr/>
	<div class="notif-container">


		<div class="notifications-box alert alert-dismissable fade in">
			<a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>

			<p class="notif-img">
				<img src="/uploads/profile-img.jpg" class="img-circle">
			</p>
			  
			<p class="notif-msg"> You have a new notification from a customer. <a href="#">Click here to view.</a></p>
			<p class="notif-time"> <span class="glyphicon glyphicon-ok"> </span> 39 minutes ago  </p>
		</div>


		<div class="notifications-box alert alert-dismissable fade in">
			<a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>

			<p class="notif-img">
				<img src="/uploads/profile-img.jpg" class="img-circle">
			</p>
			  
			<p class="notif-msg"> You have a new notification from a customer. <a href="#">Click here to view.</a></p>
			<p class="notif-time"> <span class="glyphicon glyphicon-ok"> </span> 39 minutes ago  </p>
		</div>

		<div class="notifications-box alert alert-dismissable fade in">
			<a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>

			<p class="notif-img">
				<img src="/uploads/profile-img.jpg" class="img-circle">
			</p>
			  
			<p class="notif-msg"> You have a new notification from a customer. <a href="#">Click here to view.</a></p>
			<p class="notif-time"> <span class="glyphicon glyphicon-ok"> </span> 39 minutes ago  </p>
		</div>

		<div class="notifications-box alert alert-dismissable fade in">
			<a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>

			<p class="notif-img">
				<img src="/uploads/profile-img.jpg" class="img-circle">
			</p>
			  
			<p class="notif-msg"> You have a new notification from a customer. <a href="#">Click here to view.</a></p>
			<p class="notif-time"> <span class="glyphicon glyphicon-ok"> </span> 39 minutes ago  </p>
		</div>

		<div class="notifications-box alert alert-dismissable fade in">
			<a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>

			<p class="notif-img">
				<img src="/uploads/profile-img.jpg" class="img-circle">
			</p>
			  
			<p class="notif-msg"> You have a new notification from a customer. <a href="#">Click here to view.</a></p>
			<p class="notif-time"> <span class="glyphicon glyphicon-ok"> </span> 39 minutes ago  </p>
		</div>

		<div class="notifications-box alert alert-dismissable fade in">
			<a href="#" class="close close-btn" data-dismiss="alert" aria-label="close">&times;</a>

			<p class="notif-img">
				<img src="/uploads/profile-img.jpg" class="img-circle">
			</p>
			  
			<p class="notif-msg"> You have a new notification from a customer. <a href="#">Click here to view.</a></p>
			<p class="notif-time"> <span class="glyphicon glyphicon-ok"> </span> 39 minutes ago  </p>
		</div>
	</div>


@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/notifications.css')}}">
@endpush
@push('scripts')
@endpush