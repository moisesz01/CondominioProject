<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Apartamento;

/**
 * ApartamentoSearch represents the model behind the search form about `app\models\Apartamento`.
 */
class ApartamentoSearch extends Apartamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'piso_PIS_id', 'user_id'], 'integer'],
            [['APA_NOMBRE', 'APA_DESCRIPCION'], 'safe'],
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
        $query = Apartamento::find();

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
            'id' => $this->id,
            'piso_PIS_id' => $this->piso_PIS_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'APA_NOMBRE', $this->APA_NOMBRE])
            ->andFilterWhere(['like', 'APA_DESCRIPCION', $this->APA_DESCRIPCION]);

        return $dataProvider;
    }
}
