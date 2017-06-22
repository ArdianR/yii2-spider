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
    <?= $form->field($model, 'imeicheck')->textInput(['maxlength' => true, 'type' => 'number'])->hint('Diisi dengan 15 angka IMEI anda') ?>
    <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())->label(false) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Check', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>