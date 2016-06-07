<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Factura;

/**
 * FacturaSearch represents the model behind the search form about `app\models\Factura`.
 */
class FacturaSearch extends Factura
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['FAC_id', 'modoPAgo_MPA_id', 'user_id'], 'integer'],
            [['FAC_numero de pago'], 'safe'],
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
        $query = Factura::find();

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
            'FAC_id' => $this->FAC_id,
            'modoPAgo_MPA_id' => $this->modoPAgo_MPA_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'FAC_numero de pago', $this->FAC_numero de pago]);

        return $dataProvider;
    }
}
