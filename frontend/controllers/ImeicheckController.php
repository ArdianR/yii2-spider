<?php

namespace frontend\controllers;

use Yii;

use yii\filters\AccessControl;
use yii\web\Controller;
use app\models\CheckForm;
use yii\web\Respons;
use yii\web\Session;
/**
 * PhotoUploadController implements the CRUD actions for PhotoUpload model.
 */
class ImeicheckController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionCheck()
    {
        $model = new CheckForm();
        //$modeltrans = new detailtrans();
        $session = Yii::$app->session;
        $session->open();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $post = Yii::$app->request->post('CheckForm');
            $imeicheck = $post['imeicheck'];
            $session['imei'] = $imeicheck;
            //var_dump($imeicheck);exit();
            $checking = (new \yii\db\Query())
                        ->select(['id_imei'])
                        ->from('imei')
                        ->where(['imei1' => $imeicheck])
                        ->andwhere(['sold' => 1])
                        ->all();

            $imeiattemp = (new \yii\db\Query())
                            ->select(['*'])
                            ->from('detail_trans')
                            ->where(['id_imei' => $checking[0]['id_imei']])
                            ->all();

            $checkware = (new\yii\db\Query())
                        ->select(['id_imei'])
                        ->from('imei')
                        ->where(['imei1' => $imeicheck])
                        ->andwhere(['warehouse' => 1])
                        ->all();
            
            //print_r($checking[0]['id_imei']);exit();
            if(count($checking) == 1){
                
                if (count($imeiattemp) == 1) {
                    Yii::$app->session->setFlash('flashMessage', 'Maaf, IMEI yang kamu masukan sudah terpakai !');
                    return $this->render('check', [
                        'model' => $model,
                    ]);
                }else{
                    $idimei = $checking[0]['id_imei'];
                    $session['idimei'] = $idimei;
                    return $this->redirect(array('detailtrans/create/'));
                }
            }elseif (count($checkware) == 1){
                 Yii::$app->session->setFlash('flashMessage', 'Maaf, IMEI yang kamu masukan tidak terdaftar sebagai OPPO F3 yang terjual. Silakan coba lagi dalam 2x24 Jam');
                return $this->render('check', [
                'model' => $model,
            ]);
            }
            else{
                Yii::$app->session->setFlash('flashMessage', 'Maaf, IMEI yang kamu masukan tidak terdaftar.');
                return $this->render('check', [
                'model' => $model,
            ]);
            }
        } else {
            //Yii::$app->session->setFlash('flashMessage', 'Imei yang anda masukkan tidak terdaftar!');
            return $this->render('check', [
                'model' => $model,
            ]);
        }
    }
}