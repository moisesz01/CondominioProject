<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Edificio;

/**
 * EdificioSearch represents the model behind the search form about `app\models\Edificio`.
 */
class EdificioSearch extends Edificio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EDI_id'], 'integer'],
            [['EDI_nombre', 'EDI_descripcion'], 'safe'],
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
        $query = Edificio::find();

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
            'EDI_id' => $this->EDI_id,
        ]);

        $query->andFilterWhere(['like', 'EDI_nombre', $this->EDI_nombre])
            ->andFilterWhere(['like', 'EDI_descripcion', $this->EDI_descripcion]);

        return $dataProvider;
    }
}
