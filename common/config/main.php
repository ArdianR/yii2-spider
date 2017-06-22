<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'reCaptcha' => [
			'name' => 'reCaptcha',
			'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
			'siteKey' => '6LdCWCYUAAAAAMyjQXtjM0RNWidgHAgJTjDY_GV9',
			'secret' => '6LdCWCYUAAAAAC-eKYzWNGhq5kDDH0GFfDN3IGMw',
			//secret => 6LeTXQgUAAAAALExcpzgCxWdnWjJcPDoMfK3oKGi
		],
    ],
	'modules' => [
		'dynagrid'=>[
			'class'=>'\kartik\dynagrid\Module',
			// other settings (refer documentation)
		],
		'gridview'=>[
			'class'=>'\kartik\grid\Module',
			// other module settings
		],
	],
];
