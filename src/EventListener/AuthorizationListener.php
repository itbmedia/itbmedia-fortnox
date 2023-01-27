<?php
namespace ITBMedia\FortnoxBundle\EventListener;
use ITBMedia\FortnoxBundle\Event\ConnectEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AuthorizationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            ConnectEvent::NAME => 'authorization',
        );
    }

    public function authorization(ConnectEvent $event)
    {
        
    }
}