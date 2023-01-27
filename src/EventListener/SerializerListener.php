<?php
namespace ITBMedia\FortnoxBundle\EventListener;
use ITBMedia\FortnoxBundle\Event\ConnectEvent;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;

class SerializerListener
{
    public function onPreSerialize(PreSerializeEvent $event)
    {
        die("ok");
    }
}