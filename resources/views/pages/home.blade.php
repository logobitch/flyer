@extends('app')
@section('style')
	<link rel="stylesheet" href="/css/libs/unslider.css">
	<link rel="stylesheet" href="/css/libs/unslider-dots.css">

	<style>
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
@stop


@section('slider')
		<div class="banner main-banner">
            <div  id="b04">
                <ul>
                    <li><img src="http://www.jq22.com/demo/unslider-150203225543/03.jpg" alt="" width="100%"
                             height="480"></li>
                    <li><img src="http://www.jq22.com/demo/unslider-150203225543/01.jpg" alt="" width="100%"
                             height="480"></li>
                    <li><img src="http://www.jq22.com/demo/unslider-150203225543/02.jpg" alt="" width="100%"
                             height="480"></li>
                    <li><img src="http://www.jq22.com/demo/unslider-150203225543/04.jpg" alt="" width="100%"
                             height="480"></li>
                </ul>
            </div>
            <div class="search-container container">
                <div class="row">
                    <div class="checkbox col-md-10">
                        <label for="all">
                            <input type="radio" name="search" id="all">全部
                        </label>
                        <label for="hotel">
                            <input type="radio" name="search" id="hotel">酒店
                        </label>
                        <label for="destination">
                            <input type="radio" name="search" id="destination">目的地
                        </label>
                        <label for="shop">
                            <input type="radio" name="search" id="shop">目的地商城
                        </label>
                    </div>
                </div>
                <div class="search-content">
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="搜索目的地/攻略/酒店/旅行特价">
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-primary">提交</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-intro">
                图片来自于<a>西安</a>，此目的地共收藏了<a>1155105</a>张<a>西安</a>图片。本片由<a>空中飞翔的珞珞</a>荣誉出品！
            </div>
		</div>

		@stop



		@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget big-piece">
						<h3 class="title">精品游记推荐<small class="pull-right"><a href="">更多</a></small></h3>
						<img src="http://file103.mafengwo.net/s9/M00/C0/38/wKgBs1dtJR-AbeyyAAGIVw4s6ls25.jpeg" alt="" style="width:350px;">
						<h4>大理-可以约炮的地方　</h4>
						<div class="content">700余年后，洱海再度成为中心，很多事，从这里开始……</div>
					</div>

					<div class="widget big-piece">
						<h3 class="title">国内地点推荐<small class="pull-right"><a href="">更多</a></small></h3>
						<div class="row">
							<div class="col-md-5 pull-left">
								<img src="http://file32.mafengwo.net/M00/B4/F3/wKgBs1dhWoiANjLdAARzAy6P5ok22.book.w130.jpeg" alt="" >
							</div>
							<div class="col-md-7">
								<h4>大理-可以约炮的地方　</h4>
								<div class="content">700余年后，洱海再度成为中心，很多事，从这里开始……</div>
							</div>
						</div>
					</div>

				</div>
				{{--广告--}}
				<div class="col-md-8 piece">
					<img src="http://file31.mafengwo.net/M00/F3/5A/wKgBs1drTauACqojAAGp9aGdxZw54.jpeg" alt="">
				</div>
				{{--顶部导航--}}
				<div class="col-md-8 piece">
					<ul class="nav nav-pills col-md-8">
						<li role="presentation" class="active"><a href="">带娃旅行</a></li>
						<li role="presentation" ><a href="">姑娘漂亮</a></li>
						<li role="presentation" ><a href="">毕业旅行</a></li>
						<li role="presentation" ><a href="">闺蜜行</a></li>
					</ul>
					<div class="col-md-3">
						<a href="article/create" class="btn btn-info pull-right">写游记</a>
					</div>
				</div>
				{{--数据展示--}}
				<main class="col-md-8 piece">
					<article class="article">
						<div class="col-md-4">
							<img src="http://file32.mafengwo.net/M00/5F/DD/wKgBs1dVIFqAVOt3AAV4wxHJZuo55.groupinfo.w229.jpeg" alt="">
						</div>
						<div class="col-md-8">
							<dl>
								<dt><a href="" class="article-head">拍妻党-马尔代夫最强拍妻攻略没有之一！摄影技术交流</a></dt>
								<dd><a href="">我不是90后，早过了该做韩剧女主角梦的年纪，至少在别人眼里早该过了。 但是， 我喜欢EXO，爱听长着精灵耳朵灿烈的低音炮、爱看小奶包儿世勋的眯眼笑。 我喜欢Bigbang，知道GD每一处纹身的样子、知道他们是夜生活...</a></dd>
							</dl>
							<footer class="article-footer">
								<span>亚龙湾</span>
								<span>by</span>
								<span>九妹</span>
								<span>100000</span>
							</footer>
						</div>
					</article>

					<article class="article">
						<div class="col-md-4">
							<img src="http://file32.mafengwo.net/M00/5F/DD/wKgBs1dVIFqAVOt3AAV4wxHJZuo55.groupinfo.w229.jpeg" alt="">
						</div>
						<div class="col-md-8">
							<dl>
								<dt><a href="" class="article-head">拍妻党-马尔代夫最强拍妻攻略没有之一！摄影技术交流</a></dt>
								<dd><a href="">我不是90后，早过了该做韩剧女主角梦的年纪，至少在别人眼里早该过了。 但是， 我喜欢EXO，爱听长着精灵耳朵灿烈的低音炮、爱看小奶包儿世勋的眯眼笑。 我喜欢Bigbang，知道GD每一处纹身的样子、知道他们是夜生活...</a></dd>
							</dl>
							<footer class="article-footer">
								<span>亚龙湾</span>
								<span>by</span>
								<span>九妹</span>
								<span>100000</span>
							</footer>
						</div>
					</article>

					<article class="article">
						<div class="col-md-4">
							<img src="http://file32.mafengwo.net/M00/5F/DD/wKgBs1dVIFqAVOt3AAV4wxHJZuo55.groupinfo.w229.jpeg" alt="">
						</div>
						<div class="col-md-8">
							<dl>
								<dt><a href="" class="article-head">拍妻党-马尔代夫最强拍妻攻略没有之一！摄影技术交流</a></dt>
								<dd><a href="">我不是90后，早过了该做韩剧女主角梦的年纪，至少在别人眼里早该过了。 但是， 我喜欢EXO，爱听长着精灵耳朵灿烈的低音炮、爱看小奶包儿世勋的眯眼笑。 我喜欢Bigbang，知道GD每一处纹身的样子、知道他们是夜生活...</a></dd>
							</dl>
							<footer class="article-footer">
								<span>亚龙湾</span>
								<span>by</span>
								<span>九妹</span>
								<span>100000</span>
							</footer>
						</div>
					</article>
				</main>
			</div>
	</div>

@stop

@section('script.footer')
	<script src="/js/libs/unslider.js"></script>
	<script>
		//轮播图
		$(document).ready(function (e) {

			var unslider04 = $('#b04').unslider({

					dots: true,
					autoplay: true,


				}),

				data04 = unslider04.data('unslider');

			$('.unslider-arrow04').click(function () {

				var fn = this.className.split(' ')[1];

				data04[fn]();
			});
		});

	</script>
@stop