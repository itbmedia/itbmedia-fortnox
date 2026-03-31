<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\CompanySettings;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerBuilder;

class CompanySettingsResponse implements SerializableInterface
{
	/**
	 * @var CompanySettings
	 * @Type("ITBMedia\FortnoxBundle\Model\CompanySettings")
	 * @SerializedName("CompanySettings")
	 */
	private CompanySettings $companySettings;

	public function getCompanySettings(): CompanySettings
	{
		return $this->companySettings;
	}

	public function setCompanySettings(CompanySettings $companySettings): self
	{
		$this->companySettings = $companySettings;
		return $this;
	}

	public function serialize()
	{
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	public static function deserialize(string $data): CompanySettingsResponse
	{
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	public function toArray(): array
	{
		return SerializerBuilder::create()->build()->toArray($this);
	}

	public static function fromArray(array $data): CompanySettingsResponse
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
