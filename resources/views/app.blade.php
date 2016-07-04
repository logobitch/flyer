<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>旅游攻略导航</title>

	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/9.0.0/styles/vs.min.css">
	<link rel="stylesheet" href="/css/libs/sweetalert.css">
	<link rel="stylesheet" href="/css/libs/dropzone.css">
	<link rel="stylesheet" href="/css/common.css">

	@yield('style')

</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">马蜂窝logo</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">首页 <span class="sr-only">(current)</span></a></li>
				<li><a href="#">列表页</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">下拉菜单 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
			<div class="nav navbar-nav navbar-right">
				<a href="auth/login" class="btn btn-default navbar-btn">Sign In</a>
				<a href="auth/register" class="btn btn-primary navbar-btn">Sign Up</a>
			</div>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

@yield('slider')

<section class="content-wrap">
	@yield('content')
</section>


{{--底部--}}
@yield('partial.footer')

<script src="/js/libs/sweetalert-dev.js"></script>
<script src="//cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>


@yield('script.footer')
@include('partial.flash')
</body>
</html>