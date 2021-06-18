<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Trucking;

/**
 * TruckingSearch represents the model behind the search form of `app\models\Trucking`.
 */
class TruckingSearch extends Trucking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idtruking', 'idclient', 'iddriver', 'idmanager', 'idcargo', 'idroute', 'idtruck', 'discount', 'price'], 'integer'],
            [['payment_date', 'date_trucking'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Trucking::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'idtruking' => $this->idtruking,
            'idclient' => $this->idclient,
            'iddriver' => $this->iddriver,
            'idmanager' => $this->idmanager,
            'idcargo' => $this->idcargo,
            'idroute' => $this->idroute,
            'idtruck' => $this->idtruck,
            'payment_date' => $this->payment_date,
            'date_trucking' => $this->date_trucking,
            'discount' => $this->discount,
            'price' => $this->price,
        ]);

        return $dataProvider;
    }
}
