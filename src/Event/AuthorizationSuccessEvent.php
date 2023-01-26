<?php
namespace ITBMedia\FortnoxBundle\Event;
use Symfony\Component\EventDispatcher\Event;

class AuthorizationSuccessEvent extends Event
{
    const NAME = "itbmedia_fortnox.auth_success";
}