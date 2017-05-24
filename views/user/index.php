<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use app\components\EnumColumn;
use app\models\User;
use yii\jui\DatePicker;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Soal 4';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#data-user" aria-controls="data-user" role="tab" data-toggle="tab">Data User</a></li>
        <li role="presentation"><a href="#erd" aria-controls="erd" role="tab" data-toggle="tab">ERD</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="data-user">
            <br>
            <p>
                <?= Html::a('Create User Profile', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?php Pjax::begin(); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-striped table-bordered table-condensed table-hover'],
                'pager' => [
                    'firstPageLabel' => Yii::t('app', 'First'),
                    'prevPageLabel' => Yii::t('app', 'Previous'),
                    'nextPageLabel' => Yii::t('app', 'Next'),
                    'lastPageLabel' => Yii::t('app', 'Last'),
                    'maxButtonCount' => 5,
                ],
                'layout' => "{summary}\n{items}\n<div align='center'>{pager}</div>",
                'columns' => [
                    [
                        'class' => 'yii\grid\SerialColumn',
                        'header' => 'No',
                        'contentOptions' => ['class' => 'text-center'],
                    ],
                    // 'id',
                    'firstname',
                    'lastname',
                    'phone',
                    'email:email',
                    [
                        'class' => EnumColumn::className(),
                        'attribute' => 'gender',
                        'format' => 'raw',
                        'enum' => User::getGender($data['gender']),
                        'filter' => User::getGender($data['gender']),
                    ],
                    [
                        'attribute' => 'birthday',
                        'filter' => DatePicker::widget([
                            'model' => $searchModel,
                            'attribute' => 'birthday',
                            'dateFormat' => 'yyyy-MM-dd'
                        ]),
                    ],
                    'address',
                    [
                        'attribute' => 'province_id',
                        'format' => 'raw',
                        'value' => function ($data) {
                            return $data['province']['name'];
                        }
                    ],
                    [
                        'attribute' => 'city_id',
                        'format' => 'raw',
                        'value' => function ($data) {
                            return $data['city']['city'];
                        }
                    ],
                    'zipcode',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
            <?php Pjax::end(); ?>
        </div>
        <div role="tabpanel" class="tab-pane" id="erd">
            <?php echo Html::img('/images/ERD-testsibisnis.png', ['class' => 'pull-left img-responsive']); ?>
        </div>
    </div>
</div>