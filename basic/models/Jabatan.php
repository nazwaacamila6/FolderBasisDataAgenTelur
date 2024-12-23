<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property int $id_Jabatan
 * @property string|null $Jabatan
 *
 * @property Pengguna[] $penggunas
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_Jabatan'], 'required'],
            [['id_Jabatan'], 'integer'],
            [['Jabatan'], 'string', 'max' => 20],
            [['id_Jabatan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_Jabatan' => 'Id Jabatan',
            'Jabatan' => 'Jabatan',
        ];
    }

    /**
     * Gets query for [[Penggunas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPenggunas()
    {
        return $this->hasMany(Pengguna::className(), ['id_Jabatan' => 'id_Jabatan']);
    }
}
