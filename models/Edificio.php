<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "edificio".
 *
 * @property integer $EDI_id
 * @property string $EDI_nombre
 * @property string $EDI_descripcion
 *
 * @property Piso[] $pisos
 */
class Edificio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'edificio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EDI_nombre'], 'required'],
            [['EDI_nombre'], 'string', 'max' => 45],
            [['EDI_descripcion'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EDI_id' => 'ID',
            'EDI_nombre' => 'Nombre del Edificio',
            'EDI_descripcion' => 'Descripción del Edificio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPisos()
    {
        return $this->hasMany(Piso::className(), ['edificio_EDI_id' => 'EDI_id']);
    }
}
