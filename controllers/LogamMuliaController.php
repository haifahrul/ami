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
    public function actionIndex() {
		return $this->render('index');
    }
}