<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "piso".
 *
 * @property integer $id
 * @property string $PIS_nombre
 * @property string $PIS_descripcion
 * @property integer $edificio_EDI_id
 *
 * @property Apartamento[] $apartamentos
 * @property Edificio $edificioEDI
 */
class Piso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'piso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PIS_nombre', 'edificio_EDI_id'], 'required'],
            [['edificio_EDI_id'], 'integer'],
            [['PIS_nombre', 'PIS_descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID del Piso',
            'PIS_nombre' => 'Nombre del Piso',
            'PIS_descripcion' => 'Descripcion del Piso',
            'edificio_EDI_id' => 'Nombre del Edificio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getApartamentos()
    {
        return $this->hasMany(Apartamento::className(), ['piso_PIS_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEdificioEDI()
    {
        return $this->hasOne(Edificio::className(), ['EDI_id' => 'edificio_EDI_id']);
    }
}
