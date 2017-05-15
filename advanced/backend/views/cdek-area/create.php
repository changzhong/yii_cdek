<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CdekAreaModel */

$this->title = '添加分区';
$this->params['breadcrumbs'][] = ['label' => 'Cdek Area Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdek-area-model-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
