<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetailTrans;

/**
 * DetailTransSearch represents the model behind the search form about `app\models\DetailTrans`.
 */
class DetailTransSearch extends DetailTrans
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_trans', 'id_imei', 'status', 'stat_email1', 'stat_email2'], 'integer'],
            [['name', 'address', 'phone', 'email', 'path_src', 'path_web', 'created_at'], 'safe'],
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
        $query = DetailTrans::find();

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
            'id_trans' => $this->id_trans,
            'id_imei' => $this->id_imei,
            'status' => $this->status,
            'stat_email1' => $this->stat_email1,
            'stat_email2' => $this->stat_email2,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'path_src', $this->path_src])
            ->andFilterWhere(['like', 'path_web', $this->path_web]);

        return $dataProvider;
    }
}
