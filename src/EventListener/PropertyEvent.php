<?php
namespace ITBMedia\FortnoxBundle\EventListener;

use ITBMedia\FortnoxBundle\Event\PropertyAccessEvent;
class PropertyEvent
{
    public function onPropertyAccessed(PropertyAccessEvent $event)
    {
        print_r($event);
        die();
    }
}