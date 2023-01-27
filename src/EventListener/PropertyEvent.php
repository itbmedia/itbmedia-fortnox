<?php
namespace ITBMedia\FortnoxBundle\Event;

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