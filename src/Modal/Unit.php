<?php
namespace ITBMedia\FortnoxBundle\Modal;

use ITBMedia\FortnoxBundle\Modal\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Unit implements SerializableInterface 
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@url")
     */
    private $url;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Code")
     */
	private $code;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Description")
     */
	private $description;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CodeEnglish")
     */
	private $codeEnglish;

	/**
	 * 
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
	
	/**
	 * 
	 * @param string $url 
	 * @return self
	 */
	public function setUrl($url): self {
		$this->url = $url;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCode() {
		return $this->code;
	}
	
	/**
	 * 
	 * @param string $code 
	 * @return self
	 */
	public function setCode($code): self {
		$this->code = $code;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * 
	 * @param string $description 
	 * @return self
	 */
	public function setDescription($description): self {
		$this->description = $description;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCodeEnglish() {
		return $this->codeEnglish;
	}
	
	/**
	 * 
	 * @param string $codeEnglish 
	 * @return self
	 */
	public function setCodeEnglish($codeEnglish): self {
		$this->codeEnglish = $codeEnglish;
		return $this;
	}

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return Unit
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
}