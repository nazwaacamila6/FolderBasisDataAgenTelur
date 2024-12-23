<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pemasokan".
 *
 * @property int $id_Pemasokan
 * @property int|null $id_Supplier
 * @property int|null $id_Telur
 * @property string|null $Tanggal_dipasok
 * @property int|null $Jumlah_pasok
 *
 * @property Supplier $supplier
 * @property Telur $telur
 */
class Pemasokan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pemasokan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Pemasokan'], 'required'],
            [['id_Pemasokan', 'id_Supplier', 'id_Telur', 'Jumlah_pasok'], 'integer'],
            [['Tanggal_dipasok'], 'safe'],
            [['id_Pemasokan'], 'unique'],
            [['id_Supplier'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['id_Supplier' => 'id_Supplier']],
            [['id_Telur'], 'exist', 'skipOnError' => true, 'targetClass' => Telur::className(), 'targetAttribute' => ['id_Telur' => 'id_Telur']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Pemasokan' => 'Id Pemasokan',
            'id_Supplier' => 'Id Supplier',
            'id_Telur' => 'Id Telur',
            'Tanggal_dipasok' => 'Tanggal Dipasok',
            'Jumlah_pasok' => 'Jumlah Pasok',
        ];
    }

    /**
     * Gets query for [[Supplier]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id_Supplier' => 'id_Supplier']);
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
}
