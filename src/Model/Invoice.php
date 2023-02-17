<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use ITBMedia\FortnoxBundle\Model\EmailInformation;

class Invoice implements SerializableInterface
{   
     /**
     * @var string
     * @Type("string")
     * @SerializedName("@url")
     */
    private string $url;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@urlTaxReductionList")
     */
	private string $urlTaxReductionList;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("AdministrationFee")
     */
	private float $administrationFee;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("AdministrationFeeVAT")
     */
	private float $administrationFeeVat;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Address1")
     */
	private string $address1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Address2")
     */
	private string $address2;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("Balance")
     */
	private float $balance;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("BasisTaxReduction")
     */
	private float $basisTaxReduction;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("Booked")
     */
	private bool $booked;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("Cancelled")
     */
	private bool $cancelled;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("City")
     */
	private string $city;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Comments")
     */
	private string $comments;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("ContractReference")
     */
	private int $contractReference;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("ContributionPercent")
     */
	private float $contributionPercent;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("ContributionValue")
     */
	private float $contributionValue;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Country")
     */
	private string $country;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     */
	private string $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Credit")
     */
	private string $credit;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CreditInvoiceReference")
     */
	private string $creditInvoiceReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Currency")
     */
	private string $currency;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("CurrencyRate")
     */
	private float $currencyRate;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("CurrencyUnit")
     */
	private int $currencyUnit;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerName")
     */
	private string $customerName;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerNumber")
     */
	private string $customerNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryAddress1")
     */
	private string $deliveryAddress1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryAddress2")
     */
	private string $deliveryAddress2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCity")
     */
	private string $deliveryCity;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCountry")
     */
	private string $deliveryCountry;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryDate")
     */
	private string $deliveryDate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryName")
     */
	private string $deliveryName;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryZipCode")
     */
	private string $deliveryZipCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DocumentNumber")
     */
	private string $documentNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DueDate")
     */
	private string $dueDate;
    /**
     * @var EdiInformation
     * @Type("ITBMedia\FortnoxBundle\Model\EDIInformation")
     * @SerializedName("EDIInformation")
     */
	private EdiInformation $ediInformation;
    /**
     * @var EmailInformation
     * @Type("ITBMedia\FortnoxBundle\Model\EmailInformation")
     * @SerializedName("EmailInformation")
     */
	private EmailInformation $emailInformation;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("EUQuarterlyReport")
     */
	private bool $euQuarterlyReport;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference1")
     */
	private string $externalInvoiceReference1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference2")
     */
	private string $externalInvoiceReference2;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("Freight")
     */
	private float $freight;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("FreightVAT")
     */
	private float $freightVat;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("Gross")
     */
	private float $gross;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("HouseWork")
     */
	private bool $houseWork;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceDate")
     */
	private string $invoiceDate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoicePeriodStart")
     */
	private string $invoicePeriodStart;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoicePeriodEnd")
     */
	private string $invoicePeriodEnd;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoicePeriodReference")
     */
	private string $invoicePeriodReference;
    /**
     * @var Invoice[]
     * @Type("array<ITBMedia\FortnoxBundle\Model\Invoice>")
     * @SerializedName("InvoiceRows")
     */
	private array $invoiceRows;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceType")
     */
	private string $invoiceType;
    /**
     * @var array
     * @Type("array<string, int>")
     * @SerializedName("Labels")
     */
	private array $labels;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Language")
     */
	private string $language;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("LastRemindDate")
     */
	private string $lastRemindDate;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("Net")
     */
	private float $net;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("NotCompleted")
     */
	private bool $notCompleted;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("NoxFinans")
     */
	private bool $noxFinans;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OCR")
     */
	private string $ocr;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OfferReference")
     */
	private string $offerReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrderReference")
     */
	private string $orderReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrganisationNumber")
     */
	private string $organisationNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OurReference")
     */
	private string $ourReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PaymentWay")
     */
	private string $paymentWay;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Phone1")
     */
	private string $phone1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Phone2")
     */
	private string $phone2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PriceList")
     */
	private string $priceList;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PrintTemplate")
     */
	private string $printTemplate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     */
	private string $project;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("WarehouseReady")
     */
	private bool $warehouseReady;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OutboundDate")
     */
	private string $outboundDate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Remarks")
     */
	private string $remarks;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("Reminders")
     */
	private int $reminders;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("RoundOff")
     */
	private float $roundOff;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("Sent")
     */
	private bool $sent;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("TaxReduction")
     */
	private int $taxReduction;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfDelivery")
     */
	private string $termsOfDelivery;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfPayment")
     */
	private string $termsOfPayment;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("TimeBasisReference")
     */
	private int $timeBasisReference;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("Total")
     */
	private float $total;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("TotalToPay")
     */
	private float $totalToPay;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("TotalVAT")
     */
	private float $totalVat;
    /**
     * @var bool
     * @Type("bool")
     * @SerializedName("VATIncluded")
     */
	private bool $vatIncluded;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("VoucherNumber")
     */
	private ?int $voucherNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VoucherSeries")
     */
	private string $voucherSeries;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("VoucherYear")
     */
	private int $voucherYear;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("WayOfDelivery")
     */
	private string $wayOfDelivery;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourOrderNumber")
     */
	private string $yourOrderNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourReference")
     */
	private string $yourReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ZipCode")
     */
	private string $zipCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("AccountingMethod")
     */
	private string $accountingMethod;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TaxReductionType")
     */
	private string $taxReductionType;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("FinalPayDate")
     */
	private string $finalPayDate;

	/**
	 * 
	 * @return string
	 */
	public function getUrl(): string {
		return $this->url;
	}
	
	/**
	 * 
	 * @param string $url 
	 * @return self
	 */
	public function setUrl(string $url): self {
		$this->url = $url;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getUrlTaxReductionList(): string {
		return $this->urlTaxReductionList;
	}
	
	/**
	 * 
	 * @param string $urlTaxReductionList 
	 * @return self
	 */
	public function setUrlTaxReductionList(string $urlTaxReductionList): self {
		$this->urlTaxReductionList = $urlTaxReductionList;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getAdministrationFee(): float {
		return $this->administrationFee;
	}
	
	/**
	 * 
	 * @param float $administrationFee 
	 * @return self
	 */
	public function setAdministrationFee(float $administrationFee): self {
		$this->administrationFee = $administrationFee;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getAdministrationFeeVat(): float {
		return $this->administrationFeeVat;
	}
	
	/**
	 * 
	 * @param float $administrationFeeVat 
	 * @return self
	 */
	public function setAdministrationFeeVat(float $administrationFeeVat): self {
		$this->administrationFeeVat = $administrationFeeVat;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getAddress1(): string {
		return $this->address1;
	}
	
	/**
	 * 
	 * @param string $address1 
	 * @return self
	 */
	public function setAddress1(string $address1): self {
		$this->address1 = $address1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getAddress2(): string {
		return $this->address2;
	}
	
	/**
	 * 
	 * @param string $address2 
	 * @return self
	 */
	public function setAddress2(string $address2): self {
		$this->address2 = $address2;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getBalance(): float {
		return $this->balance;
	}
	
	/**
	 * 
	 * @param float $balance 
	 * @return self
	 */
	public function setBalance(float $balance): self {
		$this->balance = $balance;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getBasisTaxReduction(): float {
		return $this->basisTaxReduction;
	}
	
	/**
	 * 
	 * @param float $basisTaxReduction 
	 * @return self
	 */
	public function setBasisTaxReduction(float $basisTaxReduction): self {
		$this->basisTaxReduction = $basisTaxReduction;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getBooked(): bool {
		return $this->booked;
	}
	
	/**
	 * 
	 * @param bool $booked 
	 * @return self
	 */
	public function setBooked(bool $booked): self {
		$this->booked = $booked;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getCancelled(): bool {
		return $this->cancelled;
	}
	
	/**
	 * 
	 * @param bool $cancelled 
	 * @return self
	 */
	public function setCancelled(bool $cancelled): self {
		$this->cancelled = $cancelled;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCity(): string {
		return $this->city;
	}
	
	/**
	 * 
	 * @param string $city 
	 * @return self
	 */
	public function setCity(string $city): self {
		$this->city = $city;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getComments(): string {
		return $this->comments;
	}
	
	/**
	 * 
	 * @param string $comments 
	 * @return self
	 */
	public function setComments(string $comments): self {
		$this->comments = $comments;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getContractReference(): int {
		return $this->contractReference;
	}
	
	/**
	 * 
	 * @param int $contractReference 
	 * @return self
	 */
	public function setContractReference(int $contractReference): self {
		$this->contractReference = $contractReference;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getContributionPercent(): float {
		return $this->contributionPercent;
	}
	
	/**
	 * 
	 * @param float $contributionPercent 
	 * @return self
	 */
	public function setContributionPercent(float $contributionPercent): self {
		$this->contributionPercent = $contributionPercent;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getContributionValue(): float {
		return $this->contributionValue;
	}
	
	/**
	 * 
	 * @param float $contributionValue 
	 * @return self
	 */
	public function setContributionValue(float $contributionValue): self {
		$this->contributionValue = $contributionValue;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCountry(): string {
		return $this->country;
	}
	
	/**
	 * 
	 * @param string $country 
	 * @return self
	 */
	public function setCountry(string $country): self {
		$this->country = $country;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCostCenter(): string {
		return $this->costCenter;
	}
	
	/**
	 * 
	 * @param string $costCenter 
	 * @return self
	 */
	public function setCostCenter(string $costCenter): self {
		$this->costCenter = $costCenter;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCredit(): string {
		return $this->credit;
	}
	
	/**
	 * 
	 * @param string $credit 
	 * @return self
	 */
	public function setCredit(string $credit): self {
		$this->credit = $credit;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCreditInvoiceReference(): string {
		return $this->creditInvoiceReference;
	}
	
	/**
	 * 
	 * @param string $creditInvoiceReference 
	 * @return self
	 */
	public function setCreditInvoiceReference(string $creditInvoiceReference): self {
		$this->creditInvoiceReference = $creditInvoiceReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCurrency(): string {
		return $this->currency;
	}
	
	/**
	 * 
	 * @param string $currency 
	 * @return self
	 */
	public function setCurrency(string $currency): self {
		$this->currency = $currency;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getCurrencyRate(): float {
		return $this->currencyRate;
	}
	
	/**
	 * 
	 * @param float $currencyRate 
	 * @return self
	 */
	public function setCurrencyRate(float $currencyRate): self {
		$this->currencyRate = $currencyRate;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getCurrencyUnit(): int {
		return $this->currencyUnit;
	}
	
	/**
	 * 
	 * @param int $currencyUnit 
	 * @return self
	 */
	public function setCurrencyUnit(int $currencyUnit): self {
		$this->currencyUnit = $currencyUnit;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCustomerName(): string {
		return $this->customerName;
	}
	
	/**
	 * 
	 * @param string $customerName 
	 * @return self
	 */
	public function setCustomerName(string $customerName): self {
		$this->customerName = $customerName;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getCustomerNumber(): string {
		return $this->customerNumber;
	}
	
	/**
	 * 
	 * @param string $customerNumber 
	 * @return self
	 */
	public function setCustomerNumber(string $customerNumber): self {
		$this->customerNumber = $customerNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryAddress1(): string {
		return $this->deliveryAddress1;
	}
	
	/**
	 * 
	 * @param string $deliveryAddress1 
	 * @return self
	 */
	public function setDeliveryAddress1(string $deliveryAddress1): self {
		$this->deliveryAddress1 = $deliveryAddress1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryAddress2(): string {
		return $this->deliveryAddress2;
	}
	
	/**
	 * 
	 * @param string $deliveryAddress2 
	 * @return self
	 */
	public function setDeliveryAddress2(string $deliveryAddress2): self {
		$this->deliveryAddress2 = $deliveryAddress2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryCity(): string {
		return $this->deliveryCity;
	}
	
	/**
	 * 
	 * @param string $deliveryCity 
	 * @return self
	 */
	public function setDeliveryCity(string $deliveryCity): self {
		$this->deliveryCity = $deliveryCity;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryCountry(): string {
		return $this->deliveryCountry;
	}
	
	/**
	 * 
	 * @param string $deliveryCountry 
	 * @return self
	 */
	public function setDeliveryCountry(string $deliveryCountry): self {
		$this->deliveryCountry = $deliveryCountry;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryDate(): string {
		return $this->deliveryDate;
	}
	
	/**
	 * 
	 * @param string $deliveryDate 
	 * @return self
	 */
	public function setDeliveryDate(string $deliveryDate): self {
		$this->deliveryDate = $deliveryDate;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryName(): string {
		return $this->deliveryName;
	}
	
	/**
	 * 
	 * @param string $deliveryName 
	 * @return self
	 */
	public function setDeliveryName(string $deliveryName): self {
		$this->deliveryName = $deliveryName;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDeliveryZipCode(): string {
		return $this->deliveryZipCode;
	}
	
	/**
	 * 
	 * @param string $deliveryZipCode 
	 * @return self
	 */
	public function setDeliveryZipCode(string $deliveryZipCode): self {
		$this->deliveryZipCode = $deliveryZipCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDocumentNumber(): string {
		return $this->documentNumber;
	}
	
	/**
	 * 
	 * @param string $documentNumber 
	 * @return self
	 */
	public function setDocumentNumber(string $documentNumber): self {
		$this->documentNumber = $documentNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getDueDate(): string {
		return $this->dueDate;
	}
	
	/**
	 * 
	 * @param string $dueDate 
	 * @return self
	 */
	public function setDueDate(string $dueDate): self {
		$this->dueDate = $dueDate;
		return $this;
	}
	
	/**
	 * 
	 * @return EdiInformation
	 */
	public function getEdiInformation(): ITBMedia\FortnoxBundle\Model\EdiInformation {
		return $this->ediInformation;
	}
	
	/**
	 * 
	 * @param EdiInformation $ediInformation 
	 * @return self
	 */
	public function setEdiInformation(EdiInformation $ediInformation): self {
		$this->ediInformation = $ediInformation;
		return $this;
	}
	
	/**
	 * 
	 * @return EmailInformation
	 */
	public function getEmailInformation(): EmailInformation {
		return $this->emailInformation;
	}
	
	/**
	 * 
	 * @param EmailInformation $emailInformation 
	 * @return self
	 */
	public function setEmailInformation(EmailInformation $emailInformation): self {
		$this->emailInformation = $emailInformation;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getEuQuarterlyReport(): bool {
		return $this->euQuarterlyReport;
	}
	
	/**
	 * 
	 * @param bool $euQuarterlyReport 
	 * @return self
	 */
	public function setEuQuarterlyReport(bool $euQuarterlyReport): self {
		$this->euQuarterlyReport = $euQuarterlyReport;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getExternalInvoiceReference1(): string {
		return $this->externalInvoiceReference1;
	}
	
	/**
	 * 
	 * @param string $externalInvoiceReference1 
	 * @return self
	 */
	public function setExternalInvoiceReference1(string $externalInvoiceReference1): self {
		$this->externalInvoiceReference1 = $externalInvoiceReference1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getExternalInvoiceReference2(): string {
		return $this->externalInvoiceReference2;
	}
	
	/**
	 * 
	 * @param string $externalInvoiceReference2 
	 * @return self
	 */
	public function setExternalInvoiceReference2(string $externalInvoiceReference2): self {
		$this->externalInvoiceReference2 = $externalInvoiceReference2;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getFreight(): float {
		return $this->freight;
	}
	
	/**
	 * 
	 * @param float $freight 
	 * @return self
	 */
	public function setFreight(float $freight): self {
		$this->freight = $freight;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getFreightVat(): float {
		return $this->freightVat;
	}
	
	/**
	 * 
	 * @param float $freightVat 
	 * @return self
	 */
	public function setFreightVat(float $freightVat): self {
		$this->freightVat = $freightVat;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getGross(): float {
		return $this->gross;
	}
	
	/**
	 * 
	 * @param float $gross 
	 * @return self
	 */
	public function setGross(float $gross): self {
		$this->gross = $gross;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getHouseWork(): bool {
		return $this->houseWork;
	}
	
	/**
	 * 
	 * @param bool $houseWork 
	 * @return self
	 */
	public function setHouseWork(bool $houseWork): self {
		$this->houseWork = $houseWork;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoiceDate(): string {
		return $this->invoiceDate;
	}
	
	/**
	 * 
	 * @param string $invoiceDate 
	 * @return self
	 */
	public function setInvoiceDate(string $invoiceDate): self {
		$this->invoiceDate = $invoiceDate;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoicePeriodStart(): string {
		return $this->invoicePeriodStart;
	}
	
	/**
	 * 
	 * @param string $invoicePeriodStart 
	 * @return self
	 */
	public function setInvoicePeriodStart(string $invoicePeriodStart): self {
		$this->invoicePeriodStart = $invoicePeriodStart;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoicePeriodEnd(): string {
		return $this->invoicePeriodEnd;
	}
	
	/**
	 * 
	 * @param string $invoicePeriodEnd 
	 * @return self
	 */
	public function setInvoicePeriodEnd(string $invoicePeriodEnd): self {
		$this->invoicePeriodEnd = $invoicePeriodEnd;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoicePeriodReference(): string {
		return $this->invoicePeriodReference;
	}
	
	/**
	 * 
	 * @param string $invoicePeriodReference 
	 * @return self
	 */
	public function setInvoicePeriodReference(string $invoicePeriodReference): self {
		$this->invoicePeriodReference = $invoicePeriodReference;
		return $this;
	}
	
	/**
	 * 
	 * @return array
	 */
	public function getInvoiceRows(): array {
		return $this->invoiceRows;
	}
	
	/**
	 * 
	 * @param array $invoiceRows 
	 * @return self
	 */
	public function setInvoiceRows(array $invoiceRows): self {
		$this->invoiceRows = $invoiceRows;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getInvoiceType(): string {
		return $this->invoiceType;
	}
	
	/**
	 * 
	 * @param string $invoiceType 
	 * @return self
	 */
	public function setInvoiceType(string $invoiceType): self {
		$this->invoiceType = $invoiceType;
		return $this;
	}
	
	/**
	 * 
	 * @return array
	 */
	public function getLabels(): array {
		return $this->labels;
	}
	
	/**
	 * 
	 * @param array $labels 
	 * @return self
	 */
	public function setLabels(array $labels): self {
		$this->labels = $labels;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getLanguage(): string {
		return $this->language;
	}
	
	/**
	 * 
	 * @param string $language 
	 * @return self
	 */
	public function setLanguage(string $language): self {
		$this->language = $language;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getLastRemindDate(): string {
		return $this->lastRemindDate;
	}
	
	/**
	 * 
	 * @param string $lastRemindDate 
	 * @return self
	 */
	public function setLastRemindDate(string $lastRemindDate): self {
		$this->lastRemindDate = $lastRemindDate;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getNet(): float {
		return $this->net;
	}
	
	/**
	 * 
	 * @param float $net 
	 * @return self
	 */
	public function setNet(float $net): self {
		$this->net = $net;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getNotCompleted(): bool {
		return $this->notCompleted;
	}
	
	/**
	 * 
	 * @param bool $notCompleted 
	 * @return self
	 */
	public function setNotCompleted(bool $notCompleted): self {
		$this->notCompleted = $notCompleted;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getNoxFinans(): bool {
		return $this->noxFinans;
	}
	
	/**
	 * 
	 * @param bool $noxFinans 
	 * @return self
	 */
	public function setNoxFinans(bool $noxFinans): self {
		$this->noxFinans = $noxFinans;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOcr(): string {
		return $this->ocr;
	}
	
	/**
	 * 
	 * @param string $ocr 
	 * @return self
	 */
	public function setOcr(string $ocr): self {
		$this->ocr = $ocr;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOfferReference(): string {
		return $this->offerReference;
	}
	
	/**
	 * 
	 * @param string $offerReference 
	 * @return self
	 */
	public function setOfferReference(string $offerReference): self {
		$this->offerReference = $offerReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOrderReference(): string {
		return $this->orderReference;
	}
	
	/**
	 * 
	 * @param string $orderReference 
	 * @return self
	 */
	public function setOrderReference(string $orderReference): self {
		$this->orderReference = $orderReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOrganisationNumber(): string {
		return $this->organisationNumber;
	}
	
	/**
	 * 
	 * @param string $organisationNumber 
	 * @return self
	 */
	public function setOrganisationNumber(string $organisationNumber): self {
		$this->organisationNumber = $organisationNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOurReference(): string {
		return $this->ourReference;
	}
	
	/**
	 * 
	 * @param string $ourReference 
	 * @return self
	 */
	public function setOurReference(string $ourReference): self {
		$this->ourReference = $ourReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPaymentWay(): string {
		return $this->paymentWay;
	}
	
	/**
	 * 
	 * @param string $paymentWay 
	 * @return self
	 */
	public function setPaymentWay(string $paymentWay): self {
		$this->paymentWay = $paymentWay;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPhone1(): string {
		return $this->phone1;
	}
	
	/**
	 * 
	 * @param string $phone1 
	 * @return self
	 */
	public function setPhone1(string $phone1): self {
		$this->phone1 = $phone1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPhone2(): string {
		return $this->phone2;
	}
	
	/**
	 * 
	 * @param string $phone2 
	 * @return self
	 */
	public function setPhone2(string $phone2): self {
		$this->phone2 = $phone2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPriceList(): string {
		return $this->priceList;
	}
	
	/**
	 * 
	 * @param string $priceList 
	 * @return self
	 */
	public function setPriceList(string $priceList): self {
		$this->priceList = $priceList;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getPrintTemplate(): string {
		return $this->printTemplate;
	}
	
	/**
	 * 
	 * @param string $printTemplate 
	 * @return self
	 */
	public function setPrintTemplate(string $printTemplate): self {
		$this->printTemplate = $printTemplate;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getProject(): string {
		return $this->project;
	}
	
	/**
	 * 
	 * @param string $project 
	 * @return self
	 */
	public function setProject(string $project): self {
		$this->project = $project;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getWarehouseReady(): bool {
		return $this->warehouseReady;
	}
	
	/**
	 * 
	 * @param bool $warehouseReady 
	 * @return self
	 */
	public function setWarehouseReady(bool $warehouseReady): self {
		$this->warehouseReady = $warehouseReady;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getOutboundDate(): string {
		return $this->outboundDate;
	}
	
	/**
	 * 
	 * @param string $outboundDate 
	 * @return self
	 */
	public function setOutboundDate(string $outboundDate): self {
		$this->outboundDate = $outboundDate;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getRemarks(): string {
		return $this->remarks;
	}
	
	/**
	 * 
	 * @param string $remarks 
	 * @return self
	 */
	public function setRemarks(string $remarks): self {
		$this->remarks = $remarks;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getReminders(): int {
		return $this->reminders;
	}
	
	/**
	 * 
	 * @param int $reminders 
	 * @return self
	 */
	public function setReminders(int $reminders): self {
		$this->reminders = $reminders;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getRoundOff(): float {
		return $this->roundOff;
	}
	
	/**
	 * 
	 * @param float $roundOff 
	 * @return self
	 */
	public function setRoundOff(float $roundOff): self {
		$this->roundOff = $roundOff;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getSent(): bool {
		return $this->sent;
	}
	
	/**
	 * 
	 * @param bool $sent 
	 * @return self
	 */
	public function setSent(bool $sent): self {
		$this->sent = $sent;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getTaxReduction(): int {
		return $this->taxReduction;
	}
	
	/**
	 * 
	 * @param int $taxReduction 
	 * @return self
	 */
	public function setTaxReduction(int $taxReduction): self {
		$this->taxReduction = $taxReduction;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTermsOfDelivery(): string {
		return $this->termsOfDelivery;
	}
	
	/**
	 * 
	 * @param string $termsOfDelivery 
	 * @return self
	 */
	public function setTermsOfDelivery(string $termsOfDelivery): self {
		$this->termsOfDelivery = $termsOfDelivery;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTermsOfPayment(): string {
		return $this->termsOfPayment;
	}
	
	/**
	 * 
	 * @param string $termsOfPayment 
	 * @return self
	 */
	public function setTermsOfPayment(string $termsOfPayment): self {
		$this->termsOfPayment = $termsOfPayment;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getTimeBasisReference(): int {
		return $this->timeBasisReference;
	}
	
	/**
	 * 
	 * @param int $timeBasisReference 
	 * @return self
	 */
	public function setTimeBasisReference(int $timeBasisReference): self {
		$this->timeBasisReference = $timeBasisReference;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getTotal(): float {
		return $this->total;
	}
	
	/**
	 * 
	 * @param float $total 
	 * @return self
	 */
	public function setTotal(float $total): self {
		$this->total = $total;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getTotalToPay(): float {
		return $this->totalToPay;
	}
	
	/**
	 * 
	 * @param float $totalToPay 
	 * @return self
	 */
	public function setTotalToPay(float $totalToPay): self {
		$this->totalToPay = $totalToPay;
		return $this;
	}
	
	/**
	 * 
	 * @return float
	 */
	public function getTotalVat(): float {
		return $this->totalVat;
	}
	
	/**
	 * 
	 * @param float $totalVat 
	 * @return self
	 */
	public function setTotalVat(float $totalVat): self {
		$this->totalVat = $totalVat;
		return $this;
	}
	
	/**
	 * 
	 * @return bool
	 */
	public function getVatIncluded(): bool {
		return $this->vatIncluded;
	}
	
	/**
	 * 
	 * @param bool $vatIncluded 
	 * @return self
	 */
	public function setVatIncluded(bool $vatIncluded): self {
		$this->vatIncluded = $vatIncluded;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getVoucherNumber(): int {
		return $this->voucherNumber;
	}
	
	/**
	 * 
	 * @param int $voucherNumber 
	 * @return self
	 */
	public function setVoucherNumber(int $voucherNumber): self {
		$this->voucherNumber = $voucherNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getVoucherSeries(): string {
		return $this->voucherSeries;
	}
	
	/**
	 * 
	 * @param string $voucherSeries 
	 * @return self
	 */
	public function setVoucherSeries(string $voucherSeries): self {
		$this->voucherSeries = $voucherSeries;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getVoucherYear(): int {
		return $this->voucherYear;
	}
	
	/**
	 * 
	 * @param int $voucherYear 
	 * @return self
	 */
	public function setVoucherYear(int $voucherYear): self {
		$this->voucherYear = $voucherYear;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getWayOfDelivery(): string {
		return $this->wayOfDelivery;
	}
	
	/**
	 * 
	 * @param string $wayOfDelivery 
	 * @return self
	 */
	public function setWayOfDelivery(string $wayOfDelivery): self {
		$this->wayOfDelivery = $wayOfDelivery;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getYourOrderNumber(): string {
		return $this->yourOrderNumber;
	}
	
	/**
	 * 
	 * @param string $yourOrderNumber 
	 * @return self
	 */
	public function setYourOrderNumber(string $yourOrderNumber): self {
		$this->yourOrderNumber = $yourOrderNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getYourReference(): string {
		return $this->yourReference;
	}
	
	/**
	 * 
	 * @param string $yourReference 
	 * @return self
	 */
	public function setYourReference(string $yourReference): self {
		$this->yourReference = $yourReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getZipCode(): string {
		return $this->zipCode;
	}
	
	/**
	 * 
	 * @param string $zipCode 
	 * @return self
	 */
	public function setZipCode(string $zipCode): self {
		$this->zipCode = $zipCode;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getAccountingMethod(): string {
		return $this->accountingMethod;
	}
	
	/**
	 * 
	 * @param string $accountingMethod 
	 * @return self
	 */
	public function setAccountingMethod(string $accountingMethod): self {
		$this->accountingMethod = $accountingMethod;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getTaxReductionType(): string {
		return $this->taxReductionType;
	}
	
	/**
	 * 
	 * @param string $taxReductionType 
	 * @return self
	 */
	public function setTaxReductionType(string $taxReductionType): self {
		$this->taxReductionType = $taxReductionType;
		return $this;
	}

	/**
	 * 
	 * @return string
	 */
	public function getFinalPayDate(): string {
		return $this->finalPayDate;
	}
	
	/**
	 * 
	 * @param string $finalPayDate 
	 * @return self
	 */
	public function setFinalPayDate(string $finalPayDate): self {
		$this->finalPayDate = $finalPayDate;
		return $this;
	}
	/**
     * @return string
     */
    public function serialize()
    {
        return SerializerBuilder::create()
            ->build()
            ->serialize($this, "json");
    }
    /**
     * @return Invoice
     */
    public static function deserialize(string $data)
    {
        return SerializerBuilder::create()
            ->build()
            ->deserialize($data, self::class, "json");
    }
    /**
	 * @return array
	 */
	public function toArray(array $groups = ["invoice"]): array {
		return SerializerBuilder::create()->build()->toArray($this);
	}
	/**
	 * @return self
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}