<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '会员注册';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
	/*会员注册样式开始*/
	#userRegister{
		background: url('/images/temp/login_bg.png');
		background-size:cover;
		height:100%;
		
	}
	
	#userRegister li{
		line-height:30px;
		color:#555;
	}
	/*会员注册样式结束*/
</style>
<div class="container-fluid" id="userRegister">
	<div class="container">
		<div class="col-md-6">
			<h1 class="text-center">注册须知</h1>
			<ol>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
				<li>注册表示同意萘阿松覅就怕是房间爱山东覅骄傲商品房</li>
			</ol>
		</div>
		<div class="col-md-6">
			<h1><?= Html::encode($this->title) ?></h1>
			
			<div class="row">
				
				<div class="col-lg-5">
					<?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
					
					<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
					
					<?= $form->field($model, 'email') ?>
					
					<?= $form->field($model, 'password')->passwordInput() ?>
					
					<div class="form-group">
						<?= Html::submitButton('注册并登录', ['class' => 'btn btn-danger col-md-12', 'name' => 'signup-button']) ?>
						<div class="clearfix"></div>
					</div>
					
					<?php ActiveForm::end(); ?>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
$js = <<<JS
    $('#userRegister').css('height',$('#contentDiv').height());
JS;
$this->registerJs($js);
?>