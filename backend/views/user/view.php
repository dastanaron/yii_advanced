<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы точно хотите удалить этого пользователя?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'full_name',
            [
                'label' => 'Доступ',
                'value' => $model->GetAccessList()[$model->access],
            ],
            'password_hash',
            'email:email',
            'status',
            [
                'label' => 'Дата создания',
                'value' => Yii::$app->formatter->asDatetime($model->created_at, 'php: d.m.Y | H:i:s'),
                
            ],
            [
                'label' => 'Дата изменения',
                'value' => Yii::$app->formatter->asDatetime($model->updated_at, 'php: d.m.Y | H:i:s'),
            ]
        ],
    ]) ?>

</div>
