<?php

namespace backend\modules\profile\models;

use Yii;

/**
 * This is the model class for table "t_profile".
 *
 * @property int $id
 * @property string $id_card
 * @property string|null $id_netbook
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $education
 * @property string|null $career
 * @property string|null $race
 * @property string|null $nationality
 * @property string|null $body
 * @property string|null $skintone
 * @property string|null $scar
 * @property string|null $father
 * @property string|null $mother
 * @property string|null $birthdate_th
 * @property string|null $seiya
 * @property string|null $birthdate
 * @property string|null $sub_distric
 * @property string|null $distric
 * @property string|null $province
 * @property string|null $clane
 * @property string|null $temple
 */
class Profile extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 't_profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
            [['id_card'], 'required'],
            [['birthdate_th', 'birthdate'], 'safe'],
            [['id_card'], 'string', 'max' => 13],
            [['id_netbook'], 'string', 'max' => 15],
            [['name', 'surname'], 'string', 'max' => 100],
            [['education', 'career', 'race', 'nationality', 'body', 'skintone', 'scar', 'father', 'mother', 'seiya', 'sub_distric', 'distric', 'province', 'clane', 'temple'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'id_card' => 'เลขบัตรประจำตัวประชาชน',
            'id_netbook' => 'เลขที่หนังสือสุทธิ',
            'name' => 'ชื่อ',
            'surname' => 'นามสกุล',
            'education' => 'ระดับการศึกษา',
            'career' => 'อาชีพ',
            'race' => 'เชื้อชาติ',
            'nationality' => 'สัญชาติ',
            'body' => 'รูปร่าง',
            'skintone' => 'สีผิว',
            'scar' => 'แผลเป็น',
            'father' => 'ชื่อ-สกุลบิดา',
            'mother' => 'ชื่อ-สกุลมารดา',
            'birthdate_th' => 'วันเกิดตามจันทรคติ',
            'seiya' => 'ปีนักษัตร์',
            'birthdate' => 'Birthdate',
            'sub_distric' => 'Sub Distric',
            'distric' => 'Distric',
            'province' => 'Province',
            'clane' => 'Clane',
            'temple' => 'Temple',
        ];
    }

    function chkMod11($id) {
        //Get Last Number
        $checkDigit = (int) substr($id, -1);
        //Get Remaining Numbers
        $numbers = substr($id, 0, -1);
        // Sort Numbers Into an Array
        $numbers_array = str_split($numbers);
        //Define the base for the weights
        $base = 2;
        // Multiply the weights to the numbers
        $numbers_array_reversed = array_reverse($numbers_array);
        foreach ($numbers_array_reversed as $number) {
            $multiplier[$number . 'x' . $base] = (float) $number * $base;
            $base++;
        }
        //Get the total sum
        $sum = (float) array_sum($multiplier);
        $modulus = 11;
        // Divide the sum by check digit 11
        $divider = (float) ($sum / $modulus);
        // Get the remainder
        $remainder = (int) (($divider - (int) $divider) * $modulus);
        // Check if the remainder is matching with the last check digit
        $results = (int) ($modulus - $remainder);
        // Return true or false 
        return ($results == $checkDigit ? true : false);
    }

}
