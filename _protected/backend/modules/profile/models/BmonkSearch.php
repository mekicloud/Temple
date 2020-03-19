<?php

namespace backend\modules\profile\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\profile\models\Bmonk;

/**
 * BmonkSearch represents the model behind the search form of `backend\modules\profile\models\Bmonk`.
 */
class BmonkSearch extends Bmonk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'profile_id', 'bm_ordinate_age'], 'integer'],
            [['bm_name', 'bm_aka', 'mank_preceptor', 'bm_ordinate_date', 'guild', 'guild_sub_district', 'guild_district', 'guild_province', 'bm_create'], 'safe'],
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
        $query = Bmonk::find();

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
            'profile_id' => $this->profile_id,
            'bm_ordinate_age' => $this->bm_ordinate_age,
            'bm_ordinate_date' => $this->bm_ordinate_date,
            'bm_create' => $this->bm_create,
        ]);

        $query->andFilterWhere(['like', 'bm_name', $this->bm_name])
            ->andFilterWhere(['like', 'bm_aka', $this->bm_aka])
            ->andFilterWhere(['like', 'mank_preceptor', $this->mank_preceptor])
            ->andFilterWhere(['like', 'guild', $this->guild])
            ->andFilterWhere(['like', 'guild_sub_district', $this->guild_sub_district])
            ->andFilterWhere(['like', 'guild_district', $this->guild_district])
            ->andFilterWhere(['like', 'guild_province', $this->guild_province]);

        return $dataProvider;
    }
}
