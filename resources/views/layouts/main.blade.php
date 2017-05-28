<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MarkIt!</title>

    <!-- Styles -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('/css/main.css')}}" rel="stylesheet"> --}}
    <link href="{{asset('/ppcss/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('/ppcss/css/themeColorMarkit.css')}}" rel="stylesheet">
    <link href="{{asset('/ppcss/css/openSans.css')}}" rel="stylesheet">
    <link href="{{asset('/ppcss/css/font-awesome.min.css')}}" rel="stylesheet">
    @stack('styles')


    <style>
		html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
	</style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <script type="text/javascript" src="/js/js.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
</head>

<body class="markit-theme-l5">

<!-- Navbar -->
	<div class="markit-top">
		<div class="markit-bar markit-theme-d2 markit-left-align markit-large">
			<a class="markit-bar-item markit-button markit-hide-medium markit-hide-large markit-right markit-padding-large markit-hover-white markit-large markit-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			<a href="/home" class="markit-bar-item markit-button markit-padding-large markit-theme-d4"><i class="fa fa-home markit-margin-right"></i>MarkIt</a>
			<a href="/profile/{{Auth::user()->username}}" class="markit-bar-item markit-button markit-hide-small markit-padding-large markit-hover-white" title="Profile"><i class="fa fa-user"></i></a>
            <a href="#" class="markit-bar-item markit-button markit-hide-small markit-padding-large markit-hover-white" title="Active Items"><i class="glyphicon glyphicon-ok-circle"></i></a>
			<a href="#" class="markit-bar-item markit-button markit-hide-small markit-padding-large markit-hover-white" title="Marked Items"><i class="fa fa-check"></i></a>

			<a href="/notifications" class="markit-bar-item markit-button markit-hide-small markit-padding-large markit-hover-white" title="Notifications"><i class="fa fa-bell"><span class="badge badge-color">1</span></i></a>
            <a href="#" class="markit-bar-item markit-button markit-hide-small markit-padding-large markit-hover-white" title="Messages"><i class="fa fa-envelope"><span class="badge badge-color">2</span></i></a>
			<a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="markit-bar-item markit-button markit-hide-small markit-right markit-padding-large markit-hover-white" title="Logout"><i class="fa fa-power-off"></i></a>
            <form class="navbar-form navbar-right">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                </div>
            </form>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        </div>

	</div>
	<div id="navDemo" class="markit-bar-block markit-theme-d2 markit-hide markit-hide-large markit-hide-medium markit-large">
		<a href="#" class="markit-bar-item markit-button markit-padding-large">Link 1</a>
		<a href="#" class="markit-bar-item markit-button markit-padding-large">Link 2</a>
		<a href="#" class="markit-bar-item markit-button markit-padding-large">Link 3</a>
		<a href="#" class="markit-bar-item markit-button markit-padding-large">My Profile</a>
	</div>
	@yield('content')
    <script src="{{asset('/js/jquery.js')}}"></script>
	<script src="{{asset('/js/bootstrap.min.js')}}"></script>
    @stack('scripts')
</body>
</html>
