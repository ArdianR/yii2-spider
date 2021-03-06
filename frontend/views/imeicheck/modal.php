<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use yii\web\Session;

/* @var $this yii\web\View */
/* @var $model app\models\DetailTrans */
/* @var $form yii\widgets\ActiveForm */
?>
<?= Html::csrfMetaTags() ?>

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
    font-family: "Poppins",sans-serif;
    font-size: 11px;
    font-weight: normal;
    letter-spacing: 0.08em;
    line-height: 1.42857;
    padding: 6px 12px;
    text-transform: uppercase;
}


#c-calend {
    margin-bottom: 50px;
}

.accordion.accordion-open {
    background: #314f81 none repeat scroll 0 0;
    color: #fff;
    font-weight: 700;
    letter-spacing: 1px;
}
.accordion {
    background: #8c1526 none repeat scroll 0 0;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-family: "Poppins",sans-serif;
    font-size: 13px;
    letter-spacing: 1px;
    margin: 0;
    overflow: hidden;
    padding: 20px;
    text-decoration: none;
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
	
 
<?php $this->registerJsFile('form/js/jquery-1.11.1.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>
<?php $this->registerJsFile('form/js/bootstrap.min.js', ['position' => \yii\web\View::POS_HEAD]); ?>




 


                



     <!-- begin:modal imei -->
    <div class="modal-foto modal fade" id="modalimei" tabindex="-1" role="dialog" aria-hidden="true" style="padding-right:0 !important;">
      <div class="modal-content">
        <!--<div class="modal-close" data-dismiss="modal"></div>-->
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="modal-body">
                <div class="page-title">
                  <h2 class="heading" style="color:#333 !important;">Menangkan Limited Collection Pack Spider-Man: Homecoming,</h2>
                  <h5 style="color:#333 !important;">khusus buat kamu pengguna OPPO F3!</h5>
                </div>
                <!--
                <p style="font-weight:bold !important; color:#8c1526 !important;">
                CARA IKUTAN:
                </p>
                <div class="margin-spider"></div>
                <ul style="text-align:left !important;">
                    <li>Aktivitas ini dapat diikuti oleh <span style="font-weight:bold !important;">pengguna OPPO F3 </span>semua warna (Gold, Rose Gold, Black & Reza Rahadian Limited Edition) yang membeli OPPO F3 dalam periode Mei – Juli 2017.</li>
                    <li>Untuk mendapatkan limited collection pack Spider-Man: Homecoming ini, pengguna OPPO F3 harus mengunjungi website spiderman.oppomobile.id dan mengikuti langkah berikut:</li> 
                        <ul>
                            <li>Input 15 digit nomor  IMEI 1 dari OPPO F3 yang kamu miliki <span style="font-weight:bold !important;">(Tips: lihat nomer IMEI 1 kamu di belakang box pembelian OPPO F3 atau tekan*#06# di OPPO F3)</span></li>
                            <li>Setelah Nomor IMEI dimasukkan, sistem akan verifikasi OPPO F3 kamu</li>
                            <li>Masukan data diri kamu pada form yang tersedia untuk keperluan pengiriman hadiah.</li>
                            <li>Upload foto selfie terbaik kamu dengan menggunakan OPPO F3 di website</li>
                            
                        </ul> 
                     <li>Pengguna OPPO F3 dengan foto selfie terbaik akan mendapatkan Limited Collection Pack Spider-Man: Homecoming yang akan mendapat konfirmasi via email.</li>
                     <li>Periode activity adalah 3 – 16 Juli 2017</li>
                     <li style="font-weight:bold !important;">Persedian terbatas. Tersedia 500 Limited Collection Pack Spider-Man: Homecoming untuk konsumen OPPO F3.</li>
                     <li>Hadiah dikirimkan langsung ke alamat pemenang lewat pos mulai 19 Juli 2017. Pastikan kamu memasukan data diri dengan benar.</li>
                        
                </ul>
                -->
                    
     <div class="top-score-title right-score col-md-12" id="c-calend" align="center">

                <div id="section2" class="accordion accordion-close">&equiv; CARA IKUTAN<span></span></div>
                    <div style="display: none;" class="acc-content">
                      <ul style="text-align:left !important;">
                          <li>Aktivitas ini dapat diikuti oleh <span style="font-weight:bold !important;">pengguna OPPO F3 </span>semua warna (Gold, Rose Gold, Black & Reza Rahadian Limited Edition) yang membeli OPPO F3 dalam periode Mei – Juli 2017.</li>
                          <li>Untuk mendapatkan limited collection pack Spider-Man: Homecoming ini, pengguna OPPO F3 harus mengunjungi website spiderman.oppomobile.id dan mengikuti langkah berikut:</li> 
                              <ul>
                                  <li>Input 15 digit nomor  IMEI 1 dari OPPO F3 yang kamu miliki <span style="font-weight:bold !important;">(Tips: lihat nomer IMEI 1 kamu di belakang box pembelian OPPO F3 atau tekan*#06# di OPPO F3)</span></li>
                                  <li>Setelah Nomor IMEI dimasukkan, sistem akan verifikasi OPPO F3 kamu</li>
                                  <li>Masukan data diri kamu pada form yang tersedia untuk keperluan pengiriman hadiah.</li>
                                  <li>Upload foto selfie terbaik kamu dengan menggunakan OPPO F3 di website</li>
                                  
                              </ul> 
                           <li>Pengguna OPPO F3 dengan foto selfie terbaik akan mendapatkan Limited Collection Pack Spider-Man: Homecoming yang akan mendapat konfirmasi via email.</li>
                           <li>Periode activity adalah 3 – 16 Juli 2017</li>
                           <li style="font-weight:bold !important;">Persedian terbatas. Tersedia 500 Limited Collection Pack Spider-Man: Homecoming untuk konsumen OPPO F3.</li>
                           <li>Hadiah dikirimkan langsung ke alamat pemenang lewat pos mulai 19 Juli 2017. Pastikan kamu memasukan data diri dengan benar.</li>
                              
                      </ul>
                    </div>
           


                <div id="section1" class="accordion accordion-close">&equiv; SYARAT KETENTUAN<span></span></div>
                    <div style="display: none;" class="acc-content">
                      <ul style="text-align:left !important;" type="1">
                          <li>Activity ini hanya berlaku untuk pengguna OPPO F3.</li>
                          <li>Unit OPPO F3 yang didaftarkan harus teridentifikasi oleh sistem sebagai OPPO F3 yang telah terjual.</li>
                           <li>Satu (1) Pengguna OPPO F3 hanya dapat mendaftarkan satu (1) nomor IMEI OPPO F3.</li>
                           <li>Foto Selfie yang diikutsertakan tidak boleh mengandung unsur SARA, pornografi dan kekerasan.</li>
                           <li>Penentuan pemenang oleh OPPO Indonesia adalah bersifat mutlak dan tidak dapat diganggu gugat.</li>
                           <li>Panitia tidak bertanggung jawab atas hadiah yang tidak sampai ke tangan pemenang karena alamat atau data yang diinput tidak lengkap. Pastikan data diri yang dimasukan benar.</li>
                           <li>Pemenang maupun pengguna peserta tidak dipungut biaya apapun. Hati-hati penipuan yang mengatasnamakan OPPO Indonesia.</li>
                           <li>Panitia penyelenggara berhak membatalkan keikutsertaan peserta apabila peserta melakukan hal yang bersifat negatif, bertentangan dengan hukum dan tidak sesuai ketentuan dan syarat-syarat yang berlaku.</li>
                           <li>Panitia berhak mengganti syarat & ketentuan tanpa pemberitahuan terlebih dahulu.</li>   
                      </ul>
  
                    </div>
               </div>   
               
               
      </div>



                <div class="clearfix">&nbsp;</div>
			<br>
			<form action="index.php?r=imeicheck/check" method="post">
                <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>" />
            
				<div style="float:right;font-family: 'Merriweather Sans', sans-serif;">
                    <div class="col-md-12">
                    


                    
					<input id="check" type="checkbox" name="setuju" value="setuju" class="cekbox">
					&nbsp;
					<label for="check" style="font-family:Raleway,sans-serif !important;">Saya mengetahui dan setuju terhadap cara ikutan dan syarat &amp; ketentuan yang berlaku.</label>
					&nbsp;
					&nbsp;
					<style>
						#submit{
		   
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
						#submit:disabled{
                            background-color: #ccc;
                            border: 2px solid #999;
							font-family: "Open Sans",sans-serif;
							font-size: 11px;
							font-weight: normal;
							letter-spacing: 0.08em;
							line-height: 1.42857;
							padding: 6px 12px;
							text-transform: uppercase;
							color:#999;			   
							
						}
					</style>
                    </div>
                    <div class="col-md-12">
					<input style="font-size:140%;padding:10px 30px 10px 30px;" type="submit" disabled="disabled" name="submit" id="submit" class="submit" value="Next">
				    </div>
                </div>	
			</form>
			<?php
				if($_POST)
				{
					if(!isset($_POST['setuju'])) {
					   echo "<script>alert('Syarat dan Ketentuan Harus Disetujui!');document.getElementById('popup').style.display='block';document.getElementById('popupbg').style.display='block';</script>";
					}
					else
					{
						echo "<form action='index.php?r=imeicheck/check' id='formtnc' method='post' class='btn btn-lucky'><input type='hidden' name='src' value='tnc'/></form><script>document.getElementById('formtnc').submit();</script>"; 
					}
				}
			?>                
                
                <!--<button type="button" class="btn btn-lucky" data-dismiss="modal" style="color:#FFF;"> &radic; SETUJU </button>-->
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
    
  
<script type="text/javascript">
        $(document).ready(function () {
            $(function () {
                "use strict";
                $('.accordion').accordion({ defaultOpen: 'section2' }); //some_id section1 in demo
            });
        });
</script>
