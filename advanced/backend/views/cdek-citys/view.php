<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CdekCitysModel */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => '城市列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-citys-model-view">


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
            'code_id',
            'country_name',
            'full_name',
            'city_name',
            'obl_name',
            'center',
            'nal_sum_limit',
            'eng_name',
            'post_code_list',
            'add_time',
            'update_time',
            'ch_name',
        ],
    ]) ?>

</div>
