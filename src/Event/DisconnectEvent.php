<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Contracts\EventDispatcher\Event;

class DisconnectEvent extends Event
{
    const NAME = "itbmedia_fortnox.disconnect";
}