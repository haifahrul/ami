<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

    <div class="user-profile-form">

        <?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
//                'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-8',
                    'error' => '',
                    'hint' => '',
                ],
            ],
        ]); ?>

        <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'phone')->textInput() ?>
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'gender')->radioList([
            '0' => 'Woman',
            '1' => 'Man'
        ]) ?>
        <?= $form->field($model, 'birthday')->widget(DatePicker::className(), [
            'dateFormat' => 'yyyy-MM-dd',
        ]); ?>
        <?= $form->field($model, 'address')->textarea(['maxlength' => true]) ?>
        <?= $form->field($model, 'province_id')->dropDownList($getListProvince, ['prompt' => ' --- Select Province ---']) ?>
        <?php
        ?>
        <?= $form->field($model, 'city_id')->dropDownList($model->isNewRecord ? [] : $getListCity, [
            'prompt' => ' --- Select City ---',
            'disabled' => true
        ]) ?>
        <?= $form->field($model, 'zipcode')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


<?php
$url = Url::to(['get-list-city']);

$js = <<< JS

var el_province_id = $("#user-province_id");
var el = $("select#user-city_id");

// If model city not null, dropDownList active -> Only for update form
if ('$model->city_id') {
    el.attr('disabled', false); 
}

// On Change Select Province, get list data from table city into dropDownList Select City
$(document).on("change", "#user-province_id", function(data) {
   var province_id = $(this).val();
 
   getData(province_id);   
});

function getData(province_id) {
  $.ajax({
       type: "GET",
       url: '$url',
       data: {id: province_id},
       dataType: "JSON",
       success: function(data) {
            el.empty(); // remove old options
            el.attr('disabled', false);
            el.append($("<option></option>").attr("value", '').text('--- Select City ---'));
            $.each(data, function(value, key) {
                el.append($("<option></option>").attr("value", value).text(key));
            });	
       },
       error: function(xhr) {
            //Do Something to handle error
            el.empty(); // remove old options
            el.append($("<option></option>").attr("value", '').text('--- Select City ---'));
            el.attr('disabled', true);
       }
   });
}

JS;
$this->registerJs($js);
?>