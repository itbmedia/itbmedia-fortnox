<?php
namespace ITBMedia\FortnoxBundle\EventListener;
use ITBMedia\FortnoxBundle\Event\ConnectEvent;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;

class SerializerListener implements EventSubscriberInterface
{
    static public function getSubscribedEvents()
    {
        return array(
            array('event' => 'serializer.pre_serialize', 'method' => 'onPreSerialize'),
        );
    }
    public function onPreSerialize(PreSerializeEvent $event)
    {
        die("ok");
    }
}