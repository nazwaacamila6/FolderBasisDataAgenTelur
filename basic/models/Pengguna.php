<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengguna".
 *
 * @property int $id_Pengguna
 * @property int|null $id_Jabatan
 * @property string|null $Nama_pengguna
 * @property string|null $Alamat
 * @property string|null $No_telepon_pengguna
 *
 * @property Jabatan $jabatan
 * @property Transaksi[] $transaksis
 */
class Pengguna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengguna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pengguna'], 'required'],
            [['id_Pengguna', 'id_Jabatan'], 'integer'],
            [['Nama_pengguna', 'Alamat'], 'string', 'max' => 50],
            [['No_telepon_pengguna'], 'string', 'max' => 45],
            [['id_Pengguna'], 'unique'],
            [['id_Jabatan'], 'exist', 'skipOnError' => true, 'targetClass' => Jabatan::className(), 'targetAttribute' => ['id_Jabatan' => 'id_Jabatan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Pengguna' => 'Id Pengguna',
            'id_Jabatan' => 'Id Jabatan',
            'Nama_pengguna' => 'Nama Pengguna',
            'Alamat' => 'Alamat',
            'No_telepon_pengguna' => 'No Telepon Pengguna',
        ];
    }

    /**
     * Gets query for [[Jabatan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJabatan()
    {
        return $this->hasOne(Jabatan::className(), ['id_Jabatan' => 'id_Jabatan']);
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::className(), ['id_Pengguna' => 'id_Pengguna']);
    }
}
