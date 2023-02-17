<?php

class NewInvoice 
{
    /**
     * @var string
     */
    public string $url;
	/**
     * @var string
     */
    public string $urlTaxReductionList;
	/**
     * @var float
     */
    public float $administrationFee;
	/**
     * @var float
     */
    public float $administrationFeeVat;
	/**
     * @var string
     */
    public string $address1;
	/**
     * @var string
     */
    public string $address2;
	/**
     * @var float
     */
    public float $balance;
	/**
     * @var float
     */
    public float $basisTaxReduction;
	/**
     * @var bool
     */
    public bool $booked;
	/**
     * @var bool
     */
    public bool $cancelled;
	/**
     * @var string
     */
    public string $city;
	/**
     * @var string
     */
    public string $comments;
	/**
     * @var int
     */
    public int $contractReference;
	/**
     * @var float
     */
    public float $contributionPercent;
	/**
     * @var float
     */
    public float $contributionValue;
	/**
     * @var string
     */
    public string $country;
	/**
     * @var string
     */
    public string $costCenter;
	/**
     * @var string
     */
    public string $credit;
	/**
     * @var string
     */
    public string $creditInvoiceReference;
	/**
     * @var string
     */
    public string $currency;
	/**
     * @var float
     */
    public float $currencyRate;
	/**
     * @var int
     */
    public int $currencyUnit;
	/**
     * @var string
     */
    public string $customerName;
	/**
     * @var string
     */
    public string $customerNumber;
	/**
     * @var string
     */
    public string $deliveryAddress1;
	/**
     * @var string
     */
    public string $deliveryAddress2;
	/**
     * @var string
     */
    public string $deliveryCity;
	/**
     * @var string
     */
    public string $deliveryCountry;
	/**
     * @var string
     */
    public string $deliveryDate;
	/**
     * @var string
     */
    public string $deliveryName;
	/**
     * @var string
     */
    public string $deliveryZipCode;
	/**
     * @var string
     */
    public string $documentNumber;
	/**
     * @var string
     */
    public string $dueDate;
	public EdiInformation $ediInformation;
	public EmailInformation $emailInformation;
	/**
     * @var bool
     */
    public bool $euQuarterlyReport;
	/**
     * @var string
     */
    public string $externalInvoiceReference1;
	/**
     * @var string
     */
    public string $externalInvoiceReference2;
	/**
     * @var float
     */
    public float $freight;
	/**
     * @var float
     */
    public float $freightVat;
	/**
     * @var float
     */
    public float $gross;
	/**
     * @var bool
     */
    public bool $houseWork;
	/**
     * @var string
     */
    public string $invoiceDate;
	/**
     * @var string
     */
    public string $invoicePeriodStart;
	/**
     * @var string
     */
    public string $invoicePeriodEnd;
	/**
     * @var string
     */
    public string $invoicePeriodReference;
	public array $invoiceRows;
	/**
     * @var string
     */
    public string $invoiceType;
	public array $labels;
	/**
     * @var string
     */
    public string $language;
	/**
     * @var string
     */
    public string $lastRemindDate;
	/**
     * @var float
     */
    public float $net;
	/**
     * @var bool
     */
    public bool $notCompleted;
	/**
     * @var bool
     */
    public bool $noxFinans;
	/**
     * @var string
     */
    public string $ocr;
	/**
     * @var string
     */
    public string $offerReference;
	/**
     * @var string
     */
    public string $orderReference;
	/**
     * @var string
     */
    public string $organisationNumber;
	/**
     * @var string
     */
    public string $ourReference;
	/**
     * @var string
     */
    public string $paymentWay;
	/**
     * @var string
     */
    public string $phone1;
	/**
     * @var string
     */
    public string $phone2;
	/**
     * @var string
     */
    public string $priceList;
	/**
     * @var string
     */
    /**
     * @var int
     */public string 
    $printTemplate;
	/**
     * @var string
     */
    public string $project;
	/**
     * @var bool
     */
    public bool $warehouseReady;
	/**
     * @var string
     */
    public string $outboundDate;
	/**
     * @var string
     */
    public string $remarks;
	/**
     * @var int
     */
    public int $reminders;
	/**
     * @var float
     */
    public float $roundOff;
	/**
     * @var bool
     */
    public bool $sent;
	/**
     * @var int
     */
    public int $taxReduction;
	/**
     * @var string
     */
    public string $termsOfDelivery;
	/**
     * @var string
     */
    public string $termsOfPayment;
	/**
     * @var int
     */
    public int $timeBasisReference;
	/**
     * @var float
     */
    public float $total;
	/**
     * @var float
     */
    public float $totalToPay;
	/**
     * @var float
     */
    public float $totalVat;
	/**
     * @var bool
     */
    public bool $vatIncluded;
	/**
     * @var int
     */
    public int $voucherNumber;
	/**
     * @var string
     */
    public string $voucherSeries;
	/**
     * @var int
     */
    public int $voucherYear;
	/**
     * @var string
     */
    public string $wayOfDelivery;
	/**
     * @var string
     */
    public string $yourOrderNumber;
	/**
     * @var string
     */
    public string $yourReference;
	/**
     * @var string
     */
    public string $zipCode;
	/**
     * @var string
     */
    public string $accountingMethod;
	/**
     * @var string
     */
    public string $taxReductionType;
	/**
     * @var string
     */
    public string $finalPayDate;  
}