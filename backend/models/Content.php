<?php

namespace backend\models;

use Yii;
use common\models\User;
use backend\models\ValidateModel;
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
 * @property string $url
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
            [['title', 'text', 'header', 'author', 'url', 'date_create', 'date_update'], 'required'],
            [['category', 'author',], 'integer'],
            [['date_create'],'filter', 'filter' => function ($value) {
                return ValidateModel::DateToTimestamp($value);
            }],
            [['date_update'],'filter', 'filter' => function ($value) {
                return ValidateModel::DateToTimestamp($value);
            }],   
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
            'text' => 'Текст статьи',
            'header' => 'Заголовок',
            'author' => 'Автор',
            'url' => 'URL',
            'date_create' => 'Дата создания',
            'date_update' => 'Дата последнего изменения',
        ];
    }
    
    public function GetUserName($id) {
        $user = User::findOne($id);
        if (!empty($user->full_name)) {
            return $user->full_name . ' (' . $user->username . ')';
        }
        else {
            return 'не задан';
        }
    }
    
    public function GetListAuthors() {
        $users = User::find()->all();
        
        $authors_array = array(
            
            0 => '',
            
        );
        
        foreach ($users as $user) {
            $authors_array[$user->id] = $user->username;
        }
        
        return $authors_array;
        
    }
    
    public static function DateToTimestamp($value) {
        if (empty($value)) {
            return null;
        }
        else {
            $ditetimearray = explode(' ', $value);

            $datearray = explode('.', $ditetimearray[0]);
            $timearray = explode(':', $ditetimearray[1]);
            
            if ($timearray[0]=='__' || $timearray[1]=='__' || $timearray[2]=='__' || empty($timearray[0]) || empty($timearray[1]) || empty($timearray[2])) {
                $timearray = ['0', '0', '0'];
            }

            return mktime ($timearray[0], $timearray[1], $timearray[2], $datearray[1], $datearray[0], $datearray[2]);
        }
    }
    
}
