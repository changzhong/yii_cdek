<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CdekAreaModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdek-area-model-form">

    <?php $form = ActiveForm::begin([
    		'options' => ['class'=>'form-horizontal'],
    		'fieldConfig' => [
    				'template' => "{label}\n<div class=\"col-lg-2 col-md-3\">{input}</div>\n<div class=\"col-lg-9 col-md-7\">{error}</div>",
			        'labelOptions' => ["class"=>"col-lg-1 col-md-2 control-label"]
    
		    ]
    ]); ?>

    <?= $form->field($model, 'area_name')->textInput(['maxlength' => true]) ?>
	
    <?= $form->field($model, 'status')->radioList($model::$_status) ?>

    <?= $form->field($model, 'sort')->textInput() ?>

    <div class="form-group">
	    <div class="col-lg-offset-1 col-md-offset-2 ">
        <?= Html::submitButton($model->isNewRecord ? '添 加' : '修改', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
