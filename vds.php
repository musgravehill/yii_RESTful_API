<?php

return array(
    
        'request' => array(
            'csrfTokenName' => 'csrf_token',
            'enableCsrfValidation' => true,
            'enableCookieValidation' => true,
            'csrfCookie' => array(
                'httpOnly' => true,
                'secure' => true,
            ),
            'class' => 'application.components.HttpRequest', // I make strToLower in custom class, it doesnot matter in WhIch cASe request
            'noCsrfValidationRoutes' => array(               
                'Api_v1_products/index',
            ),
        ),        
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'caseSensitive' => false,
            'rules' => array(                                            
                'api/v<ver:\d+>/<controller:\w+>/<action:\w+>' => 'Api_v<ver>_<controller>/<action>',
                'api/v<ver:\d+>/<controller:\w+>/<action:\w+>/<id:\d+>' => 'Api_v<ver>_<controller>/<action>',
            ),
        ),        
);