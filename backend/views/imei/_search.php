<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ImeiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imei-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_imei') ?>

    <?= $form->field($model, 'imei1') ?>

    <?= $form->field($model, 'imei2') ?>

    <?= $form->field($model, 'warehouse') ?>

    <?= $form->field($model, 'sold') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
