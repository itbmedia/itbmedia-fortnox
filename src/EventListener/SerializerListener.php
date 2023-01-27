<?php
namespace ITBMedia\FortnoxBundle\EventListener;
use ITBMedia\FortnoxBundle\Event\ConnectEvent;
use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\PreSerializeEvent;

class SerializerListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            array(
                'event' => 'serializer.pre_serialize',
                'method' => 'onPreSerialize',
                // 'class' => 'AppBundle\\Entity\\SpecificClass', // if no class, subscribe to every serialization
                // 'format' => 'json', // optional format
                'priority' => 0, // optional priority
            ),
        );
    }

    public function onPreSerialize(PreSerializeEvent $event)
    {
        die("ok");
    }
}