<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '网站配置列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加配置', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'name',
//            'type',
            'title',
//            'group',
//             'extra',
             'remark',
//             'create_time',
//             'update_time',
             'status',
             'value:ntext',
             'sort',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
