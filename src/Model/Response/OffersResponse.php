<?php
namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class OffersResponse implements SerializableInterface 
{
     /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\Offer>")
     * @SerializedName("Offers")
     */
    private array $offers;

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
	public function getOffers(): array {
		return $this->offers;
	}
	
	/**
	 * 
	 * @param array $offers 
	 * @return self
	 */
	public function setOffers(array $offers): self {
		$this->offers = $offers;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return OffersResponse
	 */
	public static function deserialize(string $data) : OffersResponse {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return array
	 */
	public function toArray() : array {
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return OffersResponse
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}