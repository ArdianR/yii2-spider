<?php
return [
    'components' => [
        'db' => [
            /*'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=54.179.131.7;dbname=oppoit_spiderman',
            'username' => 'oppoit_spiderman',
            'password' => 'atQ7wML84t',
            'charset' => 'utf8',*/
			
			'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=spiderman',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
			'transport' => [
                   'class' => 'Swift_SmtpTransport',
                   'host' => 'smtp.elasticemail.com',
                   'username' => 'oppoitbrand@gmail.com',
                   'password' => '1f216cb2-f0ee-4796-8404-070536354606',
                   'port' => '2525',
             ],
        ],
    ],
];
