<?php

namespace app\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "content".
 *
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $description
 * @property integer $category
 * @property string $text
 * @property string $header
 * @property integer $author
 * @property integer $date_create
 * @property integer $date_update
 */
class Content extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'header', 'author', 'date_create', 'date_update'], 'required'],
            [['category', 'author', 'date_create', 'date_update'], 'integer'],
            [['text'], 'string'],
            [['title', 'keywords', 'description', 'header'], 'string', 'max' => 200],
            [['url'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'description' => 'Description',
            'category' => 'Категория',
            'text' => 'Текст материала',
            'header' => 'Заголовок',
            'author' => 'Автор',
            'url' => 'URL адрес',
            'date_create' => 'Дата создания',
            'date_update' => 'Дата изменения',
        ];
    }
    
    public function GetAuthorName($id) {
        
        $user = User::findOne($id);
        
        if (!empty($user->username)) {
            return $user->username;
        }
        else {
            return false;
        }
        
        
    }
    
    /*
     * Функция позволяющая добавлять новые статьи в меню, автоматически
     * Для этого нужно вызвать ее в layouts
     */
    public static function GetElementOnMenu() {
        $contents = self::find()->all();
        
        $menu_arr = array();
        
        foreach ($contents as $content) {
            $menu_arr[] = ['label' => $content->header, 'url' => ['/'.$content->url]];
        }
        return $menu_arr;
    }

}
