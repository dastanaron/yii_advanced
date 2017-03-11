<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'access')->listBox($model->GetAccessList(), ['size' => 1])?>

    <?= $form->field($model, 'password')->passwordInput(['value' =>'']) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?php
    /*
    echo $form->field($model, 'created_at')->widget(DateTimePicker::className(),[
        //'name' => 'dp_1',
        'type' => DateTimePicker::TYPE_INPUT,
        'options' => ['placeholder' => 'Ввод даты/времени...'],
        'convertFormat' => true,
        'value'=> date("d.m.Y h:i:s", $model->created_at),
        'pluginOptions' => [
            'format' => 'dd.MM.yyyy hh:i:ss',
            'autoclose'=>true,
            'weekStart'=>1, //неделя начинается с понедельника
            'startDate' => '01.05.2015 00:00', //самая ранняя возможная дата
            'todayBtn'=>true, //снизу кнопка "сегодня"
        ]
    ])->textInput(['value' => date("d.m.Y h:i:s", $model->created_at)]);*/
    ?>

    <?php //echo $form->field($model, 'updated_at')->hiddenInput(['value' => Yii::$app->formatter->asDatetime(time(), 'php:d.m.Y H:i:s')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
