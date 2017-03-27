<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Панель администратора';
?>
<div class="site-index">
    <h1>Добро пожаловать в панель управления, <?php echo Yii::$app->user->identity->full_name;?>!</h1>
    
    <h2>Управление</h2>
    
    <div class="row">
        <div class="col-md-6">
            <div class="element">
                <?= Html::a('Редактирование контента', ['/content/'], ['class' => 'btn btn-default']) ?>
            </div>
            <div class="element">
                <?= Html::a('Менеджер файлов', ['filemanager'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="element">
                <?= Html::a('Редактирование слайдера', ['/slids/'], ['class' => 'btn btn-default']) ?>
            </div>
        </div>
    </div>
</div>
