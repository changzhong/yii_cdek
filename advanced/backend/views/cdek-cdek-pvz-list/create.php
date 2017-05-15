<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CdekPvzListModel */

$this->title = 'Create Cdek Pvz List Model';
$this->params['breadcrumbs'][] = ['label' => 'Cdek Pvz List Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-pvz-list-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
