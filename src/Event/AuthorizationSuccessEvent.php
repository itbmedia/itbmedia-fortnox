<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Modal\Token;
use Symfony\Component\EventDispatcher\Event;

class AuthorizationSuccessEvent extends Event
{
    const NAME = "itbmedia_fortnox.auth_success";
    private Token $token;
    private $state;

	/**
	 * @return Token
	 */
	public function getToken(): Token {
		return $this->token;
	}
	
	/**
	 * @param Token $token 
	 * @return self
	 */
	public function setToken(Token $token): self {
		$this->token = $token;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * @param mixed $state 
	 * @return self
	 */
	public function setState($state): self {
		$this->state = $state;
		return $this;
	}

    public function __construct(Token $token, $state)
    {
        $this->token = $token;
        $this->state = $state;
    }
}