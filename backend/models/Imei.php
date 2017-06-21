<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imei".
 *
 * @property integer $id_imei
 * @property string $imei1
 * @property string $imei2
 * @property integer $warehouse
 * @property integer $sold
 *
 * @property DetailTrans[] $detailTrans
 */
class Imei extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'imei';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['imei1'], 'required'],
            [['imei1', 'imei2', 'warehouse', 'sold'], 'integer'],
            [['imei1'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_imei' => 'Id Imei',
            'imei1' => 'Imei1',
            'imei2' => 'Imei2',
            'warehouse' => 'Warehouse',
            'sold' => 'Sold',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTrans()
    {
        return $this->hasMany(DetailTrans::className(), ['id_imei' => 'id_imei']);
    }
	
	//public $imeiCount;
}
