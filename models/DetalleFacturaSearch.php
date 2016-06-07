<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DetalleFactura;

/**
 * DetalleFacturaSearch represents the model behind the search form about `app\models\DetalleFactura`.
 */
class DetalleFacturaSearch extends DetalleFactura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DFAC_id', 'factura_FAC_id', 'pagoOrdinario_PSA_id', 'pagoExtraordinario_PEX_id'], 'integer'],
            [['DFAC'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetalleFactura::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'DFAC_id' => $this->DFAC_id,
            'factura_FAC_id' => $this->factura_FAC_id,
            'pagoOrdinario_PSA_id' => $this->pagoOrdinario_PSA_id,
            'pagoExtraordinario_PEX_id' => $this->pagoExtraordinario_PEX_id,
        ]);

        $query->andFilterWhere(['like', 'DFAC', $this->DFAC]);

        return $dataProvider;
    }
}
