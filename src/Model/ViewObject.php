<?php
namespace ITBMedia\FortnoxBundle\Model;

use Symfony\Component\EventDispatcher\EventDispatcher;

class ViewObject 
{
    public function __get(string $name)
    {
        $dispatcher = new EventDispatcher();
    }
}