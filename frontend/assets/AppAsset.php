<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
		'spiderman/assets/bootstrap/3.3.7/css/bootstrap.min.css',
		'spiderman/assets/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
		'spiderman/plugins/owlcarousel/owl.carousel.css',
		'spiderman/css/font-awesome.min.css',
		'spiderman/assets/ajax/libs/animate.css/3.5.2/animate.min.css',
		'spiderman/assets/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css',
		'spiderman/css/animation.css',
		'spiderman/css/animate.css',
		'spiderman/css/style.css',
    ];
    public $js = [
		//'spiderman/assets/ajax/libs/jquery/1.12.4/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
