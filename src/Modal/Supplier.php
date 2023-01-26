<?php
namespace ITBMedia\FortnoxBundle\Modal;

use ITBMedia\FortnoxBundle\Modal\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Supplier implements SerializableInterface
{
     /**
     * @var string
     * @Type("string")
     * @SerializedName("@url")
     */
    private $url;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Active")
     */
	private $active;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Address1")
     */
	private $address1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Address2")
     */
	private $address2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Bank")
     */
	private $bank;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("BankAccountNumber")
     */
	private $bankAccountNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("BG")
     */
	private $bg;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("BIC")
     */
	private $bic;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("BranchCode")
     */
	private $branchCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("City")
     */
	private $city;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ClearingNumber")
     */
	private $clearingNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Comments")
     */
	private $comments;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     */
	private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Country")
     */
	private $country;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CountryCode")
     */
	private $countryCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Currency")
     */
	private $currency;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("DisablePaymentFile")
     */
	private $disablePaymentFile;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Email")
     */
	private $email;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Fax")
     */
	private $fax;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("IBAN")
     */
	private $iban;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Name")
     */
	private $name;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrganisationNumber")
     */
	private $organisationNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OurReference")
     */
	private $ourReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OurCustomerNumber")
     */
	private $ourCustomerNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PG")
     */
	private $pg;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Phone1")
     */
	private $phone1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Phone2")
     */
	private $phone2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PreDefinedAccount")
     */
	private $preDefinedAccount;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     */
	private $project;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("SupplierNumber")
     */
	private $supplierNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfPayment")
     */
	private $termsOfPayment;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VATNumber")
     */
	private $vatNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VATType")
     */
	private $vatType;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VisitingAddress")
     */
	private $visitingAddress;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VisitingCity")
     */
	private $visitingCity;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VisitingCountry")
     */
	private $visitingCountry;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VisitingCountryCode")
     */
	private $visitingCountryCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VisitingZipCode")
     */
	private $visitingZipCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("WorkPlace")
     */
	private $workPlace;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("WWW")
     */
	private $www;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourReference")
     */
	private $yourReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ZipCode")
     */
	private $zipCode;

	/**
	 * 
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
	
	/**
	 * 
	 * @param string $url 
	 * @return self
	 */
	public function setUrl($url): self {
		$this->url = $url;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getActive() {
		return $this->active;
	}
	
	/**
	 * 
	 * @param bool $active 
	 * @return self
	 */
	public function setActive($active): self {
		$this->active = $active;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getAddress1() {
		return $this->address1;
	}
	
	/**
	 * 
	 * @param string $address1 
	 * @return self
	 */
	public function setAddress1($address1): self {
		$this->address1 = $address1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getAddress2() {
		return $this->address2;
	}
	
	/**
	 * 
	 * @param string $address2 
	 * @return self
	 */
	public function setAddress2($address2): self {
		$this->address2 = $address2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getBank() {
		return $this->bank;
	}
	
	/**
	 * 
	 * @param string $bank 
	 * @return self
	 */
	public function setBank($bank): self {
		$this->bank = $bank;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getBankAccountNumber() {
		return $this->bankAccountNumber;
	}
	
	/**
	 * 
	 * @param string $bankAccountNumber 
	 * @return self
	 */
	public function setBankAccountNumber($bankAccountNumber): self {
		$this->bankAccountNumber = $bankAccountNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getBg() {
		return $this->bg;
	}
	
	/**
	 * 
	 * @param string $bg 
	 * @return self
	 */
	public function setBg($bg): self {
		$this->bg = $bg;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getBic() {
		return $this->bic;
	}
	
	/**
	 * 
	 * @param string $bic 
	 * @return self
	 */
	public function setBic($bic): self {
		$this->bic = $bic;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getBranchCode() {
		return $this->branchCode;
	}
	
	/**
	 * 
	 * @param string $branchCode 
	 * @return self
	 */
	public function setBranchCode($branchCode): self {
		$this->branchCode = $branchCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * 
	 * @param string $city 
	 * @return self
	 */
	public function setCity($city): self {
		$this->city = $city;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getClearingNumber() {
		return $this->clearingNumber;
	}
	
	/**
	 * 
	 * @param string $clearingNumber 
	 * @return self
	 */
	public function setClearingNumber($clearingNumber): self {
		$this->clearingNumber = $clearingNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getComments() {
		return $this->comments;
	}
	
	/**
	 * 
	 * @param string $comments 
	 * @return self
	 */
	public function setComments($comments): self {
		$this->comments = $comments;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCostCenter() {
		return $this->costCenter;
	}
	
	/**
	 * 
	 * @param string $costCenter 
	 * @return self
	 */
	public function setCostCenter($costCenter): self {
		$this->costCenter = $costCenter;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCountry() {
		return $this->country;
	}
	
	/**
	 * 
	 * @param string $country 
	 * @return self
	 */
	public function setCountry($country): self {
		$this->country = $country;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}
	
	/**
	 * 
	 * @param string $countryCode 
	 * @return self
	 */
	public function setCountryCode($countryCode): self {
		$this->countryCode = $countryCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCurrency() {
		return $this->currency;
	}
	
	/**
	 * 
	 * @param string $currency 
	 * @return self
	 */
	public function setCurrency($currency): self {
		$this->currency = $currency;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getDisablePaymentFile() {
		return $this->disablePaymentFile;
	}
	
	/**
	 * 
	 * @param bool $disablePaymentFile 
	 * @return self
	 */
	public function setDisablePaymentFile($disablePaymentFile): self {
		$this->disablePaymentFile = $disablePaymentFile;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * 
	 * @param string $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getFax() {
		return $this->fax;
	}
	
	/**
	 * 
	 * @param string $fax 
	 * @return self
	 */
	public function setFax($fax): self {
		$this->fax = $fax;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getIban() {
		return $this->iban;
	}
	
	/**
	 * 
	 * @param string $iban 
	 * @return self
	 */
	public function setIban($iban): self {
		$this->iban = $iban;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * 
	 * @param string $name 
	 * @return self
	 */
	public function setName($name): self {
		$this->name = $name;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOrganisationNumber() {
		return $this->organisationNumber;
	}
	
	/**
	 * 
	 * @param string $organisationNumber 
	 * @return self
	 */
	public function setOrganisationNumber($organisationNumber): self {
		$this->organisationNumber = $organisationNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOurReference() {
		return $this->ourReference;
	}
	
	/**
	 * 
	 * @param string $ourReference 
	 * @return self
	 */
	public function setOurReference($ourReference): self {
		$this->ourReference = $ourReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOurCustomerNumber() {
		return $this->ourCustomerNumber;
	}
	
	/**
	 * 
	 * @param string $ourCustomerNumber 
	 * @return self
	 */
	public function setOurCustomerNumber($ourCustomerNumber): self {
		$this->ourCustomerNumber = $ourCustomerNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPg() {
		return $this->pg;
	}
	
	/**
	 * 
	 * @param string $pg 
	 * @return self
	 */
	public function setPg($pg): self {
		$this->pg = $pg;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPhone1() {
		return $this->phone1;
	}
	
	/**
	 * 
	 * @param string $phone1 
	 * @return self
	 */
	public function setPhone1($phone1): self {
		$this->phone1 = $phone1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPhone2() {
		return $this->phone2;
	}
	
	/**
	 * 
	 * @param string $phone2 
	 * @return self
	 */
	public function setPhone2($phone2): self {
		$this->phone2 = $phone2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPreDefinedAccount() {
		return $this->preDefinedAccount;
	}
	
	/**
	 * 
	 * @param string $preDefinedAccount 
	 * @return self
	 */
	public function setPreDefinedAccount($preDefinedAccount): self {
		$this->preDefinedAccount = $preDefinedAccount;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getProject() {
		return $this->project;
	}
	
	/**
	 * 
	 * @param string $project 
	 * @return self
	 */
	public function setProject($project): self {
		$this->project = $project;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getSupplierNumber() {
		return $this->supplierNumber;
	}
	
	/**
	 * 
	 * @param string $supplierNumber 
	 * @return self
	 */
	public function setSupplierNumber($supplierNumber): self {
		$this->supplierNumber = $supplierNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTermsOfPayment() {
		return $this->termsOfPayment;
	}
	
	/**
	 * 
	 * @param string $termsOfPayment 
	 * @return self
	 */
	public function setTermsOfPayment($termsOfPayment): self {
		$this->termsOfPayment = $termsOfPayment;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVatNumber() {
		return $this->vatNumber;
	}
	
	/**
	 * 
	 * @param string $vatNumber 
	 * @return self
	 */
	public function setVatNumber($vatNumber): self {
		$this->vatNumber = $vatNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVatType() {
		return $this->vatType;
	}
	
	/**
	 * 
	 * @param string $vatType 
	 * @return self
	 */
	public function setVatType($vatType): self {
		$this->vatType = $vatType;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVisitingAddress() {
		return $this->visitingAddress;
	}
	
	/**
	 * 
	 * @param string $visitingAddress 
	 * @return self
	 */
	public function setVisitingAddress($visitingAddress): self {
		$this->visitingAddress = $visitingAddress;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVisitingCity() {
		return $this->visitingCity;
	}
	
	/**
	 * 
	 * @param string $visitingCity 
	 * @return self
	 */
	public function setVisitingCity($visitingCity): self {
		$this->visitingCity = $visitingCity;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVisitingCountry() {
		return $this->visitingCountry;
	}
	
	/**
	 * 
	 * @param string $visitingCountry 
	 * @return self
	 */
	public function setVisitingCountry($visitingCountry): self {
		$this->visitingCountry = $visitingCountry;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVisitingCountryCode() {
		return $this->visitingCountryCode;
	}
	
	/**
	 * 
	 * @param string $visitingCountryCode 
	 * @return self
	 */
	public function setVisitingCountryCode($visitingCountryCode): self {
		$this->visitingCountryCode = $visitingCountryCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVisitingZipCode() {
		return $this->visitingZipCode;
	}
	
	/**
	 * 
	 * @param string $visitingZipCode 
	 * @return self
	 */
	public function setVisitingZipCode($visitingZipCode): self {
		$this->visitingZipCode = $visitingZipCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getWorkPlace() {
		return $this->workPlace;
	}
	
	/**
	 * 
	 * @param string $workPlace 
	 * @return self
	 */
	public function setWorkPlace($workPlace): self {
		$this->workPlace = $workPlace;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getWww() {
		return $this->www;
	}
	
	/**
	 * 
	 * @param string $www 
	 * @return self
	 */
	public function setWww($www): self {
		$this->www = $www;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getYourReference() {
		return $this->yourReference;
	}
	
	/**
	 * 
	 * @param string $yourReference 
	 * @return self
	 */
	public function setYourReference($yourReference): self {
		$this->yourReference = $yourReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getZipCode() {
		return $this->zipCode;
	}
	
	/**
	 * 
	 * @param string $zipCode 
	 * @return self
	 */
	public function setZipCode($zipCode): self {
		$this->zipCode = $zipCode;
		return $this;
	}

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return Supplier
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
}