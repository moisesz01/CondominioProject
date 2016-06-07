<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagoExtraordinario".
 *
 * @property integer $PEX_id
 * @property string $PEX_nombre
 * @property string $PEX_descripcion
 * @property string $PEX_fecha
 *
 * @property DetalleFactura[] $detalleFacturas
 */
class PagoExtraordinario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagoExtraordinario';
    }

   
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEX_nombre', 'PEX_fecha'], 'required'],
            [['PEX_fecha'], 'safe'],
            [['PEX_nombre'], 'string', 'max' => 45],
            [['PEX_descripcion'], 'string', 'max' => 140],
            [['PEX_costo'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PEX_id' => 'ID',
            'PEX_nombre' => 'Nombre',
            'PEX_descripcion' => 'Descripcion',
            'PEX_fecha' => 'Mes a Acreditar Gasto',
            'PEX_costo' => 'Costo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleFacturas()
    {
        return $this->hasMany(DetalleFactura::className(), ['pagoExtraordinario_PEX_id' => 'PEX_id']);
    }
}
