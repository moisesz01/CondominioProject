<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PagoExtraordinario;

/**
 * PagoExtraordinarioSearch represents the model behind the search form about `app\models\PagoExtraordinario`.
 */
class PagoExtraordinarioSearch extends PagoExtraordinario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEX_id'], 'integer'],
            [['PEX_nombre', 'PEX_descripcion', 'PEX_fecha'], 'safe'],
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
        $query = PagoExtraordinario::find();

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
            'PEX_id' => $this->PEX_id,
            'PEX_fecha' => $this->PEX_fecha,
        ]);

        $query->andFilterWhere(['like', 'PEX_nombre', $this->PEX_nombre])
            ->andFilterWhere(['like', 'PEX_descripcion', $this->PEX_descripcion]);

        return $dataProvider;
    }
}
