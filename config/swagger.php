<?php

use Cake\Core\Configure;

return [
    'Swagger' => [
        'ui' => [
            'title' => 'Api Phonebook',
            'validator' => true,
            'schemes' => ['http', 'https'],
            'route' => '/api/doc/',
        ],
        'docs' => [
            'title' => 'Api Phonebook',
            'crawl' => Configure::read('debug'),
            'route' => '/api/doc/',
            'cors' => [
                'Access-Control-Allow-Origin' => '*',
                'Access-Control-Allow-Methods' => '*',
                'Access-Control-Allow-Headers' => '*'
            ]
        ],
        'library' => [
            'api' => [
                'include' => ROOT . DS . 'src',
                'exclude' => [
                    '/Editor/'
                ]
            ],
            'editor' => [
                'include' => [
                    ROOT . DS . 'src' . DS . 'Controller' . DS . 'AppController.php',
                    ROOT . DS . 'src' . DS . 'Controller' . DS . 'Editor',
                    ROOT . DS . 'src' . DS . 'Model'
                ]
            ]
        ]
    ]
];

