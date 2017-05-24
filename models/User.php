<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_profile".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $email
 * @property string $gender
 * @property string $birthday
 * @property string $address
 * @property integer $province_id
 * @property integer $city_id
 * @property integer $zipcode
 *
 * @property City $city
 * @property Province $province
 */
class User extends \yii\db\ActiveRecord
{
    CONST Man = 1;
    CONST Woman = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['firstname', 'lastname', 'phone', 'email', 'gender', 'birthday', 'address', 'province_id', 'city_id'], 'required'],
            [['province_id', 'city_id', 'phone', 'zipcode'], 'integer'],
            [['firstname', 'lastname', 'gender'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 255, 'min' => 10],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            ['email', 'email'],
            ['birthday', 'safe'],
            [['firstname', 'phone', 'email', 'gender', 'birthday', 'address', 'province_id', 'city_id', 'zipcode'], 'required', 'on' => 'create'],
            [['firstname', 'phone', 'email', 'gender', 'birthday', 'address', 'province_id', 'city_id', 'zipcode'], 'required', 'on' => 'update'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'email' => 'Email',
            'gender' => 'Gender',
            'birthday' => 'Birthday',
            'address' => 'Address',
            'province_id' => 'Province',
            'city_id' => 'City',
            'zipcode' => 'Zipcode'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    public static function getGender($id = null)
    {
        $array = [
            Self::Woman => 'Woman',
            Self::Man => 'Man'
        ];

        return $id != null ? $array[$id] : $array;

    }
}