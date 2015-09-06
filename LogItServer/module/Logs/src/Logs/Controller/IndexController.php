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
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
        
        $success = false;
        if ($this->getRequest()->isPost()) {
            $success = $this->logsService->addLog($this->params()->fromPost());
        }
        
        return new JsonModel([$success]);
    }
}
