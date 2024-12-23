<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\detailtransaksi;

/**
 * DetailtransaksiSearch represents the model behind the search form of `app\models\detailtransaksi`.
 */
class DetailtransaksiSearch extends detailtransaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Detailtransaksi', 'id_Transaksi', 'Jumlahpemtelur'], 'integer'],
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
        $query = detailtransaksi::find();

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
            'id_Detailtransaksi' => $this->id_Detailtransaksi,
            'id_Transaksi' => $this->id_Transaksi,
            'Jumlahpemtelur' => $this->Jumlahpemtelur,
        ]);

        return $dataProvider;
    }
}
