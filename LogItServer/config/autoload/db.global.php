<?php
return [
    'service_manager' => [
        'factories' => [
            // uses the 'db' key by default
            'general-adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
            // if you want to use one of the services defined below, have a factory return
            // an instance of Zend\Db\Adapter\Adapter($serviceManager->get('Config')['extra-db']
        ],
    ]
];
//gscfrtrjwqlogit