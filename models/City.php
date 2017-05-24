<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property integer $province_id
 * @property string $city
 * @property integer $zipcode
 *
 * @property Province $province
 * @property User[] $users
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['province_id', 'city', 'zipcode'], 'required'],
            [['province_id', 'zipcode'], 'integer'],
            [['city'], 'string', 'max' => 60],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province_id' => 'Province ID',
            'city' => 'City',
            'zipcode' => 'Zipcode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['city_id' => 'id']);
    }

    public static function getListCity($id)
    {
        return (new \yii\db\Query())
            ->select(['id', 'province_id', 'city', 'zipcode'])
            ->from('city')
            ->where(['province_id' => $id])
            ->all();
    }
}
