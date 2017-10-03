<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\controllers;

use yii\httpclient\Client;
use yii\rest\Controller;
use app\components\DOMCustom;

/**
 * Description of LogamMuliaController
 *
 * @author PC Irma
 */
class LogamMuliaController extends \yii\web\Controller {

    //put your code here
//    public function actionIndex() {
//        
//    }
//    protected function verbs()
//    {
//        return [
//            'get-jgag' => ['GET'] // filter method only get can access
//        ];
//    }

    public function actionIndex2() {
        $url = 'http://logammulia.com/price_list.php?idbutik=11&idkat=2&tanggal=2017-10-03&iddesc=0001';
        $client = new Client();
        $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl($url)
                ->send();

        if ($response->isOk) {
            $content = $response->content;
            $pattern = "/<div class=\"dnd-table dnd-table-alternative dnd-table-striped \">(.*?)<\/div>/si";
            preg_match($pattern, $content, $data1);
            $data1 = str_replace('"string(593) "', '', $data1[0]);
            
            $pattern = "/<tbody>(.*?)<\/tbody>/si";
            preg_match($pattern, $content, $data1);
//            $data1 = str_replace('"string(593) "', '', $data1[0]);
            
            var_dump($data1);

//            $contents = $data1;
//            $DOM = new \DOMDocument();
//            $DOM->loadHTML($contents);
//
//            $xpath = new \DOMXPath($DOM);
//            foreach ($xpath->query('//comment()') as $comment) {
//                $comment->parentNode->removeChild($comment);
//            }
//
//            $body = $xpath->query('//body')->item(0);
//            $newHtml = $body instanceof DOMNode ? $dom->saveXml($body) : 'something failed';
//
//            var_dump($newHtml);exit;
//
//            $items = $DOM->getElementsByTagName('tr');
//
//            foreach ($items as $node) {
//                echo self::tdrows($node->childNodes) . "<br />";
//            }

            exit;

            $dom = new \DOMDocument();
            $dom->loadHTML($data1);
//        $tables = $doc->getElementsByTagName('tr');
            $tables = $dom->getElementsByTagName('table')->item(2);
            var_dump($tables);
            exit;
//        foreach ($tables as $table) {
//            echo $content = $doc->saveHTML($table);
//        }
//        exit;
//            var_dump(explode(' ', $data1[0]));
//            echo $matches;
            exit;
            $pattern2 = "/<table class=\"table datatable-basic table-striped\" style=\"width:98%\">(.*?)<\/table>/is";
            preg_match($pattern2, $content, $data2);
            var_dump($data2);
        }
    }

    //put your code here
    static function tdrows($elements) {
        $str = "";
        foreach ($elements as $element) {
            $str .= $element->nodeValue . ", ";
        }

        return $str;
    }

    // Jakarta Gedung ANTAM - Gold (JGAG)
    public function actionIndex() {
        //'http://logammulia.com/price_list.php?idbutik=11&idkat=2&tanggal=2017-10-03&iddesc=0001';
        //$url = 'https://www.tiket.com/pesawat/cari';
        $url = 'http://logammulia.com/price_list';
        $idbutik = 11;
        $idkat = 2;
        $tanggal = '2017-10-03';
        $iddesc = 0001;

        $client = new Client();
        $response = $client->createRequest()
                ->setMethod('GET')
                ->setUrl($url)
                ->setData([
                    'idbutik' => $idbutik,
                    'idkat' => $idkat,
                    'tanggal' => $tanggal,
                    'iddesc' => $iddesc,
                ])
                ->setOptions(['timeout' => 300])
                ->send();

        exit(var_dump($response));

        if ($response->isOk) {
            $content = $response->content;

            var_dump($content);
            exit;

            if (method_exists($html, 'find')) {
//                $elements = $html->find( '<table class="dnd-table dnd-table-alternative dnd-table-striped"></table>' );
                $elements = $html->find('<table></table>');
                if (!empty($elements)) {
                    echo '<ul>';
                    foreach ($elements as $element)
                        echo '<li>' . $element->plaintext . '</li>';
                    echo '</ul>';
                }
            }

            $pattern = "/'search_result' : (.*?)}]}}/is";
            preg_match_all($pattern, $content, $matches);
            $search_result = str_replace("'search_result' : ", '', $matches[0][0]);

            echo $search_result;
        }
    }

}
