<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->firstname . ' ' . $model->lastname;
$this->params['breadcrumbs'][] = ['label' => 'User', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'firstname',
            'lastname',
            'phone',
            'email:email',
            [
                'attribute' => 'gender',
                'value' => $gender
            ],
            'birthday',
            'address:ntext',
            [
                'attribute' => 'province_id',
                'value' => $model['province']['name']
            ],
            [
                'attribute' => 'city_id',
                'value' => $model['city']['city']
            ],
            'zipcode',
        ],
    ]) ?>

</div>
