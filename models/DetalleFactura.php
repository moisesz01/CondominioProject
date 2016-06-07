<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detalleFactura".
 *
 * @property integer $DFAC_id
 * @property string $DFAC
 * @property integer $factura_FAC_id
 * @property integer $pagoOrdinario_PSA_id
 * @property integer $pagoExtraordinario_PEX_id
 *
 * @property Factura $facturaFAC
 * @property PagoExtraordinario $pagoExtraordinarioPEX
 * @property PagoOrdinario $pagoOrdinarioPSA
 */
class DetalleFactura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detalleFactura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['factura_FAC_id', 'pagoOrdinario_PSA_id', 'pagoExtraordinario_PEX_id'], 'required'],
            [['factura_FAC_id', 'pagoOrdinario_PSA_id', 'pagoExtraordinario_PEX_id'], 'integer'],
            [['DFAC'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DFAC_id' => 'Dfac ID',
            'DFAC' => 'Dfac',
            'factura_FAC_id' => 'Factura  Fac ID',
            'pagoOrdinario_PSA_id' => 'Pago Ordinario  Psa ID',
            'pagoExtraordinario_PEX_id' => 'Pago Extraordinario  Pex ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturaFAC()
    {
        return $this->hasOne(Factura::className(), ['FAC_id' => 'factura_FAC_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagoExtraordinarioPEX()
    {
        return $this->hasOne(PagoExtraordinario::className(), ['PEX_id' => 'pagoExtraordinario_PEX_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPagoOrdinarioPSA()
    {
        return $this->hasOne(PagoOrdinario::className(), ['PSA_id' => 'pagoOrdinario_PSA_id']);
    }
}
