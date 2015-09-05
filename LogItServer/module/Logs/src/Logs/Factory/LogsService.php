<?php
namespace Logs\Factory;

use Zend\ServiceManager\FactoryInterface;
use Logs\Service\Logs;
use Zend\ServiceManager\ServiceLocatorInterface;

class LogsService implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        $service = new Logs();
        $service->setTable($serviceManager->get('logs-table'));
        
        return $service;
    }
}