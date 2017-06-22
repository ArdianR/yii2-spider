<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Session;
use himiklab\yii2\recaptcha;
?>
<?php $this->registerCssFile('form/css/bootstrap.min.css', ['position' => \yii\web\View::POS_HEAD]); ?>
		<script>
		$(document).ready(function(){
		  $("a").on('click', function(event) {
			if (this.hash !== "") {
			  event.preventDefault();
			  var hash = this.hash;
			  $('html, body').animate({
				scrollTop: $(hash).offset().top
			  }, 800, function(){
				window.location.hash = hash;
			  });
			}
		  });
		});
		
		</script>
	
      <style type="text/css">
		.stepwizard-step p {
			margin-top: 10px;
		}
		
		.stepwizard-row {
			display: table-row;
		}
		
		.stepwizard {
			display: table;
			width: 100%;
			position: relative;
		}
		
		.stepwizard-step button[disabled] {
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
		}
		
		.stepwizard-row:before {
			top: 14px;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 100%;
			height: 2px;
			background-color: #000;
			z-order: 0;
		
		}
		
		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}
		
		.btn-circle {
		  width: 30px;
		  height: 30px;
		  text-align: center;
		  padding: 6px 0;
		  font-size: 12px;
		  line-height: 1.428571429;
		  border-radius: 15px;
		}
    </style>
<?php $this->registerJsFile('form/js/jquery-1.11.1.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
<?php $this->registerJsFile('form/js/bootstrap.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
				<header class="header" style="background-color:#000 !important; height:70px !important;">
					<div class="container">
						<div class="logo">
						    <a href="index.php"><img src="spiderman/img/logooppo_w.svg" alt="OPPO" /></a>
						</div>
						<div class="mobile-menu">
							<a href="#"><i class="ion-android-menu"></i></a>
						</div>
						<div class="main-nav">
							<ul class="main-nav-inner">
								<li><a href="#">Home</a></li>
								<li><a href="#">Collectible</a></li>
								<li><a href="#">TVC</a></li>
								<li><a href="#">Features</a></li>
								<li><a href="http://www.oppo.com/id/smartphone-f3" target="_blank">OPPO F3</a></li>
							</ul>
						</div>
					</div>
				</header>
				<!--=====================
					start IMEI
				=====================-->
				<section id="team" class="">
					<div class="container">
				
					<!--=== start section-title ===-->
					    <h2 class="section-header" style="color:#333 !important; margin-top:80px;">FORM <span style="font-weight:200 !important;">REGISTRATION</span></h2>
						  <div class="margin-spider"></div>
                          <br/>
					<!--=== end section-title ===-->
						<div class="row">
							<div class="col-sm-6 col-sm-6 col-md-12">
								<div class="one text-center">
                            <div class="container">
                            <div class="stepwizard">
                                <div class="stepwizard-row setup-panel">
                                    <div class="stepwizard-step">
                                        <a href="#step-1" type="button" class="btn btn-spider btn-circle">1</a>
                                        <p>IMEI Check</p>
                                    </div>
                            
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-spider-default btn-circle" disabled="disabled">2</a>
                                        <p>Profile</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-spider-default btn-circle" disabled="disabled">3</a>
                                        <p>Finish</p>
                                    </div>        
                                </div>
                            </div>
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

	 <div class="col-md-12" align="center">
    <div class="subscribe-input form-group" >
    <?= $form->field($model, 'imeicheck')->textInput(['maxlength' => true, 'type' => 'number', 'class' => 'email_input form-control', 'placeholder' => 'Masukan IMEI 1 OPPO F3 kamu'])->label(false)->error(false) ?>
    <span></span>
    <div class="error-summary" style=""><ul><li>TIPS:</li></ul><p>Lihat nomer IMEI 1 kamu di belakang box pembelian OPPO F3 atau tekan <span style="font-weight:bold;">*#06#</span> di OPPO F3</p></div>
            
        <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className())->label(false) ?>
    
        <?= Html::submitButton('Check', ['class' => 'input_submit']) ?>
        </div>
    </div>
<?php ActiveForm::end() ?>

<form role="form" novalidate>
        <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
            </div>

			
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
        <h3> Profile</h3>
            <div class="col-md-6">
                
                <div class="form-group" align="left">
                    <label class="control-label">Nama Lengkap</label>
                    <input maxlength="200" type="text" required class="form-control" placeholder="Sesuai KTP/Identitas" />
                </div>
                <div class="form-group" align="left">
                    <label class="control-label">Alamat</label>
                    <input maxlength="200" type="text" required class="form-control" placeholder="Alamat sesuai identitas"  />
                </div>
             </div>   
             <div class="col-md-6"> 
                <div class="form-group" align="left">
                    <label class="control-label">Telp</label>
                    <input maxlength="200" type="text" required class="form-control" placeholder="No Telp/HP"  />
                </div>     
                <div class="form-group" align="left">
                    <label class="control-label">Email</label>
                    <input maxlength="200" type="text" required class="form-control" placeholder="emailanda@gmail.com"  />
                </div>                
            </div>
            <div class="col-md-12">
                <div class="form-group" align="left">
                    <label class="control-label">Foto</label>
                    <input type="file" required>
                </div>   
            </div>
            
            <div class="col-md-12"> 
                <div class="form-group" align="left">
                <label>
														<input name="terms1" required aria-required="true" type="checkbox">
														<span>I have read and accept the term.</span>
													</label>
                </div>           
                <button class="ds-btn download-store2 pull-right nextBtn" type="button" >Next</button>   
             </div>  
        </div>
    </div>    
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Finish</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Selamat Data Anda Sudah Tersimpan di Database Kami</button>
            </div>
        </div>
    </div>    
</form>
</div>
<script type="text/javascript">
$(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');
    allWells.hide();
    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);
        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });
    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;
        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }
        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });
    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
								</div>
							</div>
							
						</div>
						
					</div>
					<!--=== end container ===-->
					
				</section>
				<!--=====================
					end IMEI
				=====================-->