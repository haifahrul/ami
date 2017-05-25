<?php

/**
 * Created by PhpStorm.
 * User: haifa
 * Date: 25/05/2017
 * Time: 00.35
 */
/* @var $this yii\web\View */

$this->title = 'Web Service Pesawat';
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Filter Data Berdasarkan:</p>
    <ol>
        <li>d (Keberangkatan): JKT</li>
        <li>a (Kedatangan): DPS</li>
        <li>date (Pergi): 2017-05-27</li>
        <li>ret_date (Pulang): 2017-06-02</li>
        <li>adult: 1</li>
        <li>child: 0</li>
        <li>infant: 0</li>
    </ol>

    <a href="http://testsibisnis.test/pesawat-restful/get-pesawat?d=JKT&a=DPS&date=2017-05-27&ret_date=2017-06-02&adult=1&child=0&infant=0"
       target="_blank">
        <div class="btn btn-success">Show Data</div>
    </a>

</div>
