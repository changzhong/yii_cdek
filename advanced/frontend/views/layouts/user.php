<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<?php
		$this->registerMetaTag(["name"=>'viewport',"content"=>"width=device-width, initial-scale=1"]);
		$this->registerMetaTag(["http-equiv"=>"Content-Type","content"=>"text/html; charset=UTF-8"]);
		$this->registerMetaTag(["name"=>"viewport","content"=>"width=device-width, initial-scale=1.0, user-scalable=no"]);
		$this->registerMetaTag(['name'=>"description","content"=>$this->params['webConfig']['WEB_SITE_DESCRIPTION']]);
		$this->registerMetaTag(['name'=>"author","content"=>""]);
		$this->registerMetaTag(['name'=>"keywords","content"=>$this->params['webConfig']['WEB_SITE_KEYWORD']]);
		$this->registerMetaTag(['name'=>"robots","content"=>"all"]);
	?>
    <?= Html::csrfMetaTags() ?>
    <title><?php echo $this->params['webConfig']['WEB_SITE_TITLE']; ?> ｜ <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<style>
	.user-fluid{
		padding:0px;
		position: relative;
	}
	.left-nav{
		background:#222d32;
		width:230px;
		color:#fff;
		position:absolute;
		left:0px;
		top:0px;
		height:1000px;
	}
	
	.left-nav li{
		padding:12px 15px;
	}
	#rightContent{
		padding-left:230px;
	}
	
</style>
	<!-- 头部导航开始 -->
	<div class="container-fluid top-nav">
		<div class="container">
			<!-- <div class="pull-left">
				<div class="logo pull-left">
					<img src="/images/temp/logo.png">
				</div>
				<ul class="left-nav-bar list-inline pull-left">
					<li>首页</li>
					<li>物流</li>
					<li>金额</li>
					<li>案例</li>
					<li>关于我们</li>
				</ul>
			</div>
			<div class="pull-right">
				<ul class="right-nav-bar list-inline">
					<li>会员登录</li>
					<li>会员注册</li>
				</ul>
			</div> -->
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img src="/images/temp/logo.png">
						</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active">
								<?php echo Html::a('首页',['index/index']) ?>
							</li>
							<li><a href="#">物流</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">金额 <span class="caret"></span></a>
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
							<li><a href="#">案例</a></li>
							<li><a href="#">关于我们</a></li>
						</ul>

						<ul class="nav navbar-nav navbar-right">
							<?php if(Yii::$app->user->isGuest): ?>
								<li><?php echo Html::a('会员登录',['user/login']); ?></li>
								<li><?php echo Html::a('会员注册',['user/register']); ?></li>
							<?php else: ?>
								<li class="dropdown">
									<?php echo Html::a(Yii::$app->user->identity->username.' <span class="caret"></span>',['member/index'],["class"=>"dropdown-toggle","data-toggle"=>"dropdown","role"=>"button","aria-haspopup"=>"true","aria-expanded"=>"false"]); ?>
									<ul class="dropdown-menu">
										<li><?php echo Html::a('会员中心',['order/index']) ?></li>
										<li role="separator" class="divider"></li>
										<li><?php echo Html::a('退出登录',['user/logout']); ?></li>
									</ul>
								</li>
							<?php endif; ?>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</div>
	<!-- 头部导航结束 -->

	<!-- 内容区域开始 -->
	<div id="contentDiv">
		<div class="container-fluid user-fluid" id="userFluid">
			<div class="left-nav pull-left" id="leftNav">
				<ul class="list-unstyled">
					<li>
						<h3>订单中心</h3>
						<ul class="list-unstyled">
							<li>我的订单</li>
							<li>发货地址</li>
						</ul>
					</li>
					
					<li>
						<h3>个人中心</h3>
						<ul class="list-unstyled">
							<li>我的资金</li>
							<li>我的资料</li>
							<li>充值记录</li>
							<li>站内通知</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="content pull-left" id="rightContent">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
	<!-- 内容区域开始 -->


	<!-- 底部开始 -->
	<footer class="footer container-fluid">
	    <div class="container">
			<ul class="list-unstyled">
				<li class="col-md-4 text-center">
					<h2>服务承诺</h2>
				</li>
				<li class="col-md-4 text-center">
					<h2>关于我们</h2>
				</li>
				<li class="col-md-4 text-center">
					<h2>联系我们</h2>
				</li>
				<div class="clearfix"></div>
			</ul>
	    </div>
				<div class="clearfix"></div>

	</footer>
	<!-- 底部结束 -->

<?php $this->endBody() ?>
<?php
$js = <<<JS
    $('#leftNav').css('height',$('#contentDiv').height());
JS;
$this->registerJs($js);
?>
</body>
</html>
<?php $this->endPage() ?>
