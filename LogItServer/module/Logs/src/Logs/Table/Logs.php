<?php
namespace Logs\Table;

use Zend\Db\TableGateway\TableGateway;

class Logs
{
    const NUMBER_LASTS = 10;
    
    /**
     * @var TableGateway
     */
     protected $tableGateway;

     public function __construct(TableGateway $tableGateway)
     {
         $this->tableGateway = $tableGateway;
     }
     
     public function getLasts($number = self::NUMBER_LASTS)
     {
         $select = $this->tableGateway->getSql()->select()->limit($number);
         return $this->tableGateway->selectWith($select);
     }
}