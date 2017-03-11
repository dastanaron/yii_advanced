<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Content */

$this->title = $model->header;
$this->params['breadcrumbs'][] = ['label' => 'Менеджер статей', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Посмотреть на сайте', 'http://yii.loc/'.$model->url, ['class' => 'btn btn-default', 'target' => '_blank']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'keywords',
            'description',
            'category',
            'text:ntext',
            'header',
            //'author',
            [
                'label' => 'Автор',
                'value' => $model->GetUserName($model->author),
            ],
            'url',
            //'date_create',
            [
                'label' => 'Дата создания',
                'value' => Yii::$app->formatter->asDatetime($model->date_create, 'php: d.m.Y | H:i:s'),
                
            ],
            [
                'label' => 'Дата изменения',
                'value' => Yii::$app->formatter->asDatetime($model->date_update, 'php: d.m.Y | H:i:s'),
            ],
            //'date_update',
        ],
    ]) ?>

</div>
