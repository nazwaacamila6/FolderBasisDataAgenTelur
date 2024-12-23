<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "telur".
 *
 * @property int $id_Telur
 * @property string|null $Jenis_telur
 * @property int|null $JumlahTelur
 *
 * @property Transaksi[] $transaksis
 */
class Telur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'telur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Telur'], 'required'],
            [['id_Telur', 'JumlahTelur'], 'integer'],
            [['Jenis_telur'], 'string', 'max' => 20],
            [['id_Telur'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Telur' => 'Id Telur',
            'Jenis_telur' => 'Jenis Telur',
            'JumlahTelur' => 'Jumlah Telur',
        ];
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_Telur' => 'id_Telur']);
    }
}
