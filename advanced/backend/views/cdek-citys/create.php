<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CdekCitysModel */

$this->title = '添加城市';
$this->params['breadcrumbs'][] = ['label' => '城市列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-citys-model-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
