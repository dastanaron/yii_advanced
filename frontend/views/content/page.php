<?php
/*
 * Формируем метатеги
 */
$this->title = $model->title;
$this->registerMetaTag(['name' => 'description', 'content' => $model->description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);

/*use yii\helpers\VarDumper;
use app\models\Content;


VarDumper::dump(Content::GetElementOnMenu(), 10, true);*/
?>

    
<h1><?php echo $model->header;?></h1>
    
<div class="content">

    <?php echo $model->text;?>

</div>

<div class="page-info">
    <div class="author-page"><?php echo $model->GetAuthorName($model->author);?></div>
    <div class="date-create-page">
        <?php
            echo Yii::$app->formatter->asDate($model->date_update, 'php:d.m.Y');
        ?>        
    </div>
</div>
    
    


