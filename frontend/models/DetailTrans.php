<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use app\models\CustomerDetail;

Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/../uploads/';
Yii::$app->params['uploadUrl'] = Yii::$app->urlManager->baseUrl . '/../uploads/';

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
    public $image;
    public $name;
    public $email;
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
            [['path_src', 'path_web'], 'file', 'extensions'=>'jpg, gif, png'],
            [['path_src', 'path_web'], 'file', 'maxSize'=>'100000'],
            [['path_src', 'path_web'], 'string', 'max' => 255],
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LdCWCYUAAAAAC-eKYzWNGhq5kDDH0GFfDN3IGMw'],
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
            'reCaptcha' => '',
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
                    'email' => $this->email,
                    'name'  => $this->name,
                    'supportEmail' => $supportEmail,
                ]
            )
            ->setFrom([$supportEmail => Yii::$app->params['siteName']])
            ->setTo($this->email)
            //->setSubject('Than you for wrote review on ' . Yii::$app->params['siteName'])
            ->setSubject('Terimakasih atas partisipasinya!')
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

    public function getImageFile() 
    {
        return isset($this->path_web) ? Yii::$app->params['uploadPath'] . $this->path_web : null;
    }

    public function getImageUrl() 
    {
        // return a default image placeholder if your source avatar is not found
        $avatar = isset($this->path_web) ? $this->path_web : 'default_user.jpg';
        return Yii::$app->params['uploadUrl'] . $avatar;
    }

    public function uploadImage() {
        // get the uploaded file instance. for multiple file uploads
        // the following data will return an array (you may need to use
        // getInstances method)
        $image = UploadedFile::getInstance($this, 'image');

        // if no image was uploaded abort the upload
        if (empty($image)) {
            return false;
        }

        // store the source file name
        $this->path_src = $image->name;
        $ext = end((explode(".", $image->name)));

        // generate a unique file name
        $this->path_web = Yii::$app->security->generateRandomString().".{$ext}";

        // the uploaded image instance
        return $image;
    }
    public function deleteImage() {
        $file = $this->getImageFile();

        // check if file exists on server
        if (empty($file) || !file_exists($file)) {
            return false;
        }

        // check if uploaded file can be deleted on server
        if (!unlink($file)) {
            return false;
        }

        // if deletion successful, reset your file attributes
        $this->path_web = null;
        $this->path_src = null;

        return true;
    }
}
