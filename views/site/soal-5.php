<?php

/* @var $this yii\web\View */

$this->title = 'Soal 5';
use yii\helpers\Html;
?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#a" aria-controls="a" role="tab" data-toggle="tab"><b>A</b></a></li>
        <li role="presentation"><a href="#b" aria-controls="b" role="tab" data-toggle="tab"><b>B</b></a></li>
        <li role="presentation"><a href="#c" aria-controls="c" role="tab" data-toggle="tab"><b>C</b></a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="a">
            <p>--</p>
        </div>
        <div role="tabpanel" class="tab-pane" id="b">
            <p>--</p>
        </div>
        <div role="tabpanel" class="tab-pane" id="c">
            <h4>Usulan</h4>
            <p>--</p>
        </div>
    </div>
</div>