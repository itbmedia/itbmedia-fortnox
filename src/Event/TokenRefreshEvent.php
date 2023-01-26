<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Modal\Token;
use Symfony\Component\EventDispatcher\Event;

class TokenRefreshEvent extends Event
{
    const NAME = "itbmedia_fortnox.token_refresh";
    private Token $token;
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

    public function __construct(Token $token, object $user)
    {
        $this->token = $token;
        $this->user = $user;
    }
}