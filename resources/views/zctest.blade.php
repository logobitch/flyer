<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.banner { position: relative; overflow: auto; }
		.banner ul {position: relative;}
		.banner li { list-style: none; }
		.banner ul li { float: left; }
	</style>
</head>
<body>
<div class="banner">
	<ul>
		<li><img src="http://430001.com/thumbs/800x400/4a0df0e7858d82fe.jpg" alt=""></li>
		<li><img src="http://430001.com/thumbs/800x400/b846cd6dbeca0cb7.jpg" alt=""></li>
		<li><img src="http://430001.com/thumbs/800x400/64c4185c3718ded4.jpg" alt=""></li>
	</ul>
</div>
</body>
<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="/js/libs/unslider-min.js"></script>
<script>
	$(function() {
		$('.banner').unslider();
	});
</script>
</html>