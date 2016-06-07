<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ModoPago;

/**
 * ModoPagoSearch represents the model behind the search form about `app\models\ModoPago`.
 */
class ModoPagoSearch extends ModoPago
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MPA_id'], 'integer'],
            [['MPA_descripcion'], 'safe'],
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
        $query = ModoPago::find();

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
            'MPA_id' => $this->MPA_id,
        ]);

        $query->andFilterWhere(['like', 'MPA_descripcion', $this->MPA_descripcion]);

        return $dataProvider;
    }
}
