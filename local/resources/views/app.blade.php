<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<style>
		/* Set black background color, white text and some padding */
		footer {
			background-color: #555;
			color: white;
			padding: 15px;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}">Logo</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/') }}">Welcome</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Search..">
					  <span class="input-group-btn">
						<button class="btn btn-default" type="button">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					  </span>
				</div>
			</form>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			@if(auth()->guest())
				@if(!Request::is('auth/login'))
					<li><a href="{{ url('/auth/login') }}">Login</a></li>
				@endif
				@if(!Request::is('auth/register'))
					<li><a href="{{ url('/auth/register') }}">Register</a></li>
				@endif
			@else

				<li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>  {{ ucfirst(auth()->user()->name )}}</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
					</ul>

				</li>
				@endif
			</ul>
		</div>
	</div>
</nav>
@yield('content')


<footer class="container-fluid text-center">
	<p>Footer Text</p>
</footer>

</body>
</html>

