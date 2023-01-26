<?php
namespace ITBMedia\FortnoxBundle\Modal\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Modal\MetaInformation;
use ITBMedia\FortnoxBundle\Modal\SerializableInterface;

class AticlesResponse implements SerializableInterface 
{
     /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Modal\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Modal\Article>")
     * @SerializedName("Articles")
     */
    private array $articles;

    /**
	 * 
	 * @return MetaInformation
	 */
	public function getMetaInformation(): MetaInformation {
		return $this->metaInformation;
	}
	
	/**
	 * 
	 * @param MetaInformation $metaInformation 
	 * @return self
	 */
	public function setMetaInformation(MetaInformation $metaInformation): self {
		$this->metaInformation = $metaInformation;
		return $this;
	}

	/**
	 * 
	 * @return array
	 */
	public function getArticles(): array {
		return $this->articles;
	}
	
	/**
	 * 
	 * @param array $articles 
	 * @return self
	 */
	public function setArticles(array $articles): self {
		$this->articles = $articles;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return AticlesResponse
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}	
}