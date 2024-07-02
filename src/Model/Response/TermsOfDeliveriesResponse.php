<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\TermOfDelivery;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class TermsOfDeliveriesResponse implements SerializableInterface
{
	/**
	 * @var MetaInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
	 * @SerializedName("MetaInformation")
	 */
	private MetaInformation $metaInformation;

	/**
	 * @var TermOfDelivery[]
	 * @Type("array<ITBMedia\FortnoxBundle\Model\TermOfDelivery>")
	 * @SerializedName("TermsOfDeliveries")
	 */
	private array $termsOfDeliveries;

	/**
	 *
	 * @return MetaInformation
	 */
	public function getMetaInformation(): MetaInformation
	{
		return $this->metaInformation;
	}

	/**
	 *
	 * @param MetaInformation $metaInformation
	 * @return self
	 */
	public function setMetaInformation(MetaInformation $metaInformation): self
	{
		$this->metaInformation = $metaInformation;
		return $this;
	}

	/**
	 *
	 * @return TermOfDelivery[]
	 */
	public function getTermsOfDeliveries(): array
	{
		return $this->termsOfDeliveries;
	}

	/**
	 *
	 * @param TermOfDelivery[] $termsOfDeliveries
	 * @return self
	 */
	public function setTermsOfDeliveries(array $termsOfDeliveries): self
	{
		$this->termsOfDeliveries = $termsOfDeliveries;
		return $this;
	}

	/**
	 * @return string
	 */
	public function serialize()
	{
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	/**
	 * @return TermsOfDeliveriesResponse
	 */
	public static function deserialize(string $data): TermsOfDeliveriesResponse
	{
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return array
	 */
	public function toArray(): array
	{
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return TermsOfDeliveriesResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
