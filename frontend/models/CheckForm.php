<?php

namespace app\models;

use Yii;
use yii\validators\Validator;

class CheckForm extends \yii\base\Model
{
    public $imeicheck;

    public function rules()
	{
	    return [
	        // the name, email, subject and body attributes are required
	        [['imeicheck'], 'required'],
			['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LdCWCYUAAAAAC-eKYzWNGhq5kDDH0GFfDN3IGMw'],
	    ];
	}
}