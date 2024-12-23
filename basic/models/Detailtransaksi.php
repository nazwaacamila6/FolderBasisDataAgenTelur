<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detailtransaksi".
 *
 * @property int $id_Detailtransaksi
 * @property int|null $id_Transaksi
 * @property int|null $Jumlahpemtelur
 *
 * @property Transaksi $transaksi
 */
class Detailtransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detailtransaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Detailtransaksi'], 'required'],
            [['id_Detailtransaksi', 'id_Transaksi', 'Jumlahpemtelur'], 'integer'],
            [['id_Detailtransaksi'], 'unique'],
            [['id_Transaksi'], 'exist', 'skipOnError' => true, 'targetClass' => Transaksi::className(), 'targetAttribute' => ['id_Transaksi' => 'id_Transaksi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Detailtransaksi' => 'Id Detailtransaksi',
            'id_Transaksi' => 'Id Transaksi',
            'Jumlahpemtelur' => 'Jumlahpemtelur',
        ];
    }

    /**
     * Gets query for [[Transaksi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(Transaksi::className(), ['id_Transaksi' => 'id_Transaksi']);
    }
}
