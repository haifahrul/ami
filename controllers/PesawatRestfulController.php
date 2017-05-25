<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 25/05/2017
 * Time: 00.01
 */

namespace app\controllers;

use yii\helpers\Json;
//use yii\httpclient\Client;
use yii\rest\Controller;
//use linslin\yii2\curl;
use Goutte\Client;

class PesawatRestfulController extends Controller
{
//    protected function verbs()
//    {
//        return [
//            'get-users' => ['GET'] // filter method only get can access
//        ];
//    }

//    public function behaviors()
//    {
//        $behaviors = parent::behaviors(); // yng bisa akses user yg terdaftar
//        $behaviors['authenticator'] = [
//            'class' => \yii\filters\auth\QueryParamAuth::className(),
//            // 'tokenParam'=> 'key', // default param token is access-token
//        ];
//        return $behaviors;
//    }

//    public function actionGetPesawat($d, $a, $date, $ret_date, $adult, $child, $infant)
    public function actionGetPesawat()
    {
        $d = 'JKT';
        $a = 'DPS';
        $date = '2017-05-26';
        $ret_date = '2017-06-02';
        $adult = 1;
        $child = 0;
        $infant = 0;

//        $url = 'https://www.tiket.com/pesawat/cari?';
        $url = 'https://www.tiket.com/pesawat/cari?d=&a=DPS&date=2017-05-27&ret_date=2017-06-02&adult=1&child=0&infant=0';
//        $client = new Client(['transport' => 'yii\httpclient\CurlTransport']);
//        $response = $client->createRequest()
//            ->setFormat(Client::FORMAT_JSON)
//            ->setMethod('GET')
////            ->setUrl('https://www.tiket.com/pesawat/cari?d=&a=DPS&date=2017-05-26&ret_date=2017-06-02&adult=1&child=0&infant=0')
//            ->setUrl($url)
//            ->setData([
//                'd' => $d,
//                'a' => $a,
//                'date' => $date,
//                'ret_date' => $ret_date,
//                'adult' => $adult,
//                'child' => $child,
//                'infant' => $infant
//            ])
//            ->send();
//
//        if ($response->isOk) {
//            $content = Json::decode($response->content);
//        }

//        $curl = new curl\Curl();
//        $response = $curl->setGetParams([
//            'key' => 'value',
//            'secondKey' => 'secondValue'
//        ])
//            ->get($url);
//
//        if ($curl->errorCode === null) {
//            echo $response;
//        } else {
//            // List of curl error codes here https://curl.haxx.se/libcurl/c/libcurl-errors.html
//            switch ($curl->errorCode) {
//
//                case 6:
//                    //host unknown example
//                    break;
//            }
//        }


        $client = new Client();
        $crawler = $client->request('GET', $url);

        // Get the latest post in this category and display the titles
        $crawler->filter('.flight-cols')->each(function ($node) {
            printf($node->text());
        });
    }
}