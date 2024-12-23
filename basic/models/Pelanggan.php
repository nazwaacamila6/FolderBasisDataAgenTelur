<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id_Pelanggan
 * @property string|null $Nama
 * @property string|null $Alamat
 * @property int|null $No_telepon
 *
 * @property Transaksi[] $transaksis
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pelanggan'], 'required'],
            [['id_Pelanggan', 'No_telepon'], 'integer'],
            [['Nama'], 'string', 'max' => 30],
            [['Alamat'], 'string', 'max' => 50],
            [['id_Pelanggan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Pelanggan' => 'Id Pelanggan',
            'Nama' => 'Nama',
            'Alamat' => 'Alamat',
            'No_telepon' => 'No Telepon',
        ];
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_Pelanggan' => 'id_Pelanggan']);
    }
}
