<?php
return [
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Logs\Controller',
                        'controller' => 'Index',
                        'action'     => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/:action[/:id]',
                            'constraints' => array(
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'controllers' => [
        'factories' => [
            'Logs\Controller\Index' => 'Logs\Factory\LogsController'
        ],
    ],
    'service_manager' => [
        'invokables' => [
            
        ],
        'factories' => [
            'logs-table'   => 'Logs\Factory\LogsTable',
            'logs-service' => 'Logs\Factory\LogsService',
        ],
    ],
];