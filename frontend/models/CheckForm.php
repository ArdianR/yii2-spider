<?php

namespace app\models;

use Yii;
use yii\validators\Validator;
use himiklab\yii2\recaptcha;

class CheckForm extends \yii\base\Model
{
    public $imeicheck;
    public $reCaptcha;

    public function rules()
	{
	    return [
	        // the name, email, subject and body attributes are required
	        [['imeicheck'], 'required'],
			['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LdCWCYUAAAAAC-eKYzWNGhq5kDDH0GFfDN3IGMw'],
	    ];
	}

	public function attributeLabels()
    {
        return [
            'reCaptcha' => '',
        ];
    }
}