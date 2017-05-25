<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 25/05/2017
 * Time: 00.01
 */

namespace app\controllers;

use yii\httpclient\Client;
use yii\rest\Controller;

class PesawatRestfulController extends Controller
{
    protected function verbs()
    {
        return [
            'get-pesawat' => ['GET'] // filter method only get can access
        ];
    }

    public function actionGetPesawat($d, $a, $date, $ret_date, $adult, $child, $infant)
    {
        $url = 'https://www.tiket.com/pesawat/cari';
        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl($url)
            ->setData([
                'd' => $d,
                'a' => $a,
                'date' => $date,
                'ret_date' => $ret_date,
                'adult' => $adult,
                'child' => $child,
                'infant' => $infant
            ])
            ->setOptions(['timeout' => 300])
            ->send();

        if ($response->isOk) {
            $content = $response->content;
            $pattern = "/'search_result' : (.*?)}]}}/is";
            preg_match_all($pattern, $content, $matches);
            $search_result = str_replace("'search_result' : ", '', $matches[0][0]);

            echo $search_result;
        }
    }
}