<?php
namespace Logs\Service;


class Logs
{
    public function getLasts()
    {
        $object = new \stdClass();
        $object->id = 1;
        $object->content = 'prova 1 2 3';
        $object1 = new \stdClass();
        $object1->id = 2;
        $object1->content = 'test';
        return [$object, $object1];
    }
}