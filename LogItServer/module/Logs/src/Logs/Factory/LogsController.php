<?php
namespace Logs\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Logs\Controller\IndexController;

class LogsController implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $controllerManager)
    {
        $serviceManager = $controllerManager->getServiceLocator();
        $controller = new IndexController();
        $controller->setLogsService($serviceManager->get('logs-service'));
        
        return $controller;
    }
}