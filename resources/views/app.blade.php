<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PowerDNS Manager</title>

	<!-- CSS -->
	<link href="{{ asset('/css/spacelab.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/loading-bar.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/pdnsmgr.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body ng-app="pdnsApp">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand">PowerDNS Manager</span>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					@if (Auth::check())
						<li><a href="{{ url('/#/#') }}">Domains</a></li>
						<!-- <li><a href="{{ url('/#/dns') }}">DNS Tools</a></li> -->
						<!-- <li><a href="{{ url('/#/ipgeo') }}">IP Location</a></li> -->
					@endif
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if(Auth::check())
						<li><a href="{{ url('/#/admin') }}">Admin</a></li>
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li class="disabled"><a href="">Profile</a></li>
								<li class="divider"></li>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

        <!-- Scripts -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="{{ asset('/js/loading-bar.min.js') }}"></script>
        <script src="{{ asset('/js/pdnsapp.js') }}"></script>
        <script src="{{ asset('/js/pdnscontrollers.js') }}"></script>
        <script src="{{ asset('/js/pdnsservices.js') }}"></script>

</body>
</html>
