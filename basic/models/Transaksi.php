<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_Transaksi
 * @property int|null $id_Telur
 * @property int|null $id_Pengguna
 * @property int|null $id_Pelanggan
 * @property int|null $Jumlah_transaksi
 * @property string|null $Tanggal_transaksi
 *
 * @property Telur $telur
 * @property Pengguna $pengguna
 * @property Pelanggan $pelanggan
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Transaksi'], 'required'],
            [['id_Transaksi', 'id_Telur', 'id_Pengguna', 'id_Pelanggan', 'Jumlah_transaksi'], 'integer'],
            [['Tanggal_transaksi'], 'safe'],
            [['id_Transaksi'], 'unique'],
            [['id_Telur'], 'exist', 'skipOnError' => true, 'targetClass' => Telur::className(), 'targetAttribute' => ['id_Telur' => 'id_Telur']],
            [['id_Pengguna'], 'exist', 'skipOnError' => true, 'targetClass' => Pengguna::className(), 'targetAttribute' => ['id_Pengguna' => 'id_Pengguna']],
            [['id_Pelanggan'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['id_Pelanggan' => 'id_Pelanggan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Transaksi' => 'Id Transaksi',
            'id_Telur' => 'Id Telur',
            'id_Pengguna' => 'Id Pengguna',
            'id_Pelanggan' => 'Id Pelanggan',
            'Jumlah_transaksi' => 'Jumlah Transaksi',
            'Tanggal_transaksi' => 'Tanggal Transaksi',
        ];
    }

    /**
     * Gets query for [[Telur]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTelur()
    {
        return $this->hasOne(Telur::className(), ['id_Telur' => 'id_Telur']);
    }

    /**
     * Gets query for [[Pengguna]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPengguna()
    {
        return $this->hasOne(Pengguna::className(), ['id_Pengguna' => 'id_Pengguna']);
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['id_Pelanggan' => 'id_Pelanggan']);
    }
}
