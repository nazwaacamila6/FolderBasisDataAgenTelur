<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pemasokan;

/**
 * PemasokanSearch represents the model behind the search form of `app\models\pemasokan`.
 */
class PemasokanSearch extends pemasokan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pemasokan', 'id_Supplier', 'id_Telur', 'Jumlah_pasok'], 'integer'],
            [['Tanggal_dipasok'], 'safe'],
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
        $query = pemasokan::find();

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
            'id_Pemasokan' => $this->id_Pemasokan,
            'id_Supplier' => $this->id_Supplier,
            'id_Telur' => $this->id_Telur,
            'Tanggal_dipasok' => $this->Tanggal_dipasok,
            'Jumlah_pasok' => $this->Jumlah_pasok,
        ]);

        return $dataProvider;
    }
}
