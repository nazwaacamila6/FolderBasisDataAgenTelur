<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\pengguna;

/**
 * PenggunaSearch represents the model behind the search form of `app\models\pengguna`.
 */
class PenggunaSearch extends pengguna
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pengguna', 'id_Jabatan'], 'integer'],
            [['Nama_pengguna', 'Alamat', 'No_telepon_pengguna'], 'safe'],
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
        $query = pengguna::find();

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
            'id_Pengguna' => $this->id_Pengguna,
            'id_Jabatan' => $this->id_Jabatan,
        ]);

        $query->andFilterWhere(['like', 'Nama_pengguna', $this->Nama_pengguna])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'No_telepon_pengguna', $this->No_telepon_pengguna]);

        return $dataProvider;
    }
}
