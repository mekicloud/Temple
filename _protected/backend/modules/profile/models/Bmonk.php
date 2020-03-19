<?php

namespace backend\modules\profile\models;

use Yii;

/**
 * This is the model class for table "t_baby_monk".
 *
 * @property int $id
 * @property int|null $profile_id
 * @property string|null $bm_name
 * @property string|null $bm_aka
 * @property string|null $mank_preceptor
 * @property int|null $bm_ordinate_age
 * @property string|null $bm_ordinate_date
 * @property string|null $guild
 * @property string|null $guild_sub_district
 * @property string|null $guild_district
 * @property string|null $guild_province
 * @property string|null $bm_create
 */
class Bmonk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_baby_monk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['profile_id', 'bm_ordinate_age'], 'integer'],
            [['bm_ordinate_date', 'bm_create'], 'safe'],
            [['bm_name', 'bm_aka', 'mank_preceptor', 'guild', 'guild_sub_district', 'guild_district', 'guild_province'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profile_id' => 'Profile ID',
            'bm_name' => 'Bm Name',
            'bm_aka' => 'Bm Aka',
            'mank_preceptor' => 'Mank Preceptor',
            'bm_ordinate_age' => 'Bm Ordinate Age',
            'bm_ordinate_date' => 'Bm Ordinate Date',
            'guild' => 'Guild',
            'guild_sub_district' => 'Guild Sub District',
            'guild_district' => 'Guild District',
            'guild_province' => 'Guild Province',
            'bm_create' => 'Bm Create',
        ];
    }
}
