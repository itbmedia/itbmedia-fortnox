<?php
namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
class Token implements SerializableInterface
{
     /**
     * @var string
     * @Type("string")
     * @SerializedName("access_token")
     */
    private $accessToken;
     /**
     * @var int
     * @Type("integer")
     * @SerializedName("expires_in")
     */
    private $expiresIn;
     /**
     * @var string
     * @Type("string")
     * @SerializedName("token_type")
     */
    private $tokenType;
     /**
     * @var string
     * @Type("string")
     * @SerializedName("scope")
     */
    private $scope;
     /**
     * @var string
     * @Type("string")
     * @SerializedName("refresh_token")
     */
    private $refreshToken;


	/**
	 * 
	 * @return string
	 */
	public function getAccessToken() {
		return $this->accessToken;
	}
	
	/**
	 * 
	 * @param string $accessToken 
	 * @return self
	 */
	public function setAccessToken($accessToken): self {
		$this->accessToken = $accessToken;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getExpiresIn() {
		return $this->expiresIn;
	}
	
	/**
	 * 
	 * @param int $expiresIn 
	 * @return self
	 */
	public function setExpiresIn($expiresIn): self {
		$this->expiresIn = $expiresIn;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTokenType() {
		return $this->tokenType;
	}
	
	/**
	 * 
	 * @param string $tokenType 
	 * @return self
	 */
	public function setTokenType($tokenType): self {
		$this->tokenType = $tokenType;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getScope() {
		return $this->scope;
	}
	
	/**
	 * 
	 * @param string $scope 
	 * @return self
	 */
	public function setScope($scope): self {
		$this->scope = $scope;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getRefreshToken() {
		return $this->refreshToken;
	}
	
	/**
	 * 
	 * @param string $refreshToken 
	 * @return self
	 */
	public function setRefreshToken($refreshToken): self {
		$this->refreshToken = $refreshToken;
		return $this;
	}

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	/**
	 * @return array
	 */
	public function serializeToArray() : array {
		return json_decode(SerializerBuilder::create()->build()->serialize($this, 'json'));
	}
	
	/**
	 * @return Token
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return Token
	 */
	public static function deserializeFromArray(array $data) {
		return SerializerBuilder::create()->build()->deserialize(json_encode($data), self::class, 'json');
	}
}