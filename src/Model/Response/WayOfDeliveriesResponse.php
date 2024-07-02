<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\WayOfDelivery;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class WayOfDeliveriesResponse implements SerializableInterface
{
	/**
	 * @var MetaInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
	 * @SerializedName("MetaInformation")
	 */
	private MetaInformation $metaInformation;

	/**
	 * @var WayOfDelivery[]
	 * @Type("array<ITBMedia\FortnoxBundle\Model\WayOfDelivery>")
	 * @SerializedName("WayOfDeliveries")
	 */
	private array $wayOfDeliveries;

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
	 * @return WayOfDelivery[]
	 */
	public function getWayOfDeliveries(): array
	{
		return $this->wayOfDeliveries;
	}

	/**
	 *
	 * @param WayOfDelivery[] $wayOfDeliveries
	 * @return self
	 */
	public function setWayOfDeliveries(array $wayOfDeliveries): self
	{
		$this->wayOfDeliveries = $wayOfDeliveries;
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
	 * @return WayOfDeliveriesResponse
	 */
	public static function deserialize(string $data): WayOfDeliveriesResponse
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
	 * @return WayOfDeliveriesResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
