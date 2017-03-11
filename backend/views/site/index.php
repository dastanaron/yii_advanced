<?php

/* @var $this yii\web\View */

$this->title = 'Панель администратора';
?>
<div class="site-index">
    <h1>Добро пожаловать в панель управления, <?php echo Yii::$app->user->identity->full_name;?>!</h1>
</div>
