<?php

use yii\helpers\Html;
use zxbodya\yii2\elfinder\ElFinderWidget;

$this->title = 'Файловый менеджер';
?>
<div class="site-index">
    <h1><?php echo $this->title?></h1>
    
    <?php
    
    echo ElFinderWidget::widget(
        ['connectorRoute' => 'el-finder/connector']
    );
    echo Yii::$app->language;
    ?>
</div>