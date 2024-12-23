<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\telur;

/**
 * TelurSearch represents the model behind the search form of `app\models\telur`.
 */
class TelurSearch extends telur
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Telur', 'JumlahTelur'], 'integer'],
            [['Jenis_telur'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = telur::find();

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
            'id_Telur' => $this->id_Telur,
            'JumlahTelur' => $this->JumlahTelur,
        ]);

        $query->andFilterWhere(['like', 'Jenis_telur', $this->Jenis_telur]);

        return $dataProvider;
    }
}
