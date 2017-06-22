<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\web;

/**
 * This asset bundle provides the base JavaScript files for the Yii Framework.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class YiiAsset extends AssetBundle
{
    public $sourcePath = '@yii/assets';
    public $js = [
        'yii.js',
		'spiderman/assets/ajax/libs/jquery/1.12.4/jquery.min.js',
		'spiderman/assets/bootstrap/3.3.7/js/bootstrap.min.js',
		'spiderman/plugins/jquery.singlePageNav.js?v=3',
		'accordion/cbpHorizontalMenu.js',
		'spiderman/plugins/parallax.js',
		'spiderman/assets/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js',
		'spiderman/plugins/particles.js',
		'spiderman/assets/ajax/libs/wow/1.1.2/wow.min.js',
		'spiderman/assets/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js',
		'spiderman/plugins/owlcarousel/owl.carousel.js',
		'spiderman/assets/js/form-contact.js',
		'spiderman/js/newsletter.js',
		'spiderman/js/script.js',
		'accordion/jquery.accordion.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
