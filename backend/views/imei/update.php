<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Imei */

$this->title = 'Update Imei: ' . $model->id_imei;
$this->params['breadcrumbs'][] = ['label' => 'Imeis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_imei, 'url' => ['view', 'id' => $model->id_imei]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imei-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
