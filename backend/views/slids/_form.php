<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use zxbodya\yii2\elfinder\ElFinderInput;
/* @var $this yii\web\View */
/* @var $model backend\models\Slids */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="slids-form">

    <?php $form = ActiveForm::begin(); ?>

    <?/*= $form->field($model, 'img_src')->textInput(['maxlength' => true]) */?>
    <?php
    echo $form->field($model, 'img_src')->widget(
        ElFinderInput::className(),
        ['connectorRoute' => 'el-finder/connector',]
    );
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'valute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text_on_button')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_left')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_top')->textInput(['maxlength' => true]) ?>

    <?/*= $form->field($model, 'timestamp')->textInput() */?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>