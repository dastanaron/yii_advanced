<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Slids;

/**
 * SlidsSearch represents the model behind the search form about `backend\models\Slids`.
 */
class SlidsSearch extends Slids
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'price'], 'integer'],
            [['img_src', 'title', 'link', 'valute', 'text_on_button', 'img_left', 'img_top', 'timestamp'], 'safe'],
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
        $query = Slids::find();

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
            'id' => $this->id,
            'price' => $this->price,
            'timestamp' => $this->timestamp,
        ]);

        $query->andFilterWhere(['like', 'img_src', $this->img_src])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'valute', $this->valute])
            ->andFilterWhere(['like', 'text_on_button', $this->text_on_button])
            ->andFilterWhere(['like', 'img_left', $this->img_left])
            ->andFilterWhere(['like', 'img_top', $this->img_top]);

        return $dataProvider;
    }
}
