<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SkipWhenEmpty;

class InvoiceRow implements SerializableInterface
{
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("AccountNumber")
     * @SkipWhenEmpty()
     */
    private $accountNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ArticleNumber")
     * @SkipWhenEmpty()
     */
    private $articleNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContributionPercent")
     * @SkipWhenEmpty()
     */
    private $contributionPercent;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContributionValue")
     * @SkipWhenEmpty()
     */
    private $contributionValue;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     * @SkipWhenEmpty()
     */
    private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveredQuantity")
     * @SkipWhenEmpty()
     */
    private $deliveredQuantity;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Description")
     * @SkipWhenEmpty()
     */
    private $description;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Discount")
     * @SkipWhenEmpty()
     */
    private $discount;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DiscountType")
     * @SkipWhenEmpty()
     */
    private $discountType;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("HouseWork")
     * @SkipWhenEmpty()
     */
    private $houseWork;
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("HouseWorkHoursToReport")
     * @SkipWhenEmpty()
     */
    private $houseWorkHoursToReport;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("HouseWorkType")
     * @SkipWhenEmpty()
     */
    private $houseWorkType;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Price")
     * @SkipWhenEmpty()
     */
    private $price;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("PriceExcludingVAT")
     * @SkipWhenEmpty()
     */
    private $priceExcludingVAT;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     * @SkipWhenEmpty()
     */
    private $project;
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("RowId")
     * @SkipWhenEmpty()
     */
    private $rowId;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointCode")
     * @SkipWhenEmpty()
     */
    private $stockPointCode;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Total")
     * @SkipWhenEmpty()
     */
    private $total;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("TotalExcludingVAT")
     * @SkipWhenEmpty()
     */
    private $totalExcludingVAT;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Unit")
     * @SkipWhenEmpty()
     */
    private $unit;
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("VAT")
     * @SkipWhenEmpty()
     */
    private $vat;

    /**
     *
     * @return integer
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     *
     * @param integer $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber): self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getArticleNumber()
    {
        return $this->articleNumber;
    }

    /**
     *
     * @param string $articleNumber
     * @return self
     */
    public function setArticleNumber($articleNumber): self
    {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getContributionPercent()
    {
        return $this->contributionPercent;
    }

    /**
     *
     * @param string $contributionPercent
     * @return self
     */
    public function setContributionPercent($contributionPercent): self
    {
        $this->contributionPercent = $contributionPercent;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getContributionValue()
    {
        return $this->contributionValue;
    }

    /**
     *
     * @param string $contributionValue
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
    public function getDeliveredQuantity()
    {
        return $this->deliveredQuantity;
    }

    /**
     *
     * @param string $deliveredQuantity
     * @return self
     */
    public function setDeliveredQuantity($deliveredQuantity): self
    {
        $this->deliveredQuantity = $deliveredQuantity;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     *
     * @param double $discount
     * @return self
     */
    public function setDiscount($discount): self
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     *
     * @param string $discountType
     * @return self
     */
    public function setDiscountType($discountType): self
    {
        $this->discountType = $discountType;
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
     * @return int
     */
    public function getHouseWorkHoursToReport()
    {
        return $this->houseWorkHoursToReport;
    }

    /**
     *
     * @param int $houseWorkHoursToReport
     * @return self
     */
    public function setHouseWorkHoursToReport($houseWorkHoursToReport): self
    {
        $this->houseWorkHoursToReport = $houseWorkHoursToReport;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getHouseWorkType()
    {
        return $this->houseWorkType;
    }

    /**
     *
     * @param string $houseWorkType
     * @return self
     */
    public function setHouseWorkType($houseWorkType): self
    {
        $this->houseWorkType = $houseWorkType;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     *
     * @param double $price
     * @return self
     */
    public function setPrice($price): self
    {
        $this->price = $price;
        return $this;
    }

    /**
     *
     * @return double
     */
    public function getPriceExcludingVAT()
    {
        return $this->priceExcludingVAT;
    }

    /**
     *
     * @param double $priceExcludingVAT
     * @return self
     */
    public function setPriceExcludingVAT($priceExcludingVAT): self
    {
        $this->priceExcludingVAT = $priceExcludingVAT;
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
     * @return int
     */
    public function getRowId()
    {
        return $this->rowId;
    }

    /**
     *
     * @param int $rowId
     * @return self
     */
    public function setRowId($rowId): self
    {
        $this->rowId = $rowId;
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
     * @return double
     */
    public function getTotal()
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
    public function getTotalExcludingVAT()
    {
        return $this->totalExcludingVAT;
    }

    /**
     *
     * @param double $totalExcludingVAT
     * @return self
     */
    public function setTotalExcludingVAT($totalExcludingVAT): self
    {
        $this->totalExcludingVAT = $totalExcludingVAT;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit): self
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     *
     * @param int $vat
     * @return self
     */
    public function setVat($vat): self
    {
        $this->vat = $vat;
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
     * @return InvoiceRow
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
	public function toArray(array $groups = ["invoice_row"]): array {
		return SerializerBuilder::create()->build()->toArray($this, SerializationContext::create()->setGroups($groups));
	}

	/**
	 * @return self
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class)->setAccountNumber(3001);
	}

    /**
     */
    public function __construct() {
        $this->accountNumber = 3001;
    }
}
