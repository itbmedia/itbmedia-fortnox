<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\PriceList;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class PriceListsResponse implements SerializableInterface
{
	/**
	 * @var MetaInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
	 * @SerializedName("MetaInformation")
	 */
	private MetaInformation $metaInformation;

	/**
	 * @var PriceList[]
	 * @Type("array<ITBMedia\FortnoxBundle\Model\PriceList>")
	 * @SerializedName("PriceLists")
	 */
	private array $priceLists;

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
	 * @return PriceList[]
	 */
	public function getPriceLists(): array
	{
		return $this->priceLists;
	}

	/**
	 *
	 * @param PriceList[] $priceLists
	 * @return self
	 */
	public function setPriceLists(array $priceLists): self
	{
		$this->priceLists = $priceLists;
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
	 * @return PriceListsResponse
	 */
	public static function deserialize(string $data): PriceListsResponse
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
	 * @return PriceListsResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
