<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class InvoiceRow implements SerializableInterface
{
    /**
     * @var integer
     * @Type("integer")
     * @Serialzname("AccountNumber")
     */
    private $accountNumber;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("ArticleNumber")
     */
    private $articleNumber;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("ContributionPercent")
     */
    private $contributionPercent;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("ContributionValue")
     */
    private $contributionValue;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("CostCenter")
     */
    private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("DeliveredQuantity")
     */
    private $deliveredQuantity;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("Description")
     */
    private $description;
    /**
     * @var double
     * @Type("double")
     * @Serialzname("Discount")
     */
    private $discount;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("DiscountType")
     */
    private $discountType;
    /**
     * @var bool
     * @Type("boolean")
     * @Serialzname("HouseWork")
     */
    private $houseWork;
    /**
     * @var int
     * @Type("integer")
     * @Serialzname("HouseWorkHoursToReport")
     */
    private $houseWorkHoursToReport;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("HouseWorkType")
     */
    private $houseWorkType;
    /**
     * @var double
     * @Type("double")
     * @Serialzname("Price")
     */
    private $price;
    /**
     * @var double
     * @Type("double")
     * @Serialzname("PriceExcludingVAT")
     */
    private $priceExcludingVAT;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("Project")
     */
    private $project;
    /**
     * @var int
     * @Type("integer")
     * @Serialzname("RowId")
     */
    private $rowId;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("StockPointCode")
     */
    private $stockPointCode;
    /**
     * @var double
     * @Type("double")
     * @Serialzname("Total")
     */
    private $total;
    /**
     * @var double
     * @Type("double")
     * @Serialzname("TotalExcludingVAT")
     */
    private $totalExcludingVAT;
    /**
     * @var string
     * @Type("string")
     * @Serialzname("Unit")
     */
    private $unit;
    /**
     * @var int
     * @Type("integer")
     * @Serialzname("VAT")
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
}
