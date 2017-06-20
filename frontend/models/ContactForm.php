<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param string $email the target email address
     * @return bool whether the email was sent
     */
    /*public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body)
            ->send();
    }*/

    public function sendEmail($supportEmail)
    {
        $userSuccess = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'userFeedback-html', 'text' => 'userFeedback-text'],
                [
                    'email' => $this->email,
                    'body'  => $this->body,
                    'name'  => $this->name,
                    'supportEmail' => $supportEmail,
                ]
            )
            ->setFrom([$supportEmail => Yii::$app->params['siteName'] . ' bot'])
            ->setTo($this->email)
            ->setSubject('Than you for wrote review on ' . Yii::$app->params['siteName'])
            ->send();
        return $userSuccess;
    }
}
