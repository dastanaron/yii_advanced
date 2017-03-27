<?php
return [
    'timeZone' => 'Europe/Moscow',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'MultiSite' => [
            'class' => 'common\components\MultiSite',
            'frontend' => 'http://gabettikrym.loc',
            'backend' => 'http://admin.gabettikrym.loc',
        ],
    ],
    'language' => 'ru-RU',
];
