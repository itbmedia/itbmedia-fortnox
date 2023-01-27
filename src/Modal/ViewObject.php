<?php
namespace ITBMedia\FortnoxBundle\Modal;
use Symfony\Component\Config\Definition\Exception\Exception;

abstract class ViewObject 
{
    public function __get($key)
    {
        if(isset($this->{$key}))
        {
            return $this->{$key};
        }
        throw new Exception('Undefined object property '.__CLASS__.'::'.$key);
    }
}