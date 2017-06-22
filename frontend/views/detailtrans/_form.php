<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\web\Session;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTrans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detail-trans-form">
    <h4 style="color:red;"><?php echo \Yii::$app->session->getFlash('flashMessage'); ?></h4>

    <?php $form = ActiveForm::begin(); ?>
    <?php $session = Yii::$app->session;
        $session->open();
        //echo $session['idimei']; ?>

    <?= $form->field($model, 'id_imei')->hiddenInput(['value' => $session['idimei']])->label(false) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'type' => 'number']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 1])->label(false) ?>

    <?= // your fileinput widget for single file upload
        $form->field($model, 'image')->widget(FileInput::classname(), [
            'options'=>['accept'=>'upload/*'],
            'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png']],
        ]); 
    ?>

    <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
