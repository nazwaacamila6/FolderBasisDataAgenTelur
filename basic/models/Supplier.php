<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id_Supplier
 * @property string|null $Nama_supplier
 * @property int|null $No_telepon
 * @property string|null $Alamat
 *
 * @property Pemasokan[] $pemasokans
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Supplier'], 'required'],
            [['id_Supplier', 'No_telepon'], 'integer'],
            [['Nama_supplier'], 'string', 'max' => 30],
            [['Alamat'], 'string', 'max' => 50],
            [['id_Supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Supplier' => 'Id Supplier',
            'Nama_supplier' => 'Nama Supplier',
            'No_telepon' => 'No Telepon',
            'Alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[Pemasokans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPemasokans()
    {
        return $this->hasMany(Pemasokan::className(), ['id_Supplier' => 'id_Supplier']);
    }
}
