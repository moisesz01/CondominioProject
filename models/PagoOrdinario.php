<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pagoOrdinario".
 *
 * @property integer $PSA_id
 * @property string $PSA_nombre
 * @property string $PSA_descripcion
 * @property double $PSA_costo
 *
 * @property DetalleFactura[] $detalleFacturas
 */
class PagoOrdinario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pagoOrdinario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PSA_nombre', 'PSA_costo'], 'required'],
            [['PSA_costo'], 'number'],
            [['PSA_nombre'], 'string', 'max' => 45],
            [['PSA_descripcion'], 'string', 'max' => 140]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PSA_id' => 'ID',
            'PSA_nombre' => 'Nombre',
            'PSA_descripcion' => 'Descripción',
            'PSA_costo' => 'Costo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleFacturas()
    {
        return $this->hasMany(DetalleFactura::className(), ['pagoOrdinario_PSA_id' => 'PSA_id']);
    }
}
