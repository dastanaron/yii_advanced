<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "slids".
 *
 * @property integer $id
 * @property string $img_src
 * @property string $title
 * @property string $link
 * @property integer $price
 * @property string $valute
 * @property string $text_on_button
 * @property string $img_left
 * @property string $img_top
 * @property string $timestamp
 */
class Slids extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slids';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['img_src', 'title', 'text_on_button'], 'required'],
            [['price'], 'integer'],
            [['timestamp'], 'safe'],
            [['img_src', 'link'], 'string', 'max' => 200],
            [['title'], 'string', 'max' => 100],
            [['valute', 'img_left', 'img_top'], 'string', 'max' => 10],
            [['text_on_button'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img_src' => 'Изображение',
            'title' => 'Заголовок',
            'link' => 'Ссылка',
            'price' => 'Цена',
            'valute' => 'Валюта',
            'text_on_button' => 'Надпись на кнопке',
            'img_left' => 'Опция left',
            'img_top' => 'Опция top',
            'timestamp' => 'Timestamp',
        ];
    }
}
