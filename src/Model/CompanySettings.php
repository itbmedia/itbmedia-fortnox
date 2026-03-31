<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerBuilder;

class CompanySettings implements SerializableInterface
{
	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Address")
	 */
	private ?string $address = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("BG")
	 */
	private ?string $bg = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("BIC")
	 */
	private ?string $bic = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("BranchCode")
	 */
	private ?string $branchCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("City")
	 */
	private ?string $city = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("ContactFirstName")
	 */
	private ?string $contactFirstName = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("ContactLastName")
	 */
	private ?string $contactLastName = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Country")
	 */
	private ?string $country = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("CountryCode")
	 */
	private ?string $countryCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("DatabaseNumber")
	 */
	private ?string $databaseNumber = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Domicile")
	 */
	private ?string $domicile = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Email")
	 */
	private ?string $email = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Fax")
	 */
	private ?string $fax = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("IBAN")
	 */
	private ?string $iban = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Name")
	 */
	private ?string $name = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("OrganizationNumber")
	 */
	private ?string $organizationNumber = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("PG")
	 */
	private ?string $pg = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Phone1")
	 */
	private ?string $phone1 = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("Phone2")
	 */
	private ?string $phone2 = null;

	/**
	 * @var bool|null
	 * @Type("bool")
	 * @SerializedName("TaxEnabled")
	 */
	private ?bool $taxEnabled = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VATNumber")
	 */
	private ?string $vatNumber = null;

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
	 * @SerializedName("VisitCountry")
	 */
	private ?string $visitCountry = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitCountryCode")
	 */
	private ?string $visitCountryCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitName")
	 */
	private ?string $visitName = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("VisitZipCode")
	 */
	private ?string $visitZipCode = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("WWW")
	 */
	private ?string $www = null;

	/**
	 * @var string|null
	 * @Type("string")
	 * @SerializedName("ZipCode")
	 */
	private ?string $zipCode = null;

	public function getAddress(): ?string
	{
		return $this->address;
	}

	public function setAddress(?string $address): self
	{
		$this->address = $address;
		return $this;
	}

	public function getBG(): ?string
	{
		return $this->bg;
	}

	public function setBG(?string $bg): self
	{
		$this->bg = $bg;
		return $this;
	}

	public function getBIC(): ?string
	{
		return $this->bic;
	}

	public function setBIC(?string $bic): self
	{
		$this->bic = $bic;
		return $this;
	}

	public function getBranchCode(): ?string
	{
		return $this->branchCode;
	}

	public function setBranchCode(?string $branchCode): self
	{
		$this->branchCode = $branchCode;
		return $this;
	}

	public function getCity(): ?string
	{
		return $this->city;
	}

	public function setCity(?string $city): self
	{
		$this->city = $city;
		return $this;
	}

	public function getContactFirstName(): ?string
	{
		return $this->contactFirstName;
	}

	public function setContactFirstName(?string $contactFirstName): self
	{
		$this->contactFirstName = $contactFirstName;
		return $this;
	}

	public function getContactLastName(): ?string
	{
		return $this->contactLastName;
	}

	public function setContactLastName(?string $contactLastName): self
	{
		$this->contactLastName = $contactLastName;
		return $this;
	}

	public function getCountry(): ?string
	{
		return $this->country;
	}

	public function setCountry(?string $country): self
	{
		$this->country = $country;
		return $this;
	}

	public function getCountryCode(): ?string
	{
		return $this->countryCode;
	}

	public function setCountryCode(?string $countryCode): self
	{
		$this->countryCode = $countryCode;
		return $this;
	}

	public function getDatabaseNumber(): ?string
	{
		return $this->databaseNumber;
	}

	public function setDatabaseNumber(?string $databaseNumber): self
	{
		$this->databaseNumber = $databaseNumber;
		return $this;
	}

	public function getDomicile(): ?string
	{
		return $this->domicile;
	}

	public function setDomicile(?string $domicile): self
	{
		$this->domicile = $domicile;
		return $this;
	}

	public function getEmail(): ?string
	{
		return $this->email;
	}

	public function setEmail(?string $email): self
	{
		$this->email = $email;
		return $this;
	}

	public function getFax(): ?string
	{
		return $this->fax;
	}

	public function setFax(?string $fax): self
	{
		$this->fax = $fax;
		return $this;
	}

	public function getIBAN(): ?string
	{
		return $this->iban;
	}

	public function setIBAN(?string $iban): self
	{
		$this->iban = $iban;
		return $this;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setName(?string $name): self
	{
		$this->name = $name;
		return $this;
	}

	public function getOrganizationNumber(): ?string
	{
		return $this->organizationNumber;
	}

	public function setOrganizationNumber(?string $organizationNumber): self
	{
		$this->organizationNumber = $organizationNumber;
		return $this;
	}

	public function getPG(): ?string
	{
		return $this->pg;
	}

	public function setPG(?string $pg): self
	{
		$this->pg = $pg;
		return $this;
	}

	public function getPhone1(): ?string
	{
		return $this->phone1;
	}

	public function setPhone1(?string $phone1): self
	{
		$this->phone1 = $phone1;
		return $this;
	}

	public function getPhone2(): ?string
	{
		return $this->phone2;
	}

	public function setPhone2(?string $phone2): self
	{
		$this->phone2 = $phone2;
		return $this;
	}

	public function getTaxEnabled(): ?bool
	{
		return $this->taxEnabled;
	}

	public function setTaxEnabled(?bool $taxEnabled): self
	{
		$this->taxEnabled = $taxEnabled;
		return $this;
	}

	public function getVATNumber(): ?string
	{
		return $this->vatNumber;
	}

	public function setVATNumber(?string $vatNumber): self
	{
		$this->vatNumber = $vatNumber;
		return $this;
	}

	public function getVisitAddress(): ?string
	{
		return $this->visitAddress;
	}

	public function setVisitAddress(?string $visitAddress): self
	{
		$this->visitAddress = $visitAddress;
		return $this;
	}

	public function getVisitCity(): ?string
	{
		return $this->visitCity;
	}

	public function setVisitCity(?string $visitCity): self
	{
		$this->visitCity = $visitCity;
		return $this;
	}

	public function getVisitCountry(): ?string
	{
		return $this->visitCountry;
	}

	public function setVisitCountry(?string $visitCountry): self
	{
		$this->visitCountry = $visitCountry;
		return $this;
	}

	public function getVisitCountryCode(): ?string
	{
		return $this->visitCountryCode;
	}

	public function setVisitCountryCode(?string $visitCountryCode): self
	{
		$this->visitCountryCode = $visitCountryCode;
		return $this;
	}

	public function getVisitName(): ?string
	{
		return $this->visitName;
	}

	public function setVisitName(?string $visitName): self
	{
		$this->visitName = $visitName;
		return $this;
	}

	public function getVisitZipCode(): ?string
	{
		return $this->visitZipCode;
	}

	public function setVisitZipCode(?string $visitZipCode): self
	{
		$this->visitZipCode = $visitZipCode;
		return $this;
	}

	public function getWWW(): ?string
	{
		return $this->www;
	}

	public function setWWW(?string $www): self
	{
		$this->www = $www;
		return $this;
	}

	public function getZipCode(): ?string
	{
		return $this->zipCode;
	}

	public function setZipCode(?string $zipCode): self
	{
		$this->zipCode = $zipCode;
		return $this;
	}

	public function serialize()
	{
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	public static function deserialize(string $data): CompanySettings
	{
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	public function toArray(): array
	{
		return SerializerBuilder::create()->build()->toArray($this);
	}

	public static function fromArray(array $data): CompanySettings
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
