<?php
namespace ITBMedia\FortnoxBundle\Modal\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Modal\Article;
use ITBMedia\FortnoxBundle\Modal\MetaInformation;
use ITBMedia\FortnoxBundle\Modal\SerializableInterface;

class AticlesResponse implements SerializableInterface 
{
     /**
     * @var MetaInformation
     * @Type("MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var array
     * @Type("array<Articles>")
     * @SerializedName("Articles")
     */
    private array $articles;
	
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