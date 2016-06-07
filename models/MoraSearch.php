<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mora;

/**
 * MoraSearch represents the model behind the search form about `app\models\Mora`.
 */
class MoraSearch extends Mora
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['MOR_id', 'cliente_CLI_cedula', 'penalizacion_PEN_id'], 'integer'],
            [['MOR_mes', 'MOR_numdias'], 'safe'],
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
        $query = Mora::find();

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
            'MOR_id' => $this->MOR_id,
            'MOR_mes' => $this->MOR_mes,
            'cliente_CLI_cedula' => $this->cliente_CLI_cedula,
            'penalizacion_PEN_id' => $this->penalizacion_PEN_id,
        ]);

        $query->andFilterWhere(['like', 'MOR_numdias', $this->MOR_numdias]);

        return $dataProvider;
    }
}
