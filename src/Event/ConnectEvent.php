<?php
namespace ITBMedia\FortnoxBundle\Event;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Contracts\EventDispatcher\Event;

class ConnectEvent extends Event
{
    const NAME = "itbmedia_fortnox.auth_success";
    private Token $token;
	private array $state;

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
	 * @return array
	 */
	public function getState(): array {
		return $this->state;
	}
	/**
	 * @param array $state 
	 * @return self
	 */
	public function setState(array $state): self {
		$this->state = $state;
		return $this;
	}
    public function __construct(Token $token, array $state = [])
    {
        $this->token = $token;
		$this->state = $state;
    }
}