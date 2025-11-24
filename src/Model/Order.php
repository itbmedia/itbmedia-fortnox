<?php

namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\ReadOnly;

class Order implements SerializableInterface
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@url")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $url = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@urlTaxReductionList")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $urlTaxReductionList = null;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("AdministrationFee")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $administrationFee = 0;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("AdministrationFeeVAT")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $administrationFeeVAT = 0;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Address1")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $address1 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Address2")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $address2 = null;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("BasisTaxReduction")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     * @ReadOnly()
     */
    private ?float $basisTaxReduction = 0;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Cancelled")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private bool $cancelled = false;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("City")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $city = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Comments")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $comments = null;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("ContributionPercent")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     * @ReadOnly()
     */
    private ?float $contributionPercent = null;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("ContributionValue")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     * @ReadOnly()
     */
    private ?float $contributionValue = null;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("CopyRemarks")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private $copyRemarks;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("InvoiceCreated")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private $invoiceCreated;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Country")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $country = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $costCenter = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Currency")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $currency = null;
    /**
     * @var float
     * @Type("float")
     * @SerializedName("CurrencyRate")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $currencyRate = null;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("CurrencyUnit")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?int $currencyUnit = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerName")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $customerName = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerNumber")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $customerNumber = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryState")
     * @SkipWhenEmpty()
     * @Groups({"warehouse"})
     */
    private ?string $deliveryState = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryAddress1")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryAddress1 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryAddress2")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryAddress2 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCity")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryCity = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryCountry")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryCountry = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryDate")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryDate = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryName")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryName = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryZipCode")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $deliveryZipCode = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DocumentNumber")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $documentNumber = null;
    /**
     * @var \ITBMedia\FortnoxBundle\Model\EmailInformation
     * @Type("ITBMedia\FortnoxBundle\Model\EmailInformation")
     * @SerializedName("EmailInformation")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private $emailInformation;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference1")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $externalInvoiceReference1 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference2")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $externalInvoiceReference2 = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("Freight")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $freight = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("FreightVAT")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $freightVAT = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("Gross")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     * @ReadOnly()
     */
    private ?float $gross = null;
    /**
     * @var string
     * @Type("bool")
     * @SerializedName("HouseWork")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private bool $houseWork = false;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceReference")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $invoiceReference = null;
    /**
     * @var array
     * @Type("array")
     * @SerializedName("Labels")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?array $labels = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Language")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $language = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("Net")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     * @ReadOnly()
     */
    private ?float $net = null;
    /**
     * @var string
     * @Type("bool")
     * @SerializedName("NotCompleted")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?bool $notCompleted = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OfferReference")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $offerReference = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrderDate")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $orderDate = null;
    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\OrderRow>")
     * @SerializedName("OrderRows")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private array $orderRows = [];
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrderType")
     * @SkipWhenEmpty()
     * @Groups({"warehouse"})
     * @ReadOnly()
     */
    private ?string $orderType = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrganisationNumber")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $organisationNumber = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OurReference")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $ourReference = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Phone1")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $phone1 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Phone2")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $phone2 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PriceList")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $priceList = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PrintTemplate")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $printTemplate = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $project = null;
    /**
     * @var string
     * @Type("bool")
     * @SerializedName("WarehouseReady")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?bool $warehouseReady = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OutboundDate")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $outboundDate = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Remarks")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $remarks = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("RoundOff")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $roundOff = null;
    /**
     * @var string
     * @Type("bool")
     * @SerializedName("Sent")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?bool $sent = null;
    /**
     * @var string
     * @Type("int")
     * @SerializedName("TaxReduction")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?int $taxReduction = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfDelivery")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $termsOfDelivery = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfPayment")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $termsOfPayment = null;
    /**
     * @var string
     * @Type("int")
     * @SerializedName("TimeBasisReference")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?int $timeBasisReference = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("Total")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $total = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("TotalToPay")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     * @ReadOnly()
     */
    private ?float $totalToPay = null;
    /**
     * @var string
     * @Type("float")
     * @SerializedName("TotalVAT")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?float $totalVAT = null;
    /**
     * @var string
     * @Type("bool")
     * @SerializedName("VATIncluded")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?bool $vATIncluded = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("WayOfDelivery")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $wayOfDelivery = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourReference")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $yourReference = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourOrderNumber")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $yourOrderNumber = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ZipCode")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $zipCode = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointCode")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private $stockPointCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointId")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private $stockPointId;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TaxReductionType")
     * @SkipWhenEmpty()
     * @Groups({"order"})
     */
    private ?string $taxReductionType = null;

    /**
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *
     * @param string $url
     * @return self
     */
    public function setUrl($url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getUrlTaxReductionList()
    {
        return $this->urlTaxReductionList;
    }

    /**
     *
     * @param string $urlTaxReductionList
     * @return self
     */
    public function setUrlTaxReductionList($urlTaxReductionList): self
    {
        $this->urlTaxReductionList = $urlTaxReductionList;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getAdministrationFee()
    {
        return $this->administrationFee;
    }

    /**
     *
     * @param float $administrationFee
     * @return self
     */
    public function setAdministrationFee($administrationFee): self
    {
        $this->administrationFee = $administrationFee;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getAdministrationFeeVAT()
    {
        return $this->administrationFeeVAT;
    }

    /**
     *
     * @param float $administrationFeeVAT
     * @return self
     */
    public function setAdministrationFeeVAT($administrationFeeVAT): self
    {
        $this->administrationFeeVAT = $administrationFeeVAT;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     *
     * @param string $address1
     * @return self
     */
    public function setAddress1($address1): self
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     *
     * @param string $address2
     * @return self
     */
    public function setAddress2($address2): self
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getBasisTaxReduction()
    {
        return $this->basisTaxReduction;
    }

    /**
     *
     * @param float $basisTaxReduction
     * @return self
     */
    public function setBasisTaxReduction($basisTaxReduction): self
    {
        $this->basisTaxReduction = $basisTaxReduction;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     *
     * @param bool $cancelled
     * @return self
     */
    public function setCancelled($cancelled): self
    {
        $this->cancelled = $cancelled;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     *
     * @param string $city
     * @return self
     */
    public function setCity($city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments): self
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     *
     * @return boolean
     */
    public function getInvoiceCreated()
    {
        return $this->invoiceCreated;
    }

    /**
     *
     * @param boolean $invoiceCreated
     * @return self
     */
    public function setInvoiceCreated($invoiceCreated): self
    {
        $this->invoiceCreated = $invoiceCreated;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getContributionPercent()
    {
        return $this->contributionPercent;
    }

    /**
     *
     * @param float $contributionPercent
     * @return self
     */
    public function setContributionPercent($contributionPercent): self
    {
        $this->contributionPercent = $contributionPercent;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getContributionValue()
    {
        return $this->contributionValue;
    }

    /**
     *
     * @param float $contributionValue
     * @return self
     */
    public function setContributionValue($contributionValue): self
    {
        $this->contributionValue = $contributionValue;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getCopyRemarks()
    {
        return $this->copyRemarks;
    }

    /**
     *
     * @param bool $copyRemarks
     * @return self
     */
    public function setCopyRemarks($copyRemarks): self
    {
        $this->copyRemarks = $copyRemarks;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCostCenter()
    {
        return $this->costCenter;
    }

    /**
     *
     * @param string $costCenter
     * @return self
     */
    public function setCostCenter($costCenter): self
    {
        $this->costCenter = $costCenter;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency): self
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     *
     * @return float
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     *
     * @param float $currencyRate
     * @return self
     */
    public function setCurrencyRate($currencyRate): self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getCurrencyUnit()
    {
        return $this->currencyUnit;
    }

    /**
     *
     * @param int $currencyUnit
     * @return self
     */
    public function setCurrencyUnit($currencyUnit): self
    {
        $this->currencyUnit = $currencyUnit;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     *
     * @param string $customerName
     * @return self
     */
    public function setCustomerName($customerName): self
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->customerNumber;
    }

    /**
     *
     * @param string $customerNumber
     * @return self
     */
    public function setCustomerNumber($customerNumber): self
    {
        $this->customerNumber = $customerNumber;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryState()
    {
        return $this->deliveryState;
    }

    /**
     *
     * @param string $deliveryState
     * @return self
     */
    public function setDeliveryState($deliveryState): self
    {
        $this->deliveryState = $deliveryState;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryAddress1()
    {
        return $this->deliveryAddress1;
    }

    /**
     *
     * @param string $deliveryAddress1
     * @return self
     */
    public function setDeliveryAddress1($deliveryAddress1): self
    {
        $this->deliveryAddress1 = $deliveryAddress1;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryAddress2()
    {
        return $this->deliveryAddress2;
    }

    /**
     *
     * @param string $deliveryAddress2
     * @return self
     */
    public function setDeliveryAddress2($deliveryAddress2): self
    {
        $this->deliveryAddress2 = $deliveryAddress2;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryCity()
    {
        return $this->deliveryCity;
    }

    /**
     *
     * @param string $deliveryCity
     * @return self
     */
    public function setDeliveryCity($deliveryCity): self
    {
        $this->deliveryCity = $deliveryCity;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryCountry()
    {
        return $this->deliveryCountry;
    }

    /**
     *
     * @param string $deliveryCountry
     * @return self
     */
    public function setDeliveryCountry($deliveryCountry): self
    {
        $this->deliveryCountry = $deliveryCountry;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     *
     * @param string $deliveryDate
     * @return self
     */
    public function setDeliveryDate($deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryName()
    {
        return $this->deliveryName;
    }

    /**
     *
     * @param string $deliveryName
     * @return self
     */
    public function setDeliveryName($deliveryName): self
    {
        $this->deliveryName = $deliveryName;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDeliveryZipCode()
    {
        return $this->deliveryZipCode;
    }

    /**
     *
     * @param string $deliveryZipCode
     * @return self
     */
    public function setDeliveryZipCode($deliveryZipCode): self
    {
        $this->deliveryZipCode = $deliveryZipCode;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->documentNumber;
    }

    /**
     *
     * @param string $documentNumber
     * @return self
     */
    public function setDocumentNumber($documentNumber): self
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     *
     * @return \ITBMedia\FortnoxBundle\Model\EmailInformation
     */
    public function getEmailInformation()
    {
        return $this->emailInformation;
    }

    /**
     *
     * @param \ITBMedia\FortnoxBundle\Model\EmailInformation $emailInformation
     * @return self
     */
    public function setEmailInformation($emailInformation): self
    {
        $this->emailInformation = $emailInformation;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getExternalInvoiceReference1()
    {
        return $this->externalInvoiceReference1;
    }

    /**
     *
     * @param string $externalInvoiceReference1
     * @return self
     */
    public function setExternalInvoiceReference1(
        $externalInvoiceReference1
    ): self {
        $this->externalInvoiceReference1 = $externalInvoiceReference1;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getExternalInvoiceReference2()
    {
        return $this->externalInvoiceReference2;
    }

    /**
     *
     * @param string $externalInvoiceReference2
     * @return self
     */
    public function setExternalInvoiceReference2(
        $externalInvoiceReference2
    ): self {
        $this->externalInvoiceReference2 = $externalInvoiceReference2;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getFreight()
    {
        return $this->freight;
    }

    /**
     *
     * @param string $freight
     * @return self
     */
    public function setFreight($freight): self
    {
        $this->freight = $freight;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getFreightVAT()
    {
        return $this->freightVAT;
    }

    /**
     *
     * @param string $freightVAT
     * @return self
     */
    public function setFreightVAT($freightVAT): self
    {
        $this->freightVAT = $freightVAT;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getGross()
    {
        return $this->gross;
    }

    /**
     *
     * @param string $gross
     * @return self
     */
    public function setGross($gross): self
    {
        $this->gross = $gross;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getHouseWork()
    {
        return $this->houseWork;
    }

    /**
     *
     * @param string $houseWork
     * @return self
     */
    public function setHouseWork($houseWork): self
    {
        $this->houseWork = $houseWork;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getInvoiceReference()
    {
        if ($this->invoiceReference === "0") {
            return "";
        }
        return $this->invoiceReference;
    }

    /**
     *
     * @param string $invoiceReference
     * @return self
     */
    public function setInvoiceReference($invoiceReference): self
    {
        $this->invoiceReference = $invoiceReference;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     *
     * @param array $labels
     * @return self
     */
    public function setLabels($labels): self
    {
        $this->labels = $labels;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language): self
    {
        $this->language = $language;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     *
     * @param string $net
     * @return self
     */
    public function setNet($net): self
    {
        $this->net = $net;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getNotCompleted()
    {
        return $this->notCompleted;
    }

    /**
     *
     * @param string $notCompleted
     * @return self
     */
    public function setNotCompleted($notCompleted): self
    {
        $this->notCompleted = $notCompleted;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getOfferReference()
    {
        return $this->offerReference;
    }

    /**
     *
     * @param string $offerReference
     * @return self
     */
    public function setOfferReference($offerReference): self
    {
        $this->offerReference = $offerReference;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     *
     * @param string $orderDate
     * @return self
     */
    public function setOrderDate($orderDate): self
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getOrderRows()
    {
        return $this->orderRows;
    }

    /**
     *
     * @param array $orderRows
     * @return self
     */
    public function setOrderRows($orderRows): self
    {
        $this->orderRows = $orderRows;
        return $this;
    }

    /**
     *
     * @return null|string
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    /**
     *
     * @param null|string $orderType
     * @return self
     */
    public function setOrderType(?string $orderType): self
    {
        $this->orderType = $orderType;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getOrganisationNumber()
    {
        return $this->organisationNumber;
    }

    /**
     *
     * @param string $organisationNumber
     * @return self
     */
    public function setOrganisationNumber($organisationNumber): self
    {
        $this->organisationNumber = $organisationNumber;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getOurReference()
    {
        return $this->ourReference;
    }

    /**
     *
     * @param string $ourReference
     * @return self
     */
    public function setOurReference($ourReference): self
    {
        $this->ourReference = $ourReference;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhone1()
    {
        return $this->phone1;
    }

    /**
     *
     * @param string $phone1
     * @return self
     */
    public function setPhone1($phone1): self
    {
        $this->phone1 = $phone1;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     *
     * @param string $phone2
     * @return self
     */
    public function setPhone2($phone2): self
    {
        $this->phone2 = $phone2;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPriceList()
    {
        return $this->priceList;
    }

    /**
     *
     * @param string $priceList
     * @return self
     */
    public function setPriceList($priceList): self
    {
        $this->priceList = $priceList;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPrintTemplate()
    {
        return $this->printTemplate;
    }

    /**
     *
     * @param string $printTemplate
     * @return self
     */
    public function setPrintTemplate($printTemplate): self
    {
        $this->printTemplate = $printTemplate;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     *
     * @param string $project
     * @return self
     */
    public function setProject($project): self
    {
        $this->project = $project;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getWarehouseReady()
    {
        return $this->warehouseReady;
    }

    /**
     *
     * @param string $warehouseReady
     * @return self
     */
    public function setWarehouseReady($warehouseReady): self
    {
        $this->warehouseReady = $warehouseReady;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getOutboundDate()
    {
        return $this->outboundDate;
    }

    /**
     *
     * @param string $outboundDate
     * @return self
     */
    public function setOutboundDate($outboundDate): self
    {
        $this->outboundDate = $outboundDate;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     *
     * @param string $remarks
     * @return self
     */
    public function setRemarks($remarks): self
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getRoundOff()
    {
        return $this->roundOff;
    }

    /**
     *
     * @param string $roundOff
     * @return self
     */
    public function setRoundOff($roundOff): self
    {
        $this->roundOff = $roundOff;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getSent()
    {
        return $this->sent;
    }

    /**
     *
     * @param string $sent
     * @return self
     */
    public function setSent($sent): self
    {
        $this->sent = $sent;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTaxReduction()
    {
        return $this->taxReduction;
    }

    /**
     *
     * @param string $taxReduction
     * @return self
     */
    public function setTaxReduction($taxReduction): self
    {
        $this->taxReduction = $taxReduction;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTermsOfDelivery()
    {
        return $this->termsOfDelivery;
    }

    /**
     *
     * @param string $termsOfDelivery
     * @return self
     */
    public function setTermsOfDelivery($termsOfDelivery): self
    {
        $this->termsOfDelivery = $termsOfDelivery;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTermsOfPayment()
    {
        return $this->termsOfPayment;
    }

    /**
     *
     * @param string $termsOfPayment
     * @return self
     */
    public function setTermsOfPayment($termsOfPayment): self
    {
        $this->termsOfPayment = $termsOfPayment;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTimeBasisReference()
    {
        return $this->timeBasisReference;
    }

    /**
     *
     * @param string $timeBasisReference
     * @return self
     */
    public function setTimeBasisReference($timeBasisReference): self
    {
        $this->timeBasisReference = $timeBasisReference;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     *
     * @param string $total
     * @return self
     */
    public function setTotal($total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTotalToPay()
    {
        return $this->totalToPay;
    }

    /**
     *
     * @param string $totalToPay
     * @return self
     */
    public function setTotalToPay($totalToPay): self
    {
        $this->totalToPay = $totalToPay;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTotalVAT()
    {
        return $this->totalVAT;
    }

    /**
     *
     * @param string $totalVAT
     * @return self
     */
    public function setTotalVAT($totalVAT): self
    {
        $this->totalVAT = $totalVAT;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getVATIncluded()
    {
        return $this->vATIncluded;
    }

    /**
     *
     * @param string $vATIncluded
     * @return self
     */
    public function setVATIncluded($vATIncluded): self
    {
        $this->vATIncluded = $vATIncluded;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getWayOfDelivery()
    {
        return $this->wayOfDelivery;
    }

    /**
     *
     * @param string $wayOfDelivery
     * @return self
     */
    public function setWayOfDelivery($wayOfDelivery): self
    {
        $this->wayOfDelivery = $wayOfDelivery;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getYourReference()
    {
        return $this->yourReference;
    }

    /**
     *
     * @param string $yourReference
     * @return self
     */
    public function setYourReference($yourReference): self
    {
        $this->yourReference = $yourReference;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getYourOrderNumber()
    {
        return $this->yourOrderNumber;
    }

    /**
     *
     * @param string $yourOrderNumber
     * @return self
     */
    public function setYourOrderNumber($yourOrderNumber): self
    {
        $this->yourOrderNumber = $yourOrderNumber;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode): self
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getStockPointCode()
    {
        return $this->stockPointCode;
    }

    /**
     *
     * @param string $stockPointCode
     * @return self
     */
    public function setStockPointCode($stockPointCode): self
    {
        $this->stockPointCode = $stockPointCode;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getStockPointId()
    {
        return $this->stockPointId;
    }

    /**
     *
     * @param string $stockPointId
     * @return self
     */
    public function setStockPointId($stockPointId): self
    {
        $this->stockPointId = $stockPointId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTaxReductionType()
    {
        return $this->taxReductionType;
    }

    /**
     *
     * @param string $taxReductionType
     * @return self
     */
    public function setTaxReductionType($taxReductionType): self
    {
        $this->taxReductionType = $taxReductionType;
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
     * @return Order
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
    public function toArray(array $groups = [], $excludeReadonly = false): array
    {
        $serializer = SerializerBuilder::create()->build();
        $context = SerializationContext::create();


        if (count($groups)) {
            $context->setGroups($groups);
        }

        $data = $serializer->toArray($this, $context);

        if ($excludeReadonly) {
            $excludeKeys = [
                "Total",
                "TotalToPay",
                "TotalVAT",
                "BasisTaxReduction",
                "ContributionPercent",
                "ContributionValue",
                "AdministrationFeeVAT"
            ];

            $data = array_diff_key($data, array_flip($excludeKeys));
            if (isset($data['OrderRows']) && $this->orderRows) $data['OrderRows'] = array_map(fn($row) => $row->toArray(true), $this->orderRows);
        }

        return $data;
    }

    /**
     * @return self
     */
    public static function fromArray(array $data): self
    {
        return SerializerBuilder::create()->build()->fromArray($data, self::class);
    }
}
