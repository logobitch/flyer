<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link rel="stylesheet" href="/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="/css/libs/sweetalert.css">
	<link rel="stylesheet" href="/css/libs/dropzone.css">
	<link rel="stylesheet" href="/css/common.css">
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Bootstrap theme</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>

			{{--right navbar--}}
			@if($signedin)
				<p class="navbar-text navbar-right">
					Hello ! {{ $user->name }}
				</p>
			@endif
		</div><!--/.nav-collapse -->
	</div>
</nav>
<div class="container">
	@yield('content')
</div>

<script src="/js/libs/sweetalert-dev.js"></script>
@yield('script.footer')
@include('partial.flash')
</body>
</html>