<?php
namespace ITBMedia\FortnoxBundle\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AuthorizationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            AuthorizationSuccessEvent::NAME => 'authorization',
        );
    }

    public function authorization(AuthorizationSuccessEvent $event)
    {
        
    }
}