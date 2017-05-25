<?php

/* @var $this yii\web\View */

$this->title = 'Soal 5';
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#a" aria-controls="a" role="tab" data-toggle="tab"><b>A</b></a>
        </li>
        <li role="presentation"><a href="#b" aria-controls="b" role="tab" data-toggle="tab"><b>B</b></a></li>
        <li role="presentation"><a href="#c" aria-controls="c" role="tab" data-toggle="tab"><b>C</b></a></li>
    </ul>

    <br><br>

    <!-- Tab panes -->
    <div class="tab-content">
        <!-- Soal nomor 5 point a -->
        <div role="tabpanel" class="tab-pane active" id="a">
            <?php $form = ActiveForm::begin([
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                    'horizontalCssClasses' => [
                        'label' => 'col-sm-2',
                        'wrapper' => 'col-sm-8',
                        'error' => '',
                        'hint' => '',
                    ],
                ],
            ]); ?>
            <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'value' => 'faiz.fadly@gmail.com']) ?>
            <?= $form->field($model, 'password')->passwordInput(['value' => 'admin']) ?>
            <div class="form-group">
                <div class="col-lg-offset-2">
                    <?= Html::submitButton('Sign in', ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>

        <!-- Soal nomor 5 point b -->
        <div role="tabpanel" class="tab-pane" id="b">
            <ol>
                <li>Menggunakan teknik RESTful Web Service / API.</li>
                <li>Menggunakan metode Model-View-Controller</li>
            </ol>
        </div>

        <!-- Soal nomor 5 point c -->
        <div role="tabpanel" class="tab-pane" id="c">
            <h4>Usulan</h4>
            <ol>
                <li>Code tersebut masih menggunakan Basic Authentication (OAuth 1 dan 2).</li>
                <li><code>
                        $email    = $_POST['email']; <br>
                        $password = $_POST['password'];
                    </code>
                    seharusnya = menggunakan $_GET
                </li>
            </ol>
        </div>
    </div>
</div>