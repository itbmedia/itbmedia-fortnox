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
use JMS\Serializer\Annotation\Accessor;

class Contract implements SerializableInterface
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@url")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $url = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("@urlTaxReductionList")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $urlTaxReductionList = null;

    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Active")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $active;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("AdministrationFee")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?float $administrationFee = null;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("BasisTaxReduction")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?float $administrationFeeVat = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Comments")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $comments;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("Continuous")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $continuous;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContractDate")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $contractDate = null;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("ContractLength")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $contractLength;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("ContributionPercent")
     * @Accessor(getter="getContributionPercent")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $contributionPercent;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("ContributionValue")
     * @Accessor(getter="getContributionValue")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $contributionValue;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $costCenter = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Currency")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $currency = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerName")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $customerName = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CustomerNumber")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $customerNumber = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DocumentNumber")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $documentNumber = null;
    /**
     * @var \ITBMedia\FortnoxBundle\Model\EmailInformation
     * @Type("ITBMedia\FortnoxBundle\Model\EmailInformation")
     * @SerializedName("EmailInformation")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $emailInformation;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference1")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $externalInvoiceReference1 = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ExternalInvoiceReference2")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $externalInvoiceReference2 = null;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Freight")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $freight;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Gross")
     * @Groups({"contract_details"})
     * @SkipWhenEmpty()
     */
    private $gross;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("HouseWork")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $houseWork;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("InvoiceDiscount")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $invoiceDiscount;
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("InvoiceInterval")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $invoiceInterval;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("InvoicesRemaining")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $invoicesRemaining;
    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\InvoiceRow>")
     * @SerializedName("InvoiceRows")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $invoiceRows = [];
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Language")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $language = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("LastInvoiceDate")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $lastInvoiceDate = null;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Net")
     *
     * @SkipWhenEmpty()
     */
    private $net;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OurReference")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $ourReference = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PeriodEnd")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $periodEnd;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PeriodStart")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $periodStart;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PriceList")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $priceList;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("PrintTemplate")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $printTemplate;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $project;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Remarks")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $remarks;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("RoundOff")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $roundOff;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("TaxReduction")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $taxReduction;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TemplateName")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $templateName;
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("TemplateNumber")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $templateNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfDelivery")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $termsOfDelivery = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TermsOfPayment")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $termsOfPayment = null;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Total")
     *
     * @SkipWhenEmpty()
     */
    private $total;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("TotalToPay")
     *
     * @SkipWhenEmpty()
     */
    private $totalToPay;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("TotalVAT")
     *
     * @SkipWhenEmpty()
     */
    private $totalVAT;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("VatIncluded")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private $vatIncluded;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("WayOfDelivery")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $wayOfDelivery = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourOrderNumber")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $yourOrderNumber = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("YourReference")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $yourReference = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("TaxReductionType")
     * @Groups({"contract"})
     * @SkipWhenEmpty()
     */
    private ?string $taxReductionType = null;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Status")
     * @Groups({"contract", "list"})
     * @SkipWhenEmpty()
     */
    private $Status;

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
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active): self
    {
        $this->active = $active;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getAdministrationFee(): ?float
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
    public function getBasisTaxReduction(): ?float
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
     * @return bool
     */
    public function getContinuous()
    {
        return $this->continuous;
    }

    /**
     *
     * @param bool $continuous
     * @return self
     */
    public function setContinuous($continuous): self
    {
        $this->continuous = $continuous;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getContractDate()
    {
        return $this->contractDate;
    }

    /**
     *
     * @param string $contractDate
     * @return self
     */
    public function setContractDate($contractDate): self
    {
        $this->contractDate = $contractDate;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getContractLength(): ?float
    {
        return $this->contractLength;
    }

    /**
     *
     * @param double $contractLength
     * @return self
     */
    public function setContractLength($contractLength): self
    {
        $this->contractLength = $contractLength;
        return $this;
    }


    /**
     *
     * @return float
     */
    public function getContributionPercent(): ?float
    {
        if ($this->contributionPercent !== null) return $this->contributionPercent;


        if (!($totalExlVat = $this->getTotal() - $this->getTotalVAT())) return 0;
        if (!($contributionValue = $this->getContributionValue())) return 0;

        return ($contributionValue / $totalExlVat) * 100;
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
     * @return float
     */
    public function getContributionValue(): ?float
    {
        if ($this->contributionValue !== null) return $this->contributionValue;

        return array_sum(array_map(function ($invoiceRow) {
            return $invoiceRow->getContributionValue();
        }, $this->invoiceRows));
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
	public function getEmailInformation(): ?\ITBMedia\FortnoxBundle\Model\EmailInformation
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
     * @return double
     */
    public function getFreight(): ?float
    {
        return $this->freight;
    }

    /**
     *
     * @param double $freight
     * @return self
     */
    public function setFreight($freight): self
    {
        $this->freight = $freight;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getGross(): ?float
    {
        return $this->gross;
    }

    /**
     *
     * @param double $gross
     * @return self
     */
    public function setGross($gross): self
    {
        $this->gross = $gross;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getHouseWork()
    {
        return $this->houseWork;
    }

    /**
     *
     * @param bool $houseWork
     * @return self
     */
    public function setHouseWork($houseWork): self
    {
        $this->houseWork = $houseWork;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getInvoiceDiscount(): ?float
    {
        return $this->invoiceDiscount;
    }

    /**
     *
     * @param double $invoiceDiscount
     * @return self
     */
    public function setInvoiceDiscount($invoiceDiscount): self
    {
        $this->invoiceDiscount = $invoiceDiscount;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getInvoiceInterval(): ?int
    {
        return $this->invoiceInterval;
    }

    /**
     *
     * @param int $invoiceInterval
     * @return self
     */
    public function setInvoiceInterval($invoiceInterval): self
    {
        $this->invoiceInterval = $invoiceInterval;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getInvoicesRemaining()
    {
        return $this->invoicesRemaining;
    }

    /**
     *
     * @param string $invoicesRemaining
     * @return self
     */
    public function setInvoicesRemaining($invoicesRemaining): self
    {
        $this->invoicesRemaining = $invoicesRemaining;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function getInvoiceRows()
    {
        return $this->invoiceRows;
    }

    /**
     *
     * @param array $invoiceRows
     * @return self
     */
    public function setInvoiceRows($invoiceRows): self
    {
        $this->invoiceRows = $invoiceRows;
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
    public function getLastInvoiceDate()
    {
        return $this->lastInvoiceDate;
    }

    /**
     *
     * @param string $lastInvoiceDate
     * @return self
     */
    public function setLastInvoiceDate($lastInvoiceDate): self
    {
        $this->lastInvoiceDate = $lastInvoiceDate;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getNet(): ?float
    {
        return $this->net;
    }

    /**
     *
     * @param double $net
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
    public function getPeriodEnd()
    {
        return $this->periodEnd;
    }

    /**
     *
     * @param string $periodEnd
     * @return self
     */
    public function setPeriodEnd($periodEnd): self
    {
        $this->periodEnd = $periodEnd;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPeriodStart()
    {
        return $this->periodStart;
    }

    /**
     *
     * @param string $periodStart
     * @return self
     */
    public function setPeriodStart($periodStart): self
    {
        $this->periodStart = $periodStart;
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
     * @return double
     */
    public function getRoundOff(): ?float
    {
        return $this->roundOff;
    }

    /**
     *
     * @param double $roundOff
     * @return self
     */
    public function setRoundOff($roundOff): self
    {
        $this->roundOff = $roundOff;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getTaxReduction(): ?float
    {
        return $this->taxReduction;
    }

    /**
     *
     * @param double $taxReduction
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
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     *
     * @param string $templateName
     * @return self
     */
    public function setTemplateName($templateName): self
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTemplateNumber(): ?int
    {
        return $this->templateNumber;
    }

    /**
     *
     * @param int $templateNumber
     * @return self
     */
    public function setTemplateNumber($templateNumber): self
    {
        $this->templateNumber = $templateNumber;
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
     * @return double
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     *
     * @param double $total
     * @return self
     */
    public function setTotal($total): self
    {
        $this->total = $total;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getTotalToPay(): ?float
    {
        return $this->totalToPay;
    }

    /**
     *
     * @param double $totalToPay
     * @return self
     */
    public function setTotalToPay($totalToPay): self
    {
        $this->totalToPay = $totalToPay;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getTotalVAT(): ?float
    {
        return $this->totalVAT;
    }

    /**
     *
     * @param double $totalVAT
     * @return self
     */
    public function setTotalVAT($totalVAT): self
    {
        $this->totalVAT = $totalVAT;
        return $this;
    }

    /**
     *
     * @return bool
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     *
     * @param bool $vatIncluded
     * @return self
     */
    public function setVatIncluded($vatIncluded): self
    {
        $this->vatIncluded = $vatIncluded;
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
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *
     * @param string $Status
     * @return self
     */
    public function setStatus($Status): self
    {
        $this->Status = $Status;
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
     * @return Contract
     */
    public static function deserialize(string $data)
    {
        return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
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
            if (isset($data['InvoiceRows']) && $this->invoiceRows) $data['InvoiceRows'] = array_map(fn($row) => $row->toArray(true), $this->invoiceRows);
        }

        return $data;
    }
    /**
     * @return self
     */
    public static function fromArray(array $data)
    {
        return SerializerBuilder::create()->build()->fromArray($data, self::class);
    }
}
