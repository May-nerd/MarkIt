@extends('layouts.main')

@section('content')
<div class="markit-container markit-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
	<div class="markit-row">
    <!-- Left Column -->
    <div class="markit-col m3">
      <!-- Profile -->
      <div class="markit-card-2 markit-round markit-white">
        <div class="markit-container">

         <h4 class="markit-center">{{ Auth::user()->fname." ".Auth::user()->lname }}</h4>
         <p class="markit-center"><img src="{{ Storage::disk()->url("public/profilepicture/".Auth::user()->profilepicture) }}" class="markit-circle" style="height:106px;width:106px" alt="Avatar">
         </p>
         <hr>
         <p><i class="fa fa-pencil fa-fw markit-margin-right markit-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw markit-margin-right markit-text-theme"></i> {{ucwords(strtolower(Auth::user()->town)) }}, {{ucwords(strtolower(Auth::user()->province)) }}</p>
        </div>

      </div>
      <br>
      
      <!-- Accordion -->
      <div class="markit-card-2 markit-round">
        <div class="markit-white">
          <a class="markit-button markit-block markit-theme-l1 markit-left-align remove-anchor-design" data-toggle="tooltip" title="Edit Profile" href="/profile/{{ Auth::user()->username }}/edit"><i class="fa fa-pencil fa-fw markit-margin-right"> Edit Profile</i></a>
        </div>      
      </div>
      <br>

    <!-- End Left Column -->
    </div>
    <div class="markit-col m1">
    	<p></p>
    </div>
    <!-- Middle Column -->
    <div class="markit-col m7">
	     <div class="panel panel-default">
	        <div class="panel-heading">Edit Profile
	        </div>
	        <div class="panel-body">
	            <form class="form-horizontal" role="form" method="POST" action="/profile/{{Auth::user()->username}}" enctype="multipart/form-data">
	            	{{ method_field('put') }}
	                {{ csrf_field() }}

	                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
	                    <label for="fname" class="col-md-4 control-label">First Name</label>

	                    <div class="col-md-6">
	                        <input id="fname" type="text" class="form-control" name="fname" value="{{ Auth::user()->fname }}" required autofocus>

	                        @if ($errors->has('fname'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('fname') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>


	                <div class="form-group{{ $errors->has('lname') ? ' has-error' : '' }}">
	                    <label for="lname" class="col-md-4 control-label">Last Name</label>

	                    <div class="col-md-6">
	                        <input id="lname" type="text" class="form-control" name="lname" value="{{ Auth::user()->lname }}" required autofocus>

	                        @if ($errors->has('lname'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('lname') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group{{ $errors->has('town') ? ' has-error' : '' }}">
	                    <label for="town" class="col-md-4 control-label">Town</label>

	                    <div class="col-md-6">
	                        <input id="town" type="text" class="form-control" name="town" value="{{ Auth::user()->town }}" required autofocus>

	                        @if ($errors->has('town'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('town') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
	                    <label for="province" class="col-md-4 control-label">Province</label>

	                    <div class="col-md-6">
	                        <input id="province" type="text" class="form-control" name="province" value="{{ Auth::user()->province }}" required autofocus>

	                        @if ($errors->has('province'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('province') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

	                    <div class="col-md-6">
	                        <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

	                        @if ($errors->has('email'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('email') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
	                    <label for="username" class="col-md-4 control-label"> Username</label>

	                    <div class="col-md-6">
	                        <input id="username" type="username" class="form-control" name="username" value="{{ Auth::user()->username }}" required>

	                        @if ($errors->has('username'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('username') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
	                    <label for="password" class="col-md-4 control-label">Password</label>

	                    <div class="col-md-6">
	                        <input id="password" type="password" class="form-control" name="password" required>

	                        @if ($errors->has('password'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('password') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

	                    <div class="col-md-6">
	                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
	                    </div>
	                </div>

	                <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
	                    <label for="bio" class="col-md-4 control-label">Short Description</label>

	                    <div class="col-md-6">

	                        <textarea id="bio" type="text" class="form-control" name="bio" required autofocus>{{ Auth::user()->bio }}</textarea>

	                        @if ($errors->has('bio'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('bio') }}</strong>
	                            </span>
	                        @endif
	                    </div>
	                </div>


	                <div class="form-group">
	                    <div class="col-md-6 col-md-offset-4">
	                        <input class="btn btn-primary" type="submit" name="submit" value="Update Profile">
	                    </div>
	                </div>
	            </form>
	        </div>
	    </div>	
    </div>
    
	    
      
	</div>
 </div>
@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/auction.css')}}">
@endpush