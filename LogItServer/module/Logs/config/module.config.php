<?php
return [
    'controllers' => [
        'factories' => [
            'Logs\Controller\Index' => 'Logs\Factory\LogsController'
        ],
    ],
    'service_manager' => [
        'invokables' => [
            'logs-service' => 'Logs\Service\Logs',
        ]
    ],
];