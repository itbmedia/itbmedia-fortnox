<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class CompanyInformation implements SerializableInterface
{
	/**
	 * @var int
	 * @Type("int")
	 * @SerializedName("DatabaseNumber")
	 */
	private int $databaseNumber;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Address")
	 */
	private ?string $address = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("City")
	 */
	private ?string $city = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("CountryCode")
	 */
	private ?string $countryCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("CompanyName")
	 */
	private ?string $companyName = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("OrganizationNumber")
	 */
	private ?string $organizationNumber = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitAddress")
	 */
	private ?string $visitAddress = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitCity")
	 */
	private ?string $visitCity = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitCountryCode")
	 */
	private ?string $visitCountryCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitZipCode")
	 */
	private ?string $visitZipCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("ZipCode")
	 */
	private ?string $zipCode = null;

	/**
	 * @return int
	 */
	public function getDatabaseNumber(): int
	{
		return $this->databaseNumber;
	}

	/**
	 * @param int $databaseNumber
	 * @return self
	 */
	public function setDatabaseNumber(int $databaseNumber): self
	{
		$this->databaseNumber = $databaseNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddress(): ?string
	{
		return $this->address;
	}

	/**
	 * @param string $address
	 * @return self
	 */
	public function setAddress(string $address): self
	{
		$this->address = $address;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity(): ?string
	{
		return $this->city;
	}

	/**
	 * @param string $city
	 * @return self
	 */
	public function setCity(?string $city): self
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	/**
	 * @param string $countryCode
	 * @return self
	 */
	public function setCountryCode(?string $countryCode): self
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCompanyName(): ?string
	{
		return $this->companyName;
	}

	/**
	 * @param string $companyName
	 * @return self
	 */
	public function setCompanyName(?string $companyName): self
	{
		$this->companyName = $companyName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getOrganizationNumber(): ?string
	{
		return $this->organizationNumber;
	}

	/**
	 * @param string $organizationNumber
	 * @return self
	 */
	public function setOrganizationNumber(?string $organizationNumber): self
	{
		$this->organizationNumber = $organizationNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVisitAddress(): ?string
	{
		return $this->visitAddress;
	}

	/**
	 * @param string $visitAddress
	 * @return self
	 */
	public function setVisitAddress(?string $visitAddress): self
	{
		$this->visitAddress = $visitAddress;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVisitCity(): ?string
	{
		return $this->visitCity;
	}

	/**
	 * @param string $visitCity
	 * @return self
	 */
	public function setVisitCity(?string $visitCity): self
	{
		$this->visitCity = $visitCity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVisitCountryCode(): ?string
	{
		return $this->visitCountryCode;
	}

	/**
	 * @param string $visitCountryCode
	 * @return self
	 */
	public function setVisitCountryCode(?string $visitCountryCode): self
	{
		$this->visitCountryCode = $visitCountryCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getVisitZipCode(): ?string
	{
		return $this->visitZipCode;
	}

	/**
	 * @param string $visitZipCode
	 * @return self
	 */
	public function setVisitZipCode(?string $visitZipCode): self
	{
		$this->visitZipCode = $visitZipCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getZipCode(): ?string
	{
		return $this->zipCode;
	}

	/**
	 * @param string $zipCode
	 * @return self
	 */
	public function setZipCode(?string $zipCode): self
	{
		$this->zipCode = $zipCode;
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
	public static function deserialize(?string $data): CompanyInformationResponse
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
