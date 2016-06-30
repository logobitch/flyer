<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>旅游攻略导航</title>

	<link rel="stylesheet" href="/css/libs/bootstrap.min.css">
	<link rel="stylesheet" href="/css/libs/sweetalert.css">
	<link rel="stylesheet" href="/css/libs/dropzone.css">
	<link rel="stylesheet" href="/css/common.css">
	<link rel="stylesheet" href="/css/libs/unslider.css">
	<link rel="stylesheet" href="/css/libs/unslider-dots.css">
	<style>
		.banner { position: relative; overflow: auto; text-align: center;}
		.banner ul {position: relative;}
		.banner li { list-style: none; }
		.banner ul li { float: left; }
		#b04 { width: 100%;}

		#b04 .dots { position: absolute; left: 0; right: 0; bottom: 20px;}

		#b04 .dots li

		{

			display: inline-block;

			width: 10px;

			height: 10px;

			margin: 0 4px;

			text-indent: -999em;

			border: 2px solid #fff;

			border-radius: 6px;

			cursor: pointer;

			opacity: .4;

			-webkit-transition: background .5s, opacity .5s;

			-moz-transition: background .5s, opacity .5s;

			transition: background .5s, opacity .5s;

		}

		#b04 .dots li.active

		{

			background: #fff;

			opacity: 1;

		}

		#b04 .arrow { position: absolute; top: 200px;}

		#b04 #al { left: 15px;}

		#b04 #ar { right: 15px;}




	</style>
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
			<a class="navbar-brand" href="/">首页</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="/">首页</a></li>
				<li><a href="#about">旅游攻略</a></li>
				<li><a href="#contact">约游</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">便捷服务 <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">酒店</a></li>
						<li><a href="#">机票</a></li>
						<li><a href="#">保险</a></li>
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
<div class="container-banner" style="width:100%; height:800px;">
<div class="banner" id="b04">
	<ul>
		<li><img src="http://www.jq22.com/demo/unslider-150203225543/03.jpg" alt="" width="100%" height="480"></li>
		<li><img src="http://www.jq22.com/demo/unslider-150203225543/01.jpg" alt="" width="100%" height="480"></li>
		<li><img src="http://www.jq22.com/demo/unslider-150203225543/02.jpg" alt="" width="100%" height="480"></li>
		<li><img src="http://www.jq22.com/demo/unslider-150203225543/04.jpg" alt="" width="100%" height="480"></li>
	</ul>
	
</div>
</div>
<div class="container">
	@yield('content')
</div>

<script src="/js/libs/sweetalert-dev.js"></script>




<script src="//cdn.bootcss.com/jquery/2.2.3/jquery.min.js"></script>
<script src="/js/libs/unslider.js"></script>
<script>
	$(document).ready(function(e) {

		var unslider04 = $('#b04').unslider({

				dots: true

			}),

			data04 = unslider04.data('unslider');



		$('.unslider-arrow04').click(function() {

			var fn = this.className.split(' ')[1];

			data04[fn]();

		});

	});





</script>






@yield('script.footer')
@include('partial.flash')
</body>
</html>