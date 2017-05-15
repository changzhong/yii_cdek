<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '会员登录';
$this->params['breadcrumbs'][] = $this->title;
?>

<style type="text/css">

/*会员登录样式开始*/
#userLogin{
    background: url('/images/temp/login_bg.png');
    background-size:cover;
    height:100%;

}
#userLogin li{
	line-height:30px;
	color:#555;
}
/*会员登录样式结束*/
</style>
<div class="container-fluid" id="userLogin">
    <div class="container">
        <div class="col-md-6">
            <h3>会员权益</h3>
            <ol>
                <li>获取更低气动工具</li>
                <li>获取更低气动工具</li>
                <li>获取更低气动工具</li>
                <li>获取更低气动工具</li>
                <li>获取更低气动工具</li>
                <li>获取更低气动工具</li>
            </ol>
        </div>
        <div class="col-md-6">
            <h1><?= Html::encode($this->title) ?></h1>

            <p></p>

            <div class="row">
                <div class="col-md-12">
                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe',['labelOptions'=>["class"=>"col-md-6"]])->checkbox() ?>

                        <div class="form-group">
                            <?= Html::submitButton('登 录', ['class' => 'btn btn-success col-md-12', 'name' => 'login-button']) ?>
                            <div class="clearfix"></div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <?= Html::a('会员注册', ['user/register']) ?>.
                            </div>

                            <div  class="col-md-6 text-right">
                                <?= Html::a('忘记登录密码？', ['site/request-password-reset']) ?>.
                            </div>
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
    $('#userLogin').css('height',$('#contentDiv').height());
JS;
    $this->registerJs($js);
 ?>

