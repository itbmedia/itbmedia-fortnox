<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Modal\Token;
use Symfony\Component\EventDispatcher\Event;

class AuthorizationSuccessEvent extends Event
{
    const NAME = "itbmedia_fortnox.auth_success";
    private Token $token;
    private object $user;

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