<?php $this->registerJsFile('spiderman/js/jquery.js', ['position' => \yii\web\View::POS_HEAD]); ?>
	
        <link rel="icon" href="spiderman/oppo_g.jpg">	

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


				<header class="header">
					<div class="container">
						<div class="logo">
						    <a href="index.php"><img src="spiderman/img/logooppo_w.svg" alt="OPPO" /></a>
						</div>
						<div class="mobile-menu">
							<a href="#"><i class="ion-android-menu"></i></a>
						</div>
						<div class="main-nav">
							<ul class="main-nav-inner">
								<li><a href="#intro">Home</a></li>
								<li><a href="#collectible">Collectible</a></li>
								<li><a href="#video-bg">TVC</a></li>
								<li><a href="#features">Features</a></li>
								<li><a href="http://www.oppo.com/id/smartphone-f3" target="_blank">OPPO F3</a></li>
							</ul>
						</div>
					</div>
				</header>

               
               <section id="intro" class="intro parallax" data-parallax="scroll" data-image-src="spiderman/img/slider/bg.jpg?v=15" style="padding-top:130px"> 
					<div class="container"> 

					  <script>
                          if($(window).width() > 500) {
                             document.write('<div class="row"><div class="col-md-12"><div class="intro-content wow fadeInRight" data-wow-delay="0.2s"><center><img src="spiderman/img/slider/spiderman.png?v=15" class="img-responsive img-one wow fadeInRight" data-wow-delay="0.7s" style="width:800px;margin-top:-60px"/></center></div></div></div>');
                          }

                      </script>  
                      
                      <script>
					    if($(window).width() < 500) { 
					        document.write('<div class="row"><div class="col-xs-12"><div class="intro-content wow fadeInUp" data-wow-delay="0.2s"><center><img src="spiderman/img/slider/f3black.png?v=15" class="img-responsive" style="width:220px; margin-top:-20px;"/><img src="spiderman/img/slider/selfieexpert.png?v=15" class="img-responsive" style="width:150px;padding-top:10px;"/></center></div></div></div><div class="row"><div class="intro-content wow fadeInRight" data-wow-delay="0.2s"><center><img src="spiderman/img/slider/phone.png?v=15" class="img-responsive" style="margin-top:-40px;"/></div></div><div class="row"><div class="col-xs-7"><div class="intro-content wow fadeInUp" data-wow-delay="0.2s"><center><img src="spiderman/img/slider/homecoming.png?v=15" class="img-responsive" style="width:130px; margin-top:-20px;" /></center></div></div><div class="col-xs-5"><div class="intro-content wow fadeInUp" data-wow-delay="0.2s"><center><img src="spiderman/img/slider/legal.png?v=15" class="img-responsive" style="width:130px;" /></center></div></div></div>');
						}
					  </script>
                                  
      
						<div class="row"> 
							<div class="col-md-12"> 
								<a href="#collectible"> 
									<div class="intro-content wow fadeInDown" data-wow-delay="0.2s" style="margin-top:-20px;"> 
										<center><p style="color:#fff;">WIN COLLECTIBLE PACK</p></center> 
									</div> 
								</a> 
							</div> 
						</div> 
						<div class="arrow arrow-floating"><a href="#collectible"><i class="arrow-icon"></i></a></div> 
					</div> 
				</section> 
				<section id="collectible" class="section-padding" style="margin-bottom:-80px"> 
					<div class="single-features-top"> 
						<div class="container"> 
							<h2 class="section-header" style="text-align:center;color:#626a6c;">Menangkan Limited Collection Pack <br>Spider-man: Homecoming<sup>*</sup></h2> 
							<div class="margin-bottom"></div> 
							<div class="row"> 
								<div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s"> 
									<div class="single-feature" style="padding-bottom:50px;"> 
										<div class="row"> 
											<div class="col-xs-4"> 
												<div class="icon-number"> 
												   <img src="spiderman/img/icon/no1.png?v=15" alt="icon" /> 
												</div> 
											</div> 
											<div class="col-xs-8"> 
												<div class="icon"> 
												   <img src="spiderman/img/icon/1.png?v=15" alt="icon" /> 
												</div> 
											</div> 
										</div> 
										<div class="row"> 
											<p class="single-description" style="text-align:center">Cek IMEI 1 OPPO F3 kamu (tekan *#016* atau lihat sticker di box OPPO F3 kamu)</p> 
										</div> 
									</div> 
								</div> 
								<div class="col-md-4 wow fadeInDown" data-wow-delay="0.6s"> 
									<div class="single-feature" style="padding-bottom:50px;"> 
										<div class="row"> 
											<div class="col-xs-4"> 
												<div class="icon-number"> 
												   <img src="spiderman/img/icon/no2.png?v=15" alt="icon" /> 
												</div> 
											</div> 
											<div class="col-xs-8"> 
												<div class="icon"> 
												   <img src="spiderman/img/icon/2.png?v=15" alt="icon" /> 
												</div> 
											</div> 
										</div> 
										<div class="row"> 
											<p class="single-description" style="text-align:center">Input IMEI di spiderman.oppomobile.id (IMEI harus terdaftar sebagai OPPO F3)</p> 
										</div> 
									</div> 
								</div> 
								<div class="col-md-4 wow fadeInDown" data-wow-delay="1s"> 
									<div class="single-feature"> 
										<div class="row"> 
											<div class="col-xs-4"> 
												<div class="icon-number"> 
												   <img src="spiderman/img/icon/no3.png?v=15" alt="icon" /> 
												</div> 
											</div> 
											<div class="col-xs-8"> 
												<div class="icon"> 
												   <img src="spiderman/img/icon/3.png?v=15" alt="icon" /> 
												</div> 
											</div> 
										</div> 
										<div class="row"> 
											<p class="single-description" style="text-align:center">Isi data diri kamu (untuk pengiriman hadiah) dan Selfie sebaik mungkin dengan menggunakan OPPO F3 kamu</p> 
										</div> 
									</div> 
								</div> 
							</div> 
							<div class="row" style="text-align:center;padding-bottom:40px;"> 
								<a href="index.php?r=imeicheck/modal" class="btn btn-lg btn-contact-bg" style="font-weight:600;color:#ffcb00;">Join Now</a> 
							</div> 
							<p class="section-description" style="color:#2e3031;font-size:0.9em;"><sup>*</sup>periode activity : 3-16 Juli 2017<br><sup>*</sup>syarat dan ketentuan berlaku<br><sup>*</sup>selama persediaan masih ada</p> 
						</div> 
					</div> 
				</section> 
				<section id="video-bg" class="section-padding parallax" data-parallax="scroll" data-image-src="spiderman/img/bg-video.jpg?v=15"> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-7 center-col"> 
								<div class="video wow slideInUp" data-wow-delay="0.2s"> 
									<a href="https://youtu.be/ESDJxqeo2pM" class="play-btn video-popup"><img src="spiderman/img/assets/play-btn.png" alt="" /></a> 
									<h1 class="mtb-25 text-white text-uppercase" style="text-shadow: 2px 2px #000;">Watch video</h1> 
								</div> 
							</div> 
						</div>
					</div> 
				</section> 
				<section id="features" class="section-padding" style="background-color:#18191f"> 
					<div class="section-title"> 
						<h2 class="section-header">Features</h2> 
						<div class="margin-bottom"></div> 
					</div> 
					<div class="container"> 
						<div class="row"> 
							<div class="col-md-4 col-sm-12"> 
								<div class="icon-box right mtb-65 mb-sm-25 mb-xs-25 wow fadeInLeft" data-wow-delay="0.2s"> 
									<div class="icon-right"> 
										<i class="ion-ios-browsers-outline"></i> 
									</div> 
									<div class="icon-box-content"> 
										<h5>Premium Metal Body</h5> 
										<p class="section-collectible">7.3 mm body metal, dengan desain melengkung yang nyaman digenggam.</p> 
									</div> 
								</div> 
								<div class="icon-box right mtb-65 mb-sm-25 mb-xs-25 wow fadeInLeft" data-wow-delay="0.3s"> 
									<div class="icon-right"> 
										<i class="ion-ios-upload-outline"></i> 
									</div> 
									<div class="icon-box-content"> 
										<h5>5.5-inch Display</h5> 
										<p class="section-collectible">Layar besar dan lebih tangguh dengan lapisan Corning Gorilla Glass 5.</p> 
									</div> 
								</div> 
								<div class="icon-box right mtb-65 mb-sm-25 mb-xs-25 wow fadeInLeft" data-wow-delay="0.2s"> 
									<div class="icon-right"> 
										<i class="ion-ios-pricetags-outline"></i> 
									</div> 
									<div class="icon-box-content"> 
										<h5>RAM 4GB</h5> 
										<p class="section-collectible">Main game tanpa lag & multitasking jadi lebih lancar.</p> 
									</div> 
								</div> 
							</div> 
							<div class="col-md-4 col-sm-12"> 
								<img src="spiderman/img/phone.png?v=15" class="img-responsive img-center wow fadeInDown" data-wow-delay="0.5s" style="width:300px" /> 
							</div> 
							<div class="col-md-4 col-sm-12"> 
								<div class="icon-box left mtb-65 mb-sm-25 mb-xs-25 wow fadeInRight" data-wow-delay="0.2s"> 
									<div class="icon-left"> 
										<i class="ion-ios-bookmarks-outline"></i> 
									</div> 
									<div class="icon-box-content"> 
										<h5>Double View Group Selfie Camera</h5> 
										<p class="section-collectible">One for Selfie, One for Group Selfie.</p> 
									</div> 
								</div> 
								<div class="icon-box left mtb-65 mb-sm-25 mb-xs-25 wow fadeInRight" data-wow-delay="0.3s"> 
									<div class="icon-left"> 
										<i class="ion-ios-stopwatch-outline"></i> 
									</div> 
									<div class="icon-box-content"> 
										<h5>Flash Touch Access</h5> 
										<p class="section-collectible">Akses semakin cepat ke semua data.</p> 
									</div> 
								</div> 
								<div class="icon-box left mtb-65 mb-sm-25 mb-xs-25 wow fadeInRight" data-wow-delay="0.2s"> 
									<div class="icon-left"> 
										<i class="ion-ios-briefcase-outline"></i> 
									</div> 
									<div class="icon-box-content"> 
										<h5>64GB ROM</h5> 
										<p class="section-collectible">Penyimpanan besar untuk semua Selfie & Group Selfie kamu.</p> 
									</div> 
								</div> 
							</div> 
						</div> 
					</div> 
				</section> 
		

