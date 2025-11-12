<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\Currency;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class CurrenciesResponse implements SerializableInterface
{
	/**
	 * @var MetaInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
	 * @SerializedName("MetaInformation")
	 */
	private MetaInformation $metaInformation;

	/**
	 * @var Currency[]
	 * @Type("array<ITBMedia\FortnoxBundle\Model\Currency>")
	 * @SerializedName("Currencies")
	 */
	private array $currencies;

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
	 * @return Currency[]
	 */
	public function getCurrencies(): array
	{
		return $this->currencies;
	}

	/**
	 *
	 * @param Currency[] $currencies
	 * @return self
	 */
	public function setCurrencies(array $currencies): self
	{
		$this->currencies = $currencies;
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
	 * @return CurrenciesResponse
	 */
	public static function deserialize(string $data): CurrenciesResponse
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
	 * @return CurrenciesResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
