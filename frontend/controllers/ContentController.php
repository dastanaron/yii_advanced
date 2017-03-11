<?php

namespace app\controllers;

use Yii;
use yii\web\NotFoundHttpException;
use app\models\Content;

class ContentController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    /*
     * Выводить контент будем по url
     * Обязательно добавлять слеш в конце в базу url
     */
    
    public function actionPage($url)
    {
        $model = $this->findModel($url);
        
        return $this->render('page', [
            'model' => $model,
            'title' => $url,
        ]);
    }
    
    
    
    protected function findModel($url)
    {
        
        $valid_url = $this->ValidateUrl($url);
        
        if (($model = Content::findOne(['url'=>$valid_url])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    protected function ValidateUrl($url) {
        
        if(!preg_match('#(.*)\/$#U', $url)) {
            return $url . '/';
        }
        else {
            return $url;
        }
        
    }

}
