<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Imei */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imei-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'imei1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'imei2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'warehouse')->textInput() ?>

    <?= $form->field($model, 'sold')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
