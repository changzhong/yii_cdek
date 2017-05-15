<?php
	$this->title = '首页';

?>

<div id="indexIndex">
	<!-- 轮播图开始 -->
	<div class="container-fluid carousel-div" >
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="/images/temp/1.png" alt="..." class="img-responsive text-center center-block">
					<div class="carousel-caption">
						图片1
					</div>
				</div>
				<div class="item">
					<img src="/images/temp/2.png" alt="..." class="img-responsive text-center center-block">
					<div class="carousel-caption">
						图片2
					</div>
				</div>
				<div class="item">
					<img src="/images/temp/3.png" alt="..." class="img-responsive text-center center-block">
					<div class="carousel-caption">
						图片3
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!-- 轮播图结束 -->

	<!-- 小导航开始 -->
	<div class="container-fluid small-container-fluid">
		<div id="small-header" class="small-header container">
			<ul class="list-inline">
				<li class="col-md-3 col-xs-6 text-center">
					<!--a class="zz" href="javascript:void(0)">	运单追踪</a-->
					
					<a class="zz" href="dynamic_function/waybill/">
						<i class="icon iconfont icon-zhuizong-"></i>
						运单追踪
					</a>
				</li>
				<li class="col-md-3 col-xs-6 text-center">
					<!--a class="jd" href="javascript:void(0)">我要寄件</a-->
					<a class="jd" href="dynamic_function/order/quick/">
						<i class="icon iconfont icon-jijian"></i>
						我要寄件
					</a>
					
				</li>
				<li class="col-md-3 col-xs-6 text-center">
					<!--a class="sx" href="javascript:void(0)">运费时效查询</a-->
					<a class="sx" href="dynamic_function/price/">
						<i class="icon iconfont icon-jisuanqi"></i>
						运费预算
					</a>
				</li>
				<li class="col-md-3 col-xs-6 text-center">
					<!--a class="fw" href="javascript:void(0)">收送范围查询</a-->
					<a class="fw" href="dynamic_function/range/">
						<i class="icon iconfont icon-chaxun"></i>
						收寄范围查询
					</a>
				</li>
				
			</ul>
		</div>
	</div>
	<!-- 小导航结束 -->

	<!--新闻公告开始-->
	<div class="container news-container">
		<h1 class="news-title text-center">新闻公告</h1>
		<div class="small-title text-center">
			最快让您知晓，最全新闻资讯
			<a href="" class="pull-right">查看全部 > </a>
		</div>
		<div class="news-content row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="new-img">
					<img src="/images/temp/PC-309x204.jpg" alt="" class="img-responsive center-block text-center">
				</div>
				<h1 class="new-title">
					关于顺丰国际小包（乌克兰流向）资费标准调整的通知
				</h1>
				<p class="new-text">顺丰国际小包（挂号）乌克兰流向 <a href="" class="pull-right">详情</a></p>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="new-img">
					<img src="/images/temp/PPT-309.jpg" alt="" class="img-responsive center-block text-center">
				</div>
				<h1 class="new-title">
					关于顺丰国际小包（乌克兰流向）资费标准调整的通知
				</h1>
				<p class="new-text">顺丰国际小包（挂号）乌克兰流向 <a href="" class="pull-right">详情</a></p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="new-img">
					<img src="/images/temp/PC-mark309X204.jpg" alt="" class="img-responsive center-block text-center">
				</div>
				<h1 class="new-title">
					关于顺丰国际小包（乌克兰流向）资费标准调整的通知
				</h1>
				<p class="new-text">顺丰国际小包（挂号）乌克兰流向 <a href="" class="pull-right">详情</a></p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="new-img">
					<img src="/images/temp/1111309x204.jpg" alt="" class="img-responsive center-block text-center">
				</div>
				<h1 class="new-title">
					关于顺丰国际小包（乌克兰流向）资费标准调整的通知
				</h1>
				<p class="new-text">顺丰国际小包（挂号）乌克兰流向 <a href="" class="pull-right">详情</a></p>
			</div>
		</div>
	</div>
	<!--新闻公告结束-->
</div>


