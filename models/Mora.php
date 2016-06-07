<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mora".
 *
 * @property integer $MOR_id
 * @property string $MOR_mes
 * @property string $MOR_numdias
 * @property integer $cliente_CLI_cedula
 * @property integer $penalizacion_PEN_id
 *
 * @property User $clienteCLICedula
 * @property Penalizacion $penalizacionPEN
 */
class Mora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MOR_mes', 'cliente_CLI_cedula', 'penalizacion_PEN_id'], 'required'],
            [['MOR_mes'], 'safe'],
            [['cliente_CLI_cedula', 'penalizacion_PEN_id'], 'integer'],
            [['MOR_numdias'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'MOR_id' => 'Mor ID',
            'MOR_mes' => 'Mor Mes',
            'MOR_numdias' => 'Mor Numdias',
            'cliente_CLI_cedula' => 'Cliente  Cli Cedula',
            'penalizacion_PEN_id' => 'Penalizacion  Pen ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClienteCLICedula()
    {
        return $this->hasOne(User::className(), ['id' => 'cliente_CLI_cedula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenalizacionPEN()
    {
        return $this->hasOne(Penalizacion::className(), ['PEN_id' => 'penalizacion_PEN_id']);
    }
}
