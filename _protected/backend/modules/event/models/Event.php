<?php

namespace backend\modules\event\models;

use Yii;

/**
 * This is the model class for table "t_event".
 *
 * @property int $id
 * @property string $title
 * @property string $detail
 * @property string $img
 * @property int $status
 * @property string $created_at
 * @property int $created_by
 * @property string|null $updated_at
 * @property int|null $updated_by
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'detail', 'img', 'created_at', 'created_by'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'detail'], 'string', 'max' => 250],
            [['img'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'ชื่อกิจกรรม',
            'detail' => 'รายละเอียด',
            'img' => 'รูปภาพ',
            'status' => 'สถานะ',
            'created_at' => 'วันที่เพิ่มกิจกรรม',
            'created_by' => 'ผู้เพิ่มกิจกรรม',
            'updated_at' => 'วันที่ปรับปรุงกิจกรรม',
            'updated_by' => 'ผู้ปรับปรุงข้อมูล',
        ];
    }
}
