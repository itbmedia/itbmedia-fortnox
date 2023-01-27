<?php
namespace ITBMedia\FortnoxBundle\EventListener;

use ITBMedia\FortnoxBundle\Event\PropertyAccessEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class PropertyEvent implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            PropertyAccessEvent::NAME => 'onPropertyAccessed',
        );
    }

    public function onPropertyAccessed(PropertyAccessEvent $event)
    {
        
    }
}