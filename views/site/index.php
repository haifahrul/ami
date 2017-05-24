<?php

/* @var $this yii\web\View */

$this->title = 'Soal 1';
use yii\helpers\Html;

?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $count = 100;
    for ($i = 1; $i <= 100; $i++) {
        if (($i % 3 == 0) && ($i % 5 == 0)) {
            echo 'AptaMedia';
        } elseif ($i % 3 == 0) {
            echo 'Apta,';
        } elseif ($i % 5 == 0) {
            echo 'Media,';
        } else {
            echo $i . ',';
        }

        if ($i % 10 == 0) {
            echo '<br>';
        }
    }
    ?>

</div>