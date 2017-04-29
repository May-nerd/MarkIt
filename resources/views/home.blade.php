@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <h2>Welcome to Twitbook.</h2>
            <p>Connect with your friends - and other fascinating people. Get in-the-moment updates on the things that interest you. And watch events unfold, in real time, from every angle.</p>
        </div>
        <div class="col-sm-5 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Sign-Up</h1>
                </div>
                <div class="panel-body">
                    <form action="profile.html">
                        <input type="text" class="form-control" placeholder="Username or Email Address" required/>
                        <input type="password" class="form-control" placeholder="Password" required/>
                        <label><input type="checkbox" value="remember"> Remember me |</label>
                        <a href="#">Forgot Password?</a>
                        <input type="submit" class="btn btn-primary pull-right" name="login" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

