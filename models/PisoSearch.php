<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Piso;

/**
 * PisoSearch represents the model behind the search form about `app\models\Piso`.
 */
class PisoSearch extends Piso
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'edificio_EDI_id'], 'integer'],
            [['PIS_nombre', 'PIS_descripcion'], 'safe'],
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
        $query = Piso::find();

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
            'edificio_EDI_id' => $this->edificio_EDI_id,
        ]);

        $query->andFilterWhere(['like', 'PIS_nombre', $this->PIS_nombre])
            ->andFilterWhere(['like', 'PIS_descripcion', $this->PIS_descripcion]);

        return $dataProvider;
    }
}
