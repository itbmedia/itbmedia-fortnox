<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Modal\Token;
use Symfony\Component\EventDispatcher\Event;

class DisconnectEvent extends Event
{
    const NAME = "itbmedia_fortnox.disconnect";
    private object $user;
	
    /**
	 * @return object
	 */
	public function getUser(): object {
		return $this->user;
	}
	
	/**
	 * @param object $user 
	 * @return self
	 */
	public function setUser(object $user): self {
		$this->user = $user;
		return $this;
	}	

    public function __construct(object $user)
    {
        $this->user = $user;
    }
}