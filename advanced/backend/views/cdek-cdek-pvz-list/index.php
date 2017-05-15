<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CdekCdekPvzListSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cdek分部列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-pvz-list-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加分部信息', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'code',
            'name',
            'citycode',
            'city',
            // 'worktime',
            // 'address',
            // 'phone',
            // 'note',
            // 'coordx',
            // 'coordy',
            // 'type',
            // 'ownercode',
            // 'weightlimit',
            // 'wdightmin',
            // 'weightmax',
            // 'add_time',
            // 'update_time',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
