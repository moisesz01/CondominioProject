<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apartamento".
 *
 * @property integer $id
 * @property string $APA_NOMBRE
 * @property string $APA_DESCRIPCION
 * @property integer $piso_PIS_id
 * @property integer $user_id
 *
 * @property Piso $pisoPIS
 * @property User $user
 */
class Apartamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'apartamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['APA_NOMBRE', 'user_id'], 'required'],
            [['piso_PIS_id', 'user_id'], 'integer'],
            [['APA_NOMBRE'], 'string', 'max' => 45],
            [['APA_DESCRIPCION'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'APA_NOMBRE' => 'Nombre del Apartamento',
            'APA_DESCRIPCION' => 'Descripción del Apartamento',
            'piso_PIS_id' => 'Piso  Pis ID',
            'user_id' => 'Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPisoPIS()
    {
        return $this->hasOne(Piso::className(), ['id' => 'piso_PIS_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
