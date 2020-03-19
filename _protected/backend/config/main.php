<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'profile' => [
            'class' => 'backend\modules\profile\Module',
        ],
        'event' => [
            'class' => 'backend\modules\event\Module',
        ],
        'album' => [
            'class' => 'backend\modules\album\Module',
        ],
    ],
    'components' => [
        // here you can set theme used for your backend application 
        // - template comes with: 'default', 'slate', 'spacelab' and 'cerulean'
        'view' => [
            // 'theme' => [
            //     'pathMap' => ['@app/views' => '@webroot/themes/octopus/views'],
            //     'baseUrl' => '@web/themes/octopus',
            // ],
            'theme' => [
                'pathMap' => [
                    '@backend/views' => '@backend/themes/octopus/views'
                ],
                'baseUrl' => '@web/themes/octopus',
            ],
        ],
        'user' => [
            'identityClass' => 'common\models\UserIdentity',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
