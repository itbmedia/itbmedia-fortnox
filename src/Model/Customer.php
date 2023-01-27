<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Customer implements SerializableInterface
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@url")
     */
    private $url;
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
     * @SerializedName("City")
     */
	private $city;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Country")
     */
	private $country;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Comments")
     */
	private $comments;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Currency")
     */
	private $currency;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     */
	private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CountryCode")
     */
	private $countryCode;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Active")
     */
	private $active;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerNumber")
     */
	private $customerNumber;
    /**
     * @var array
     * @Type("array<string, string>")
     * @SerializedName("DefaultDeliveryTypes")
     */
	private $defaultDeliveryTypes;
    /**
     * @var array
     * @Type("array<string, string>")
     * @SerializedName("DefaultTemplates")
     */
	private $defaultTemplates;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryAddress1")
     */
	private $deliveryAddress1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryAddress2")
     */
	private $deliveryAddress2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCity")
     */
	private $deliveryCity;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCountry")
     */
	private $deliveryCountry;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCountryCode")
     */
	private $deliveryCountryCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryFax")
     */
	private $deliveryFax;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryName")
     */
	private $deliveryName;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryPhone1")
     */
	private $deliveryPhone1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryPhone2")
     */
	private $deliveryPhone2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryZipCode")
     */
	private $deliveryZipCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Email")
     */
	private $email;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailInvoice")
     */
	private $emailInvoice;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailInvoiceBCC")
     */
	private $emailInvoiceBCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailInvoiceCC")
     */
	private $emailInvoiceCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailOffer")
     */
	private $emailOffer;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailOfferBCC")
     */
	private $emailOfferBCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailOfferCC")
     */
	private $emailOfferCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailOrder")
     */
	private $emailOrder;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailOrderBCC")
     */
	private $emailOrderBCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailOrderCC")
     */
	private $emailOrderCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalReference")
     */
	private $externalReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Fax")
     */
	private $fax;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("GLN")
     */
	private $gln;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("GLNDelivery")
     */
	private $glnDelivery;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceAdministrationFee")
     */
	private $invoiceAdministrationFee;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("InvoiceDiscount")
     */
	private $invoiceDiscount;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceFreight")
     */
	private $invoiceFreight;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceRemark")
     */
	private $invoiceRemark;
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
     * @SerializedName("PriceList")
     */
	private $priceList;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     */
	private $project;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("SalesAccount")
     */
	private $salesAccount;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("ShowPriceVATIncluded")
     */
	private $showPriceVATIncluded;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfDelivery")
     */
	private $termsOfDelivery;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfPayment")
     */
	private $termsOfPayment;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Type")
     */
	private $type;
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
     * @SerializedName("WayOfDelivery")
     */
	private $wayOfDelivery;
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
	public function getCustomerNumber() {
		return $this->customerNumber;
	}
	
	/**
	 * 
	 * @param string $customerNumber 
	 * @return self
	 */
	public function setCustomerNumber($customerNumber): self {
		$this->customerNumber = $customerNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return array
	 */
	public function getDefaultDeliveryTypes() {
		return $this->defaultDeliveryTypes;
	}
	
	/**
	 * 
	 * @param array $defaultDeliveryTypes 
	 * @return self
	 */
	public function setDefaultDeliveryTypes($defaultDeliveryTypes): self {
		$this->defaultDeliveryTypes = $defaultDeliveryTypes;
		return $this;
	}
	
	/**
	 * 
	 * @return array
	 */
	public function getDefaultTemplates() {
		return $this->defaultTemplates;
	}
	
	/**
	 * 
	 * @param array $defaultTemplates 
	 * @return self
	 */
	public function setDefaultTemplates($defaultTemplates): self {
		$this->defaultTemplates = $defaultTemplates;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryAddress1() {
		return $this->deliveryAddress1;
	}
	
	/**
	 * 
	 * @param string $deliveryAddress1 
	 * @return self
	 */
	public function setDeliveryAddress1($deliveryAddress1): self {
		$this->deliveryAddress1 = $deliveryAddress1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryAddress2() {
		return $this->deliveryAddress2;
	}
	
	/**
	 * 
	 * @param string $deliveryAddress2 
	 * @return self
	 */
	public function setDeliveryAddress2($deliveryAddress2): self {
		$this->deliveryAddress2 = $deliveryAddress2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryCity() {
		return $this->deliveryCity;
	}
	
	/**
	 * 
	 * @param string $deliveryCity 
	 * @return self
	 */
	public function setDeliveryCity($deliveryCity): self {
		$this->deliveryCity = $deliveryCity;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryCountry() {
		return $this->deliveryCountry;
	}
	
	/**
	 * 
	 * @param string $deliveryCountry 
	 * @return self
	 */
	public function setDeliveryCountry($deliveryCountry): self {
		$this->deliveryCountry = $deliveryCountry;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryCountryCode() {
		return $this->deliveryCountryCode;
	}
	
	/**
	 * 
	 * @param string $deliveryCountryCode 
	 * @return self
	 */
	public function setDeliveryCountryCode($deliveryCountryCode): self {
		$this->deliveryCountryCode = $deliveryCountryCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryFax() {
		return $this->deliveryFax;
	}
	
	/**
	 * 
	 * @param string $deliveryFax 
	 * @return self
	 */
	public function setDeliveryFax($deliveryFax): self {
		$this->deliveryFax = $deliveryFax;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryName() {
		return $this->deliveryName;
	}
	
	/**
	 * 
	 * @param string $deliveryName 
	 * @return self
	 */
	public function setDeliveryName($deliveryName): self {
		$this->deliveryName = $deliveryName;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryPhone1() {
		return $this->deliveryPhone1;
	}
	
	/**
	 * 
	 * @param string $deliveryPhone1 
	 * @return self
	 */
	public function setDeliveryPhone1($deliveryPhone1): self {
		$this->deliveryPhone1 = $deliveryPhone1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryPhone2() {
		return $this->deliveryPhone2;
	}
	
	/**
	 * 
	 * @param string $deliveryPhone2 
	 * @return self
	 */
	public function setDeliveryPhone2($deliveryPhone2): self {
		$this->deliveryPhone2 = $deliveryPhone2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryZipCode() {
		return $this->deliveryZipCode;
	}
	
	/**
	 * 
	 * @param string $deliveryZipCode 
	 * @return self
	 */
	public function setDeliveryZipCode($deliveryZipCode): self {
		$this->deliveryZipCode = $deliveryZipCode;
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
	public function getEmailInvoice() {
		return $this->emailInvoice;
	}
	
	/**
	 * 
	 * @param string $emailInvoice 
	 * @return self
	 */
	public function setEmailInvoice($emailInvoice): self {
		$this->emailInvoice = $emailInvoice;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailInvoiceBCC() {
		return $this->emailInvoiceBCC;
	}
	
	/**
	 * 
	 * @param string $emailInvoiceBCC 
	 * @return self
	 */
	public function setEmailInvoiceBCC($emailInvoiceBCC): self {
		$this->emailInvoiceBCC = $emailInvoiceBCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailInvoiceCC() {
		return $this->emailInvoiceCC;
	}
	
	/**
	 * 
	 * @param string $emailInvoiceCC 
	 * @return self
	 */
	public function setEmailInvoiceCC($emailInvoiceCC): self {
		$this->emailInvoiceCC = $emailInvoiceCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailOffer() {
		return $this->emailOffer;
	}
	
	/**
	 * 
	 * @param string $emailOffer 
	 * @return self
	 */
	public function setEmailOffer($emailOffer): self {
		$this->emailOffer = $emailOffer;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailOfferBCC() {
		return $this->emailOfferBCC;
	}
	
	/**
	 * 
	 * @param string $emailOfferBCC 
	 * @return self
	 */
	public function setEmailOfferBCC($emailOfferBCC): self {
		$this->emailOfferBCC = $emailOfferBCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailOfferCC() {
		return $this->emailOfferCC;
	}
	
	/**
	 * 
	 * @param string $emailOfferCC 
	 * @return self
	 */
	public function setEmailOfferCC($emailOfferCC): self {
		$this->emailOfferCC = $emailOfferCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailOrder() {
		return $this->emailOrder;
	}
	
	/**
	 * 
	 * @param string $emailOrder 
	 * @return self
	 */
	public function setEmailOrder($emailOrder): self {
		$this->emailOrder = $emailOrder;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailOrderBCC() {
		return $this->emailOrderBCC;
	}
	
	/**
	 * 
	 * @param string $emailOrderBCC 
	 * @return self
	 */
	public function setEmailOrderBCC($emailOrderBCC): self {
		$this->emailOrderBCC = $emailOrderBCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailOrderCC() {
		return $this->emailOrderCC;
	}
	
	/**
	 * 
	 * @param string $emailOrderCC 
	 * @return self
	 */
	public function setEmailOrderCC($emailOrderCC): self {
		$this->emailOrderCC = $emailOrderCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getExternalReference() {
		return $this->externalReference;
	}
	
	/**
	 * 
	 * @param string $externalReference 
	 * @return self
	 */
	public function setExternalReference($externalReference): self {
		$this->externalReference = $externalReference;
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
	public function getGln() {
		return $this->gln;
	}
	
	/**
	 * 
	 * @param string $gln 
	 * @return self
	 */
	public function setGln($gln): self {
		$this->gln = $gln;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getGlnDelivery() {
		return $this->glnDelivery;
	}
	
	/**
	 * 
	 * @param string $glnDelivery 
	 * @return self
	 */
	public function setGlnDelivery($glnDelivery): self {
		$this->glnDelivery = $glnDelivery;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoiceAdministrationFee() {
		return $this->invoiceAdministrationFee;
	}
	
	/**
	 * 
	 * @param string $invoiceAdministrationFee 
	 * @return self
	 */
	public function setInvoiceAdministrationFee($invoiceAdministrationFee): self {
		$this->invoiceAdministrationFee = $invoiceAdministrationFee;
		return $this;
	}
	
	/**
	 * 
	 * @return double
	 */
	public function getInvoiceDiscount() {
		return $this->invoiceDiscount;
	}
	
	/**
	 * 
	 * @param double $invoiceDiscount 
	 * @return self
	 */
	public function setInvoiceDiscount($invoiceDiscount): self {
		$this->invoiceDiscount = $invoiceDiscount;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoiceFreight() {
		return $this->invoiceFreight;
	}
	
	/**
	 * 
	 * @param string $invoiceFreight 
	 * @return self
	 */
	public function setInvoiceFreight($invoiceFreight): self {
		$this->invoiceFreight = $invoiceFreight;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoiceRemark() {
		return $this->invoiceRemark;
	}
	
	/**
	 * 
	 * @param string $invoiceRemark 
	 * @return self
	 */
	public function setInvoiceRemark($invoiceRemark): self {
		$this->invoiceRemark = $invoiceRemark;
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
	public function getPriceList() {
		return $this->priceList;
	}
	
	/**
	 * 
	 * @param string $priceList 
	 * @return self
	 */
	public function setPriceList($priceList): self {
		$this->priceList = $priceList;
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
	public function getSalesAccount() {
		return $this->salesAccount;
	}
	
	/**
	 * 
	 * @param string $salesAccount 
	 * @return self
	 */
	public function setSalesAccount($salesAccount): self {
		$this->salesAccount = $salesAccount;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getShowPriceVATIncluded() {
		return $this->showPriceVATIncluded;
	}
	
	/**
	 * 
	 * @param bool $showPriceVATIncluded 
	 * @return self
	 */
	public function setShowPriceVATIncluded($showPriceVATIncluded): self {
		$this->showPriceVATIncluded = $showPriceVATIncluded;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTermsOfDelivery() {
		return $this->termsOfDelivery;
	}
	
	/**
	 * 
	 * @param string $termsOfDelivery 
	 * @return self
	 */
	public function setTermsOfDelivery($termsOfDelivery): self {
		$this->termsOfDelivery = $termsOfDelivery;
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
	public function getType() {
		return $this->type;
	}
	
	/**
	 * 
	 * @param string $type 
	 * @return self
	 */
	public function setType($type): self {
		$this->type = $type;
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
	public function getWayOfDelivery() {
		return $this->wayOfDelivery;
	}
	
	/**
	 * 
	 * @param string $wayOfDelivery 
	 * @return self
	 */
	public function setWayOfDelivery($wayOfDelivery): self {
		$this->wayOfDelivery = $wayOfDelivery;
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
	 * @return Customer
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
}
