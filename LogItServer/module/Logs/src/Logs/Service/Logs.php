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
        $this->table = $logsTable;
    }
    
    public function getLasts()
    {
        return $this->table->getLasts()->toArray();
    }
    
    public function addLog($params)
    {
        return $this->table->insert($params);
    }
}