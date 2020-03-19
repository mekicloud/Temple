<?php

namespace backend\modules\profile\models;

use Yii;

/**
 * This is the model class for table "t_monk".
 *
 * @property int $id
 * @property string|null $profile_id เลขที่หนังสือสุทธิ
 * @property string|null $monk_cid เลขบัตรประจำตัวประชาชน
 * @property string|null $monk_aka ฉายา
 * @property string|null $monk_duo1 พระคู่สวด 1
 * @property string|null $monk_duo2 พระคู่สวด 2
 * @property int|null $monk_ordinate_age พรรษา
 * @property string|null $monk_ordinate_datetime วันที่บวช
 * @property string|null $guild วัดที่บวช
 * @property string|null $guild_sub_district ตำบล
 * @property string|null $guild_district อำเภอ
 * @property string|null $guild_privince จังหวัด
 * @property string|null $monk_img
 * @property string|null $monk_create
 */
class Monk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_monk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['monk_ordinate_age'], 'integer'],
            [['monk_ordinate_datetime', 'monk_create'], 'safe'],
            [['profile_id'], 'string', 'max' => 50],
            [['monk_cid'], 'string', 'max' => 13],
            [['monk_aka', 'monk_duo1', 'monk_duo2', 'guild', 'guild_sub_district', 'guild_district', 'guild_privince', 'monk_img'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'profile_id' => 'เลขที่หนังสือสุทธิ',
            'monk_cid' => 'เลขบัตรประจำตัวประชาชน',
            'monk_aka' => 'ฉายา',
            'monk_duo1' => 'พระคู่สวด 1',
            'monk_duo2' => 'พระคู่สวด 2',
            'monk_ordinate_age' => 'พรรษา',
            'monk_ordinate_datetime' => 'วันที่บวช',
            'guild' => 'วัดที่บวช',
            'guild_sub_district' => 'ตำบล',
            'guild_district' => 'อำเภอ',
            'guild_privince' => 'จังหวัด',
            'monk_img' => 'รูปพระ',
            'monk_create' => 'Monk Create',
        ];
    }
}
