<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Contracts\EventDispatcher\Event;

class TokenRefreshEvent extends Event
{
    const NAME = "itbmedia_fortnox.token_refresh";
    private Token $token;

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

    public function __construct(Token $token)
    {
        $this->token = $token;
    }
}