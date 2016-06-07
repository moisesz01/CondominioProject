<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "factura".
 *
 * @property integer $FAC_id
 * @property string $FAC_numero de pago
 * @property integer $modoPAgo_MPA_id
 * @property integer $user_id
 *
 * @property DetalleFactura[] $detalleFacturas
 * @property ModoPAgo $modoPAgoMPA
 * @property User $user
 */
class Factura extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'factura';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modoPAgo_MPA_id', 'user_id'], 'required'],
            [['modoPAgo_MPA_id', 'user_id'], 'integer'],
            [['FAC_numero de pago'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FAC_id' => 'Fac ID',
            'FAC_numero de pago' => 'Fac Numero De Pago',
            'modoPAgo_MPA_id' => 'Modo Pago  Mpa ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetalleFacturas()
    {
        return $this->hasMany(DetalleFactura::className(), ['factura_FAC_id' => 'FAC_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModoPAgoMPA()
    {
        return $this->hasOne(ModoPAgo::className(), ['MPA_id' => 'modoPAgo_MPA_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
