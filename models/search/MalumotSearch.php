<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Malumot;

/**
 * MalumotSearch represents the model behind the search form of `app\models\Malumot`.
 */
class MalumotSearch extends Malumot
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'body_en', 'type_id'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'short_uz', 'short_ru', 'short_en', 'body_uz', 'body_ru', 'image', 'date'], 'safe'],
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
        $query = Malumot::find();

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
            'body_en' => $this->body_en,
            'date' => $this->date,
            'type_id' => $this->type_id,
        ]);

        $query->andFilterWhere(['like', 'title_uz', $this->title_uz])
            ->andFilterWhere(['like', 'title_ru', $this->title_ru])
            ->andFilterWhere(['like', 'title_en', $this->title_en])
            ->andFilterWhere(['like', 'short_uz', $this->short_uz])
            ->andFilterWhere(['like', 'short_ru', $this->short_ru])
            ->andFilterWhere(['like', 'short_en', $this->short_en])
            ->andFilterWhere(['like', 'body_uz', $this->body_uz])
            ->andFilterWhere(['like', 'body_ru', $this->body_ru])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
