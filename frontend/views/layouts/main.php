<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
		<link href="oppo_g.png" rel="shortcut icon">
        <title>OPPO X Spiderman</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="OPPO X Spiderman" />
        <meta name="keywords" content="oppo f3 black, oppo f3, spiderman homecoming, spiderman, selfie expert, oppo" />
        <meta name="generator" content="oppo indonesia" />
        <meta name="googlebot" content="all" />
        <meta name="robots" content="index follow" />
        <meta name="author" content="oppomobile-indonesia" />
        <meta name="copyright" content="oppo.com/id, All Rights Reserved" />
        
        <link href="spiderman/oppo_g.png" rel="shortcut icon">
        
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

		<div class="page-wrapper">
			<div class="preloader">
				<div class="loader">
					<img src="spiderman/img/assets/preloader.gif" alt="">
				</div>
			</div>
			<div class="page-header">







        <?= $content ?>

				<footer id="footer_section"> 
					<div class="footer_down footer_content"> 
						<div class="container" > 
							<div class="row" > 
								<div class="col-sm-4"> 
									<p class="wow fadeInLeft" data-wow-delay=".5s"> 
										COPYRIGHT © OPPO 2017 
									</p> 
								</div> 
								<div class="col-sm-4"></div> 
								<div class="col-sm-4"> 
									<center> 
										<div class="footer-social wow fadeInRight" data-wow-delay=".5s"> 
											<a href="https://lin.ee/4oG599Q" target="_blank"><img src='spiderman/img/line.png' width='27' onmouseover="this.src='spiderman/img/line-red.png';" onmouseout="this.src='spiderman/img/line.png';" /></a>
											<a href="https://www.facebook.com/indonesiaoppo/" target="_blank"><i class="fa fa-facebook"></i></a> 
											<a href="https://www.instagram.com/oppoindonesia" target="_blank"><i class="fa fa-instagram"></i></a> 
											<a href="https://twitter.com/oppoindonesia" target="_blank"><i class="fa fa-twitter"></i></a> 
											<a href="https://www.youtube.com/OPPOIndonesia" target="_blank"><i class="fa fa-youtube"></i></a> 
										</div> 
									</center> 
								</div> 
							</div> 
						</div> 
					</div> 
				</footer>                
  
			</div>
			
		</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
