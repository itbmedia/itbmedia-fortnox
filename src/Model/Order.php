<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Order implements SerializableInterface
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
     * @SerializedName("@urlTaxReductionList")
     */
    private $urlTaxReductionList;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("AdministrationFee")
     */
    private $administrationFee;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("AdministrationFeeVAT")
     */
    private $administrationFeeVAT;
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
     * @var double
     * @Type("double")
     * @SerializedName("BasisTaxReduction")
     */
    private $basisTaxReduction;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Cancelled")
     */
    private $cancelled;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("City")
     */
    private $city;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Comments")
     */
    private $comments;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("ContributionPercent")
     */
    private $contributionPercent;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("ContributionValue")
     */
    private $contributionValue;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("CopyRemarks")
     */
    private $copyRemarks;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Country")
     */
    private $country;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     */
    private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Currency")
     */
    private $currency;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("CurrencyRate")
     */
    private $currencyRate;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("CurrencyUnit")
     */
    private $currencyUnit;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerName")
     */
    private $customerName;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerNumber")
     */
    private $customerNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryState")
     */
    private $deliveryState;
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
     * @SerializedName("DeliveryDate")
     */
    private $deliveryDate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryName")
     */
    private $deliveryName;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveryZipCode")
     */
    private $deliveryZipCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DocumentNumber")
     */
    private $documentNumber;
    /**
     * @var \ITBMedia\FortnoxBundle\Model\EmailInformation
     * @Type("ITBMedia\FortnoxBundle\Model\EmailInformation")
     * @SerializedName("EmailInformation")
     */
    private $emailInformation;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference1")
     */
    private $externalInvoiceReference1;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference2")
     */
    private $externalInvoiceReference2;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Freight")
     */
    private $freight;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("FreightVAT")
     */
    private $freightVAT;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Gross")
     */
    private $gross;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("HouseWork")
     */
    private $houseWork;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoiceReference")
     */
    private $invoiceReference;
    /**
     * @var array
     * @Type("array")
     * @SerializedName("Labels")
     */
    private $labels;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Language")
     */
    private $language;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Net")
     */
    private $net;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("NotCompleted")
     */
    private $notCompleted;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OfferReference")
     */
    private $offerReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrderDate")
     */
    private $orderDate;
    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\OrderRow>")
     * @SerializedName("OrderRows")
     */
    private $orderRows;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrderType")
     */
    private $orderType;
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
     * @SerializedName("PrintTemplate")
     */
    private $printTemplate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     */
    // private $project;
    // /**
    //  * @var string
    //  * @Type("string")
    //  * @SerializedName("WarehouseReady")
    //  */
    // private $warehouseReady;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OutboundDate")
     */
    private $outboundDate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Remarks")
     */
    private $remarks;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("RoundOff")
     */
    private $roundOff;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Sent")
     */
    private $sent;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TaxReduction")
     */
    private $taxReduction;
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
     * @SerializedName("TimeBasisReference")
     */
    private $timeBasisReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Total")
     */
    private $total;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TotalToPay")
     */
    private $totalToPay;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TotalVAT")
     */
    private $totalVAT;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("VATIncluded")
     */
    private $vATIncluded;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("WayOfDelivery")
     */
    private $wayOfDelivery;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourReference")
     */
    private $yourReference;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourOrderNumber")
     */
    private $yourOrderNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ZipCode")
     */
    private $zipCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointCode")
     */
    private $stockPointCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointId")
     */
    private $stockPointId;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TaxReductionType")
     */
    private $taxReductionType;

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
     * @return double
     */
    public function getAdministrationFee()
    {
        return $this->administrationFee;
    }

    /**
     *
     * @param double $administrationFee
     * @return self
     */
    public function setAdministrationFee($administrationFee): self
    {
        $this->administrationFee = $administrationFee;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getAdministrationFeeVAT()
    {
        return $this->administrationFeeVAT;
    }

    /**
     *
     * @param double $administrationFeeVAT
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
     * @return double
     */
    public function getBasisTaxReduction()
    {
        return $this->basisTaxReduction;
    }

    /**
     *
     * @param double $basisTaxReduction
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
     * @return double
     */
    public function getContributionPercent()
    {
        return $this->contributionPercent;
    }

    /**
     *
     * @param double $contributionPercent
     * @return self
     */
    public function setContributionPercent($contributionPercent): self
    {
        $this->contributionPercent = $contributionPercent;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getContributionValue()
    {
        return $this->contributionValue;
    }

    /**
     *
     * @param double $contributionValue
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
     * @return double
     */
    public function getCurrencyRate()
    {
        return $this->currencyRate;
    }

    /**
     *
     * @param double $currencyRate
     * @return self
     */
    public function setCurrencyRate($currencyRate): self
    {
        $this->currencyRate = $currencyRate;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getCurrencyUnit()
    {
        return $this->currencyUnit;
    }

    /**
     *
     * @param double $currencyUnit
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
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     *
     * @param string $orderType
     * @return self
     */
    public function setOrderType($orderType): self
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
	public function toArray(): array {
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return self
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
