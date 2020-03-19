<?php

namespace backend\modules\profile\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\profile\models\Monk;

/**
 * MonkSearch represents the model behind the search form of `backend\modules\profile\models\Monk`.
 */
class MonkSearch extends Monk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'profile_id', 'monk_ordinate_age'], 'integer'],
            [['monk_cid', 'monk_aka', 'monk_duo1', 'monk_duo2', 'monk_ordinate_datetime', 'guild', 'guild_sub_district', 'guild_district', 'guild_privince','monk_img', 'monk_create'], 'safe'],
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
        $query = Monk::find();

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
            'monk_ordinate_age' => $this->monk_ordinate_age,
            'monk_ordinate_datetime' => $this->monk_ordinate_datetime,
            'monk_create' => $this->monk_create,
        ]);

        $query->andFilterWhere(['like', 'monk_cid', $this->monk_cid])
            ->andFilterWhere(['like', 'monk_aka', $this->monk_aka])
            ->andFilterWhere(['like', 'monk_duo1', $this->monk_duo1])
            ->andFilterWhere(['like', 'monk_duo2', $this->monk_duo2])
            ->andFilterWhere(['like', 'guild', $this->guild])
            ->andFilterWhere(['like', 'guild_sub_district', $this->guild_sub_district])
            ->andFilterWhere(['like', 'guild_district', $this->guild_district])
            ->andFilterWhere(['like', 'guild_privince', $this->guild_privince]);

        return $dataProvider;
    }
}
