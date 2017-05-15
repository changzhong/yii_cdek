<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CdekPvzListModel */

$this->title = 'Update Cdek Pvz List Model: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cdek Pvz List Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cdek-pvz-list-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
