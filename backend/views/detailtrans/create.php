<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DetailTrans */

$this->title = 'Create Detail Trans';
$this->params['breadcrumbs'][] = ['label' => 'Detail Trans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detail-trans-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
