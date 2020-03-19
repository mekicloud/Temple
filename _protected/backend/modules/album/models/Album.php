<?php

namespace backend\modules\album\models;

use Yii;

/**
 * This is the model class for table "t_album".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $detail
 * @property string|null $img
 * @property string|null $created_at
 * @property int|null $created_by
 * @property string|null $updated_at
 * @property int|null $updated_by
 * @property int|null $status
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_album';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['detail'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by', 'status'], 'integer'],
            [['title', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'ชื่ออัลบั้ม',
            'detail' => 'รายละเอียด',
            'img' => 'รูปภาพ',
            'created_at' => 'วันที่สร้าง',
            'created_by' => 'สร้างโดย',
            'updated_at' => 'วันที่แก้ไข',
            'updated_by' => 'แก้ไขโดย',
            'status' => 'สถานะ',
        ];
    }
}
