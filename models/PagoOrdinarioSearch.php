<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PagoOrdinario;

/**
 * PagoOrdinarioSearch represents the model behind the search form about `app\models\PagoOrdinario`.
 */
class PagoOrdinarioSearch extends PagoOrdinario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PSA_id'], 'integer'],
            [['PSA_nombre', 'PSA_descripcion'], 'safe'],
            [['PSA_costo'], 'number'],
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
        $query = PagoOrdinario::find();

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
            'PSA_id' => $this->PSA_id,
            'PSA_costo' => $this->PSA_costo,
        ]);

        $query->andFilterWhere(['like', 'PSA_nombre', $this->PSA_nombre])
            ->andFilterWhere(['like', 'PSA_descripcion', $this->PSA_descripcion]);

        return $dataProvider;
    }
}
