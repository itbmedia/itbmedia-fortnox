<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\ContractTemplate;
use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class ContractTemplatesResponse implements SerializableInterface
{
	/**
	 * @var MetaInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
	 * @SerializedName("MetaInformation")
	 */
	private MetaInformation $metaInformation;

	/**
	 * @var ContractTemplate[]
	 * @Type("array<ITBMedia\FortnoxBundle\Model\ContractTemplate>")
	 * @SerializedName("ContractTemplates")
	 */
	private array $contractTemplates;

	public function getMetaInformation(): MetaInformation
	{
		return $this->metaInformation;
	}

	public function setMetaInformation(MetaInformation $metaInformation): self
	{
		$this->metaInformation = $metaInformation;
		return $this;
	}

	/**
	 * @return ContractTemplate[]
	 */
	public function getContractTemplates(): array
	{
		return $this->contractTemplates;
	}

	/**
	 * @param ContractTemplate[] $contractTemplates
	 */
	public function setContractTemplates(array $contractTemplates): self
	{
		$this->contractTemplates = $contractTemplates;
		return $this;
	}

	public function serialize()
	{
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	public static function deserialize(string $data): ContractTemplatesResponse
	{
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	public function toArray(): array
	{
		return SerializerBuilder::create()->build()->toArray($this);
	}

	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
