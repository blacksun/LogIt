<?php
namespace Logs\Service;

use Logs\Table\Logs as LogsTable;

class Logs
{
    /**
     * 
     * @var Logs
     */
    private $logsTable;
    
    public function setTable(LogsTable $logsTable)
    {
        $this->logsTable = $logsTable;
    }
    
    public function getLasts()
    {
        return $this->logsTable->getLasts()->toArray();
    }
    
    public function addLog($params)
    {
        $datetime = new \DateTime($params['time']);
        $params['time'] = $datetime->format('Y-m-d H:i:s');
        return $this->logsTable->insert($params);
    }
}