<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\supplier;

/**
 * SupplierSearch represents the model behind the search form of `app\models\supplier`.
 */
class SupplierSearch extends supplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Supplier', 'No_telepon'], 'integer'],
            [['Nama_supplier', 'Alamat'], 'safe'],
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
        $query = supplier::find();

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
            'id_Supplier' => $this->id_Supplier,
            'No_telepon' => $this->No_telepon,
        ]);

        $query->andFilterWhere(['like', 'Nama_supplier', $this->Nama_supplier])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat]);

        return $dataProvider;
    }
}
