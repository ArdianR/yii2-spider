<?php

namespace frontend\controllers;

use Yii;
use app\models\DetailTrans;
use app\models\DetailTransSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
use yii\web\Session;
use yii\helpers\BaseStringHelper;
use yii\helpers\StringHelper;

/**
 * DetailtransController implements the CRUD actions for DetailTrans model.
 */
class DetailtransController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all DetailTrans models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetailTransSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailTrans model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new DetailTrans model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DetailTrans();
        $session = Yii::$app->session;
        $session->open();
        if ($model->load(Yii::$app->request->post())) {
            
            $post = Yii::$app->request->post('DetailTrans');
            $phone = $post['phone'];
            $session['name'] = $post['name'];
            $session['email'] = $post['email'];
            $session['address'] = $post['address'];
            $session['phone'] = $post['phone'];
            $with = '08';
            $phone_check = StringHelper::startsWith($phone, $with, $caseSensitive = true);
            if($phone_check == true){
                //Check sudah input imei atau belum!
                if($session['idimei'] == ''){
                    Yii::$app->session->setFlash('flashMessage', 'Anda belum memasukkan imei di halaman sebelumnya!');
                        return $this->render('create', [
                            'model' => $model,
                        ]);
                }else{
                    //Check Imei sudah dipakai atau belum!
                    $imeiattemp = (new \yii\db\Query())
                            ->select(['*'])
                            ->from('detail_trans')
                            ->where(['id_imei' => $session['idimei']])
                            ->orwhere(['phone' => $phone])
                            ->all();

                    if(count($imeiattemp) == 1 ){
                        Yii::$app->session->setFlash('flashMessage', 'Maaf, IMEI yang kamu masukan sudah terpakai');
                        return $this->render('create', [
                            'model' => $model,
                        ]);
                    }else{
                        //save
                        $image = $model->uploadImage();
                        //var_dump($model);exit();
                        $model->save();

                        //Save Photo
                        if ($image !== false) {
                                $path = $model->getImageFile();
                                $image->saveAs($path);
                            }else{
                                Yii::$app->session->setFlash('flashMessage', 'Maaf foto anda tidak tersimpan, silahkan ulangi kembali!');
                                return $this->render('create', [
                                    'model' => $model,
                                ]);
                            }

                        //Send Email
                        /*Yii::$app->mailer->compose()
                            ->setFrom('suhendrii@outlook.com')
                            ->setTo($model->email)
                            ->setSubject($model->subject)
                            ->setHtmlBody($model->body)
                            ->send();*/
                        //    Yii::getAlias('@app/web/mail/images/logo.png');
                        /*Yii::$app->mailer->compose('layouts/html.php', [
                            'imageFileName' => Yii::getAlias('@app/mail/layouts/clickme/images/logo.png'),
                            'facebook' => Yii::getAlias('@app/mail/layouts/clickme/images/facebook.png'),
                            'twitter' => Yii::getAlias('@app/mail/layouts/clickme/images/twitter.png'),
                            'pinterest' => Yii::getAlias('@app/mail/layouts/clickme/images/pinterest.png')
                            ]) // a view rendering result becomes the message body here*/
							if ($model->sendEmail(Yii::$app->params['supportEmail'])) {
								Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
							} else {
								Yii::$app->session->setFlash('error', 'There was an error sending your message.');
							}
                        /*->setFrom('suhendrii@outlook.com')
                        ->setTo($model->email)
                        ->setSubject('Message Test 3')
                        ->send();*/

                        //Update status email
                        $connection = Yii::$app->db;
                        $connection->createCommand()->update('detail_trans', ['stat_email1' => 1], 'phone ='.$phone)->execute();

                        //Finish
                        Yii::$app->session->setFlash('flashMessage', 'Sukses, data anda benar!');
                        return $this->redirect('thank');
                    }
                }
            }else{
                Yii::$app->session->setFlash('flashMessage', 'Format nomer salah. Contoh 08xxxxxxxx');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            
        } else {
            //Yii::$app->session->setFlash('flashMessage', 'Tidak ada data yang anda masukkan!');
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DetailTrans model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldFile = $model->getImageFile();
        $oldAvatar = $model->avatar;
        $oldFileName = $model->path_src;

        if ($model->load(Yii::$app->request->post())) {
            // process uploaded image file instance
            $image = $model->uploadImage();

            // revert back if no valid file instance uploaded
            if ($image === false) {
                $model->avatar = $oldAvatar;
                $model->path_src = $oldFileName;
            }elseif($image !== false && unlink($oldFile)){ // delete old and overwrite
                $model->save();
                $path = $model->getImageFile();
                $image->saveAs($path);
                return $this->redirect(['view', 'id'=>$model->id_trans]);
            }
        }
        return $this->render('update', [
            'model'=>$model,
        ]);
    }

    /**
     * Deletes an existing DetailTrans model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        //$this->findModel($id)->delete();

        //return $this->redirect(['index']);

        $model = $this->findModel($id);

        // validate deletion and on failure process any exception 
        // e.g. display an error message 
        if ($model->delete()) {
            if (!$model->deleteImage()) {
                Yii::$app->session->setFlash('error', 'Error deleting image');
            }
        }
        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailTrans model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return DetailTrans the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = DetailTrans::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
