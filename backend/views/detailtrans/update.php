<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTrans */

$this->title = 'Update Detail Trans: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Detail Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_trans]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detail-trans-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
