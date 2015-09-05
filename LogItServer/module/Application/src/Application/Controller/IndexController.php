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

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        header('Access-Control-Allow-Origin: *');
        $object = new \stdClass();
        $object->id = 1;
        $object->content = 'prova 1 2 3';
        $object1 = new \stdClass();
        $object1->id = 2;
        $object1->content = 'test';
        return new JsonModel([
            $object, $object1]
        );
    }
}
