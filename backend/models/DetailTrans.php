<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_trans".
 *
 * @property integer $id_trans
 * @property integer $id_imei
 * @property string $name
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $path_src
 * @property string $path_web
 * @property integer $status
 * @property integer $stat_email1
 * @property integer $stat_email2
 * @property string $created_at
 *
 * @property Imei $idImei
 * @property Status $status0
 */
class DetailTrans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_trans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_imei', 'name', 'address', 'phone', 'email', 'path_src', 'path_web', 'status'], 'required'],
            [['id_imei', 'status', 'stat_email1', 'stat_email2'], 'integer'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['address', 'path_src', 'path_web'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 128],
            [['id_imei'], 'exist', 'skipOnError' => true, 'targetClass' => Imei::className(), 'targetAttribute' => ['id_imei' => 'id_imei']],
            [['status'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status' => 'id_status']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_trans' => 'Id Trans',
            'id_imei' => 'Id Imei',
            'name' => 'Name',
            'address' => 'Address',
            'phone' => 'Phone',
            'email' => 'Email',
            'path_src' => 'Path Src',
            'path_web' => 'Path Web',
            'status' => 'Status',
            'stat_email1' => 'Stat Email1',
            'stat_email2' => 'Stat Email2',
            'created_at' => 'Created At',
        ];
    }

    public function sendEmail($supportEmail)
    {
        $userSuccess = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'newsletter/email1.php'],
                //['html' => 'userFeedback-html', 'text' => 'userFeedback-text'],
                [
                    'imagebg' => Yii::getAlias('@common/mail/newsletter/image/bgnewsletter.jpg'),
                    'email' => $model->email,
                    'name'  => $model->name,
                    'supportEmail' => $supportEmail,
                ]
            )
            ->setFrom([$supportEmail => Yii::$app->params['siteName']])
            ->setTo($this->email)
            //->setSubject('Than you for wrote review on ' . Yii::$app->params['siteName'])
            ->setSubject('OPPO F3. Terima Kasih Telah Berpartisipasi!')
            ->send();
        return $userSuccess;
    }

    public function sendEmail2($supportEmail,$name,$mail)
    {
        $userSuccess = Yii::$app
            ->mailer
            ->compose(
                ['html' => 'newsletter/email2.php'],
                //['html' => 'userFeedback-html', 'text' => 'userFeedback-text'],
                [
                    'imagebg' => Yii::getAlias('@common/mail/newsletter/image/bgnewsletter.jpg'),
                    'email' => $mail,
                    'name'  => $name,
                    'supportEmail' => $supportEmail,
                ]
            )
            ->setFrom([$supportEmail => Yii::$app->params['siteName']])
            ->setTo($this->email)
            //->setSubject('Than you for wrote review on ' . Yii::$app->params['siteName'])
            ->setSubject('OPPO F3. Terima Kasih Telah Berpartisipasi!')
            ->send();
        return $userSuccess;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdImei()
    {
        return $this->hasOne(Imei::className(), ['id_imei' => 'id_imei']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus0()
    {
        return $this->hasOne(Status::className(), ['id_status' => 'status']);
    }
}
