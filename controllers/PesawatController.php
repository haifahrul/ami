<?php
/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 25/05/2017
 * Time: 00.01
 */

namespace app\controllers;

use yii\base\Controller;
use yii\httpclient\Client;

class PesawatController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}