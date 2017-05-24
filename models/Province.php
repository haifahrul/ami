<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $id
 * @property string $name
 *
 * @property City[] $cities
 * @property User[] $users
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['province_id' => 'id']);
    }

    public static function getListProvince()
    {
        return (new \yii\db\Query())
            ->select(['id', 'name'])
            ->from('province')
            ->all();
    }
}
