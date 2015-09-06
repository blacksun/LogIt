<?php
namespace Logs\Table;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

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
         $select = $this->tableGateway->getSql()->select();
         $select->order('time ' . Select::ORDER_DESCENDING)->limit($number);
         return $this->tableGateway->selectWith($select);
     }
}