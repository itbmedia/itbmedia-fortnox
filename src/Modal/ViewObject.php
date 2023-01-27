<?php
namespace ITBMedia\FortnoxBundle\Modal;
use ITBMedia\FortnoxBundle\Event\PropertyAccessEvent;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class ViewObject 
{
    private EventDispatcherInterface $eventDispatcher;
     /**
     */
    public function __construct(EventDispatcherInterface $eventDispatcher) {
        $this->eventDispatcher = $eventDispatcher;
    }
    public function __get($key)
    {
        if(isset($this->{$key}))
        {
            $this->eventDispatcher->dispatch(PropertyAccessEvent::NAME, new PropertyAccessEvent($this));
            return $this->{$key};
        }
        throw new Exception('Undefined object property '.__CLASS__.'::'.$key);
    }

   
}