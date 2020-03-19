<?php

namespace backend\modules\profile\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\profile\models\Profile;

/**
 * ProfileSearch represents the model behind the search form of `backend\modules\profile\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['id_card', 'id_netbook', 'name', 'surname', 'education', 'career', 'race', 'nationality', 'body', 'skintone', 'scar', 'father', 'mother', 'birthdate_th', 'seiya', 'birthdate', 'sub_distric', 'distric', 'province', 'clane', 'temple'], 'safe'],
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
        $query = Profile::find();

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
            'birthdate_th' => $this->birthdate_th,
            'birthdate' => $this->birthdate,
        ]);

        $query->andFilterWhere(['like', 'id_card', $this->id_card])
            ->andFilterWhere(['like', 'id_netbook', $this->id_netbook])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'career', $this->career])
            ->andFilterWhere(['like', 'race', $this->race])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'skintone', $this->skintone])
            ->andFilterWhere(['like', 'scar', $this->scar])
            ->andFilterWhere(['like', 'father', $this->father])
            ->andFilterWhere(['like', 'mother', $this->mother])
            ->andFilterWhere(['like', 'seiya', $this->seiya])
            ->andFilterWhere(['like', 'sub_distric', $this->sub_distric])
            ->andFilterWhere(['like', 'distric', $this->distric])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'clane', $this->clane])
            ->andFilterWhere(['like', 'temple', $this->temple]);

        return $dataProvider;
    }
}
