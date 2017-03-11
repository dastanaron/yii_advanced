<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $full_name
 * @property integer $access
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    public $password;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'full_name', 'access', 'email'], 'required'],
            [['access', 'status', 'created_at', 'updated_at'], 'integer'],          
            [['password'],'string'],
            [['username', 'email'], 'string', 'max' => 255],
            [['full_name'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'full_name' => 'Полное имя',
            'access' => 'Доступ',
            'password' => 'Пароль (оставьте пустым если не хотите изменить)',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'E-mail',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
        ];
    }
    
    public function GetAccessList() {
        return [
            1 => 'Администратор',
            2 => 'Пользователь',
        ];
    }
    
}
