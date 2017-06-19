<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property integer $id_status
 * @property string $nm_status
 *
 * @property DetailTrans[] $detailTrans
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nm_status'], 'required'],
            [['nm_status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'nm_status' => 'Nm Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTrans()
    {
        return $this->hasMany(DetailTrans::className(), ['status' => 'id_status']);
    }
}
