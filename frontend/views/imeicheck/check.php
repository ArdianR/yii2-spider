<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Session;
use himiklab\yii2\recaptcha;
?>
<h4 style="color:red;"><?php echo \Yii::$app->session->getFlash('flashMessage'); ?></h4>
<?php
$form = ActiveForm::begin([
    'id' => 'login-form',
    'options' => ['class' => 'form-horizontal'],
]);
		$session = Yii::$app->session;
        $session->open();

?>
	<?php echo $form->errorSummary($model); ?>
<<<<<<< HEAD

=======
>>>>>>> a895c4b959c34e75f601df44a0dbd7b5c1cf7086
    <?= $form->field($model, 'imeicheck')->textInput(['maxlength' => true, 'type' => 'number'])->hint('Masukan IMEI 1 OPPO F3 kamu <br> Tips: lihat nomer IMEI 1 kamu di belakang box pembelian OPPO F3 atau tekan*#06# di OPPO F3') ?>
    <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())->label(false) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Check', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>