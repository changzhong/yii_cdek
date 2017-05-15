<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CdekPvzListModel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cdek Pvz List Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-pvz-list-model-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'name',
            'citycode',
            'city',
            'worktime',
            'address',
            'phone',
            'note',
            'coordx',
            'coordy',
            'type',
            'ownercode',
            'weightlimit',
            'wdightmin',
            'weightmax',
            'add_time',
            'update_time',
        ],
    ]) ?>

</div>
