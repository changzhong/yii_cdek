<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CdekCitysModel */

$this->title = '编辑城市' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '城市列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cdek-citys-model-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
