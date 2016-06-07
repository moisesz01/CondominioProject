<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penalizacion;

/**
 * PenalizacionSearch represents the model behind the search form about `app\models\Penalizacion`.
 */
class PenalizacionSearch extends Penalizacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PEN_id'], 'integer'],
            [['PEN_nombre', 'PEN_descripcion'], 'safe'],
            [['PEN_costo'], 'number'],
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
        $query = Penalizacion::find();

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
            'PEN_id' => $this->PEN_id,
            'PEN_costo' => $this->PEN_costo,
        ]);

        $query->andFilterWhere(['like', 'PEN_nombre', $this->PEN_nombre])
            ->andFilterWhere(['like', 'PEN_descripcion', $this->PEN_descripcion]);

        return $dataProvider;
    }
}
