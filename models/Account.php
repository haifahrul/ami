<?php

namespace app\models;

use Yii;
use yii\httpclient\Client;

/**
 * This is the model class for table "account".
 *
 * @property string $email
 * @property string $username
 * @property string $password
 */
class Account extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'account';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'username', 'password'], 'required'],
            [['email', 'username', 'password'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public static function doLogin($url, $email, $password)
    {
        $client = new Client(['transport' => 'yii\httpclient\CurlTransport']);
        $response = $client->createRequest()
            ->setMethod('get')
            ->setUrl($url)
            ->setData(['email' => $email, 'password' => $password])
            ->send();

        if ($response->isOk) {
            $data = $response->data;

            return $data;
        }

//        $datauser = array(
//            //'API_key' => $key,
//            'email' => $email,
//            'password' => $password,
//        );
//
//        $postdatauser = "";
//        foreach ($datauser as $k => $v) {
//            $postdatauser .= $k . "=" . $v . "&";
//        }
//
//        //$postData = http_build_query($user_data);
//        $curlHandle = curl_init();
//        curl_setopt($curlHandle, CURLOPT_URL, $url);
//        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postdatauser);
//        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
//        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
//        curl_setopt($curlHandle, CURLOPT_POST, 1);
//
//        $string = curl_exec($curlHandle);
//        curl_close($curlHandle);
//
//        return $string;
    }
}