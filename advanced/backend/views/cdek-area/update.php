<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CdekAreaModel */

$this->title = '编辑分区 ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Cdek Area Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cdek-area-model-update">


    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
