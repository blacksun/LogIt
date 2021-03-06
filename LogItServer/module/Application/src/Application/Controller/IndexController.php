<?php


/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Application\Service\Logs;

class IndexController extends AbstractActionController
{
    /**
     * @var Logs
     */
    private $logsService;
    
    public function setLogsService($logsService)
    {
        $this->logsService = $logsService;
    }
    
    public function indexAction()
    {
        header('Access-Control-Allow-Origin: *');
        $lastLogs = $this->logsService->getLasts();
        
        return new JsonModel($lastLogs);
    }
}
