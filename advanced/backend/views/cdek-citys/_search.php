<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CdekCitysSearchModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdek-citys-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code_id') ?>

    <?= $form->field($model, 'country_name') ?>

    <?= $form->field($model, 'full_name') ?>

    <?= $form->field($model, 'city_name') ?>

    <?php // echo $form->field($model, 'obl_name') ?>

    <?php // echo $form->field($model, 'center') ?>

    <?php // echo $form->field($model, 'nal_sum_limit') ?>

    <?php // echo $form->field($model, 'eng_name') ?>

    <?php // echo $form->field($model, 'post_code_list') ?>

    <?php // echo $form->field($model, 'add_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <?php // echo $form->field($model, 'ch_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
