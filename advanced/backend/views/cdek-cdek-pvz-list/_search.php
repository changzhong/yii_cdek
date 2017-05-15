<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CdekCdekPvzListSearchModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdek-pvz-list-model-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'citycode') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'worktime') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'note') ?>

    <?php // echo $form->field($model, 'coordx') ?>

    <?php // echo $form->field($model, 'coordy') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'ownercode') ?>

    <?php // echo $form->field($model, 'weightlimit') ?>

    <?php // echo $form->field($model, 'wdightmin') ?>

    <?php // echo $form->field($model, 'weightmax') ?>

    <?php // echo $form->field($model, 'add_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
