<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Imei;

/**
 * ImeiSearch represents the model behind the search form about `app\models\Imei`.
 */
class ImeiSearch extends Imei
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_imei', 'imei1', 'imei2', 'warehouse', 'sold'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Imei::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_imei' => $this->id_imei,
            'imei1' => $this->imei1,
            'imei2' => $this->imei2,
            'warehouse' => $this->warehouse,
            'sold' => $this->sold,
        ]);

        return $dataProvider;
    }
}
