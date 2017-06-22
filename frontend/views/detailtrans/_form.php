<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\web\Session;
use himiklab\yii2\recaptcha;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTrans */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $this->registerCssFile('form/css/bootstrap.min.css', ['position' => \yii\web\View::POS_HEAD]); ?>
<style>
.modal-foto .modal-content {
    border: medium none;
    border-radius: 0;
    box-shadow: none;
    min-height: 100%;
    padding: 20px 0;
    text-align: center;
	
}
.modal-open .modal {
padding-right:0px !important; 
}
.modal-foto .modal-close {
    height: 60px;
    position: absolute;
    right: 25px;
    top: 25px;
    width: 60px;
}
.modal-backdrop {
    background-color: #000;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
}
.modal-backdrop.in {
    opacity: 0.5;
}
.modal-foto .modal-close::before {
    content: "";
    height: 80px;
    left: 30px;
    position: absolute;
    top: -10px;
    width: 1px;
}
.modal-foto .modal-close::before {
    background-color: #aaa;
    content: "";
    height: 110px;
    left: 40px;
    position: absolute;
    top: -15px;
    transform: rotate(-45deg);
    width: 1px;
}
.modal-foto .modal-close::after {
    background-color: #aaa;
    content: "";
    height: 110px;
    position: absolute;
    right: 40px;
    top: -15px;
    transform: rotate(45deg);
    width: 1px;
}
.modal-foto .modal-content .page-title {
    margin-bottom: 30px;
}
.btn.btn-lucky {
    background-color: #a01f3d;
    border-color: #000;
}
.btn {
    border-radius: 0;
    font-family: "Open Sans",sans-serif;
    font-size: 11px;
    font-weight: normal;
    letter-spacing: 0.08em;
    line-height: 1.42857;
    padding: 6px 12px;
    text-transform: uppercase;
}
.suksesimei {
	background-color: #8c1526;
	border: 2px solid #000;
	font-family: "Open Sans",sans-serif;
	font-size: 11px;
	font-weight: normal;
	letter-spacing: 0.08em;
	line-height: 1.42857;
	padding: 6px 12px;
	text-transform: uppercase;
	color:#fff;	
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		$("#modalimei").modal('show');
	});
</script>
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
                                        <a href="#step-1" type="button" class="btn btn-spider-default btn-circle" disabled="disabled">1</a>
                                        <p>IMEI Check</p>
                                    </div>
                            
                                    <div class="stepwizard-step">
                                        <a href="#step-2" type="button" class="btn btn-spider btn-circle">2</a>
                                        <p>Profile</p>
                                    </div>
                                    <div class="stepwizard-step">
                                        <a href="#step-3" type="button" class="btn btn-spider-default btn-circle" disabled="disabled">3</a>
                                        <p>Finish</p>
                                    </div>        
                                </div>
                            </div>

<div class="detail-trans-form">
    <h4 style="color:red;"><?php echo \Yii::$app->session->getFlash('flashMessage'); ?></h4>

    <?php $form = ActiveForm::begin(); ?>
    <?php $session = Yii::$app->session;
        $session->open();
        //echo $session['idimei']; ?>

    <?= $form->field($model, 'id_imei')->hiddenInput(['value' => $session['idimei']])->label(false) ?>
	
	 <div class="col-xs-12">
       
            <div class="col-md-6">
			  <div class="form-group" align="left">
			  <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder' => 'Nama Lengkap']) ?>
			   </div>

			 <div class="form-group" align="left">
                     <?= $form->field($model, 'phone')->textInput(['maxlength' => true,'type' => 'number', 'placeholder' => 'Contoh 081xxxxxxx']) ?>
                </div> 
                 <div class="form-group" align="left">
                     <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => '*Format email salah Contoh abc@xyz.com']) ?>
                 
                 </div>                               
             </div> 
             
             <div class="col-md-6">
                <div class="form-group" align="left">
                     <?= $form->field($model, 'address')->textArea(['maxlength' => true, 'placeholder' => '*Jangan lupa juga masukan Kode Pos, Kota & Provinsi.', 'rows' => '8', 'cols' => '55']) ?>
                </div>
                 <div class="form-group" align="left">
                     <?= $form->field($model, 'status')->hiddenInput(['value' => 1])->label(false) ?> 
                 </div>
			</div> 
             
             <div class="col-md-12">
                  <div class="form-group" align="left">


    <?= // your fileinput widget for single file upload
        $form->field($model, 'image')->widget(FileInput::classname(), [
            'options'=>['accept'=>'upload/*'],
            'pluginOptions'=>['allowedFileExtensions'=>['jpg','gif','png']],
        ]); 
    ?>
	
	</div>
                 <div class="help-block" align="left">*File Maksimum 3MB</div>
				 
             </div>
            <div class="col-md-12" align="center">
  			    <?= $form->field($model, 'reCaptcha')->widget(\himiklab\yii2\recaptcha\ReCaptcha::className()) ?>
            </div>
             <div class="col-md-12" align="left">
                    <div class="subscribe-input form-group" >
                       <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'input_submit' : 'input_submit']) ?>
            
                    </div>             
             </div>
	


   

    <?php ActiveForm::end(); ?>

	</div>

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
                
     <!-- begin:modal imei -->
    <div class="modal-foto modal fade" id="modalimei" tabindex="-1" role="dialog" aria-hidden="true" style="padding-right:0 !important;">
      <div class="modal-content">
        <!--<div class="modal-close" data-dismiss="modal"></div>-->
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="modal-body">
                <div class="page-title">
                  <h2 class="heading" style="color:#333 !important;">Terima Kasih telah menggunakan OPPO!</h2>
                  <div class="margin-spider"></div>
                  <h5 style="color:#333 !important;">Silakan melengkapi data untuk mengikuti aktivitas ini. Semoga beruntung!</h5>
                </div>
                <!--  
                <ul class="list-inline project-detail">
                  
                  <li>&bull; Masukkan Nama Lengkap</li>
                  <li>&bull; Masukkan No Telp</li>
                  <li>&bull; Masukkan Email</li>
                  <li>&bull; Masukkan Alamat Lengkap sesuai format yang ditentukan</li>
                  
                 
                </ul>
                -->
                
			<br>
 
               <button type="button" class="btn btn-lucky" data-dismiss="modal" style="color:#FFF;"> NEXT </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end:modal -->  
	<script>
	$('#check').click(function () {
		if ($(this).is(':checked')) {
			$('#submit').removeAttr('disabled');
		} else {
			$('#submit').attr('disabled', true);
		}
	});
	</script>
