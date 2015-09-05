<?php
namespace Logs\Controller;

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
    
    public function addAction()
    {
        $success = false;
        header('Access-Control-Allow-Origin: *');
        $id = $this->params('id');
        if ($this->getRequest()->isPost()) {
            $success = $this->logsService->addLog($id);
        } else {
            $success = $this->logsService->get($id);
        }
        
        
        return new JsonModel($success);
    }
}
