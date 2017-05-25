<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesawat".
 *
 * @property integer $id
 * @property string $d
 * @property string $a
 * @property string $date
 * @property string $ret_date
 * @property integer $adult
 * @property integer $child
 * @property integer $infant
 */
class Pesawat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesawat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['d', 'a', 'date', 'ret_date', 'adult', 'child', 'infant'], 'required'],
            [['date', 'ret_date'], 'safe'],
            [['adult', 'child', 'infant'], 'integer'],
            [['d', 'a'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'd' => 'Keberangkatan',
            'a' => 'Kedatangan',
            'date' => 'Pergi',
            'ret_date' => 'Pulang',
            'adult' => 'Dewasa',
            'child' => 'Anak',
            'infant' => 'Bayi',
        ];
    }
}
