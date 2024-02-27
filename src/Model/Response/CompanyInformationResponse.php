<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\CompanyInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class CompanyInformationResponse implements SerializableInterface
{
	/**
	 * @var CompanyInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\CompanyInformation")
	 * @SerializedName("CompanyInformation")
	 */
	private CompanyInformation $companyInformation;

	/**
	 *
	 * @return CompanyInformation
	 */
	public function getCompanyInformation(): CompanyInformation
	{
		return $this->companyInformation;
	}

	/**
	 *
	 * @param CompanyInformation $companyInformation
	 * @return self
	 */
	public function setCompanyInformation(CompanyInformation $companyInformation): self
	{
		$this->companyInformation = $companyInformation;
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
	 * @return CompanyInformationResponse
	 */
	public static function deserialize(string $data): CompanyInformationResponse
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
	 * @return CompanyInformationResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
