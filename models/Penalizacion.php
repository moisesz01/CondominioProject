<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penalizacion".
 *
 * @property integer $PEN_id
 * @property string $PEN_nombre
 * @property string $PEN_descripcion
 * @property double $PEN_costo
 *
 * @property Mora[] $moras
 */
class Penalizacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penalizacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEN_nombre', 'PEN_costo'], 'required'],
            [['PEN_costo'], 'number'],
            [['PEN_nombre'], 'string', 'max' => 45],
            [['PEN_descripcion'], 'string', 'max' => 140]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PEN_id' => 'ID',
            'PEN_nombre' => 'Nombre',
            'PEN_descripcion' => 'Descripcion',
            'PEN_costo' => 'Costo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMoras()
    {
        return $this->hasMany(Mora::className(), ['penalizacion_PEN_id' => 'PEN_id']);
    }
}
