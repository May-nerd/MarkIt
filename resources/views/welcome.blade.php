@extends('layouts.app')
<style type="text/css">
        
#myCarousel {
    position: fixed;
    top: 0;
    z-index: -15;
}

#myCarousel > .carousel-inner > .item > img{
    width: 200vw;
    height: 100vh;  
    object-position: center;
    object-fit: cover;
}  

.input-group {
    padding-bottom: 5px;
}

h2{
   color: black;
   font-size:50%;
}


</style>

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/uploads/1.jpg" alt="First Slide">
            </div>
            <div class="item">
                <img src="/uploads/2.jpg" alt="Second Slide">
            </div>
            <div class="item">
                <img src="/uploads/3.jpg" alt="Third Slide">
            </div>
            <div class="item">
                <img src="/uploads/4.jpg" alt="Fourth Slide">
            </div>
            <div class="item">
                <img src="/uploads/5.jpg" alt="Fifth Slide">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <div class="col-sm-4">
            <h2>Welcome to Markit!</h2>
            <p>Connect with your friends Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore maxime, aut quos est ea alias provident aliquid quia ratione deleniti, rem laboriosam vel delectus sequi, voluptas voluptatibus, voluptatum culpa pariatur!</p>
        </div>

        <div class="col-sm-5 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Login to your account</h3>
                </div>
                <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

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
                            <div class="col-md-offset-2">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me  |<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?
                                </a> 
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success pull-right">
                                    Login
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default panel-signup">
                <div class="panel-heading">
                    <h3>New to MarkIt? <span class="small">Sign up</span></h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ url('/registrationform') }}">
                        {{ csrf_field() }}  
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="username" type="text" class="form-control" placeholder="Username" required />
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="fname" type="text" class="form-control" placeholder="First Name" required />
                        </div>

                       
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="lname" type="text" class="form-control" placeholder="Last Name" required />
                        </div>
                        

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input name="email" type="text" class="form-control" placeholder="Email Address" required/>
                        </div>
                        <input type="submit" class="btn btn-success pull-right" name="login" value="Signup for MarkIt" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
