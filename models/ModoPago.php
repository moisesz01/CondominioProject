<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modoPAgo".
 *
 * @property integer $MPA_id
 * @property string $MPA_descripcion
 *
 * @property Factura[] $facturas
 */
class ModoPago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modoPAgo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MPA_descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MPA_id' => 'Mpa ID',
            'MPA_descripcion' => 'Mpa Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFacturas()
    {
        return $this->hasMany(Factura::className(), ['modoPAgo_MPA_id' => 'MPA_id']);
    }
}
