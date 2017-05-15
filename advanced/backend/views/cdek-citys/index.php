<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CdekCitysSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '城市列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-citys-model-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加城市', ['create'], ['class' => 'btn btn-success hidden']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            'code_id',
            'country_name',
            'full_name',
            'city_name',
            'obl_name',
            // 'center',
            // 'nal_sum_limit',
            'eng_name',
            // 'post_code_list',
            'add_time',
            'update_time',
            'ch_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
