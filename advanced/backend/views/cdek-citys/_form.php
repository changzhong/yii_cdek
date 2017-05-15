<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CdekCitysModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdek-citys-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code_id')->textInput() ?>

    <?= $form->field($model, 'country_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'obl_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'center')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nal_sum_limit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'eng_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'post_code_list')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'add_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'update_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ch_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
