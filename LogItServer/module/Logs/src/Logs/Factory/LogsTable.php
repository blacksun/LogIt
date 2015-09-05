<?php
namespace Logs\Factory;

use Zend\ServiceManager\FactoryInterface;
use Logs\Table\Logs;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Db\TableGateway\TableGateway;

class LogsTable implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceManager)
    {
        $dbAdapter = $serviceManager->get('general-adapter');
        $tableGateway = new TableGateway('logs', $dbAdapter);
        
        return new Logs($tableGateway);
    }
}