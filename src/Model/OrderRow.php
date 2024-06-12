<?php

namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\SkipWhenEmpty;

class OrderRow implements SerializableInterface
{
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("AccountNumber")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $accountNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ArticleNumber")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $articleNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContributionPercent")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $contributionPercent;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContributionValue")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $contributionValue;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DeliveredQuantity")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $deliveredQuantity;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Description")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $description;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Discount")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $discount;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DiscountType")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $discountType;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("HouseWork")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $houseWork;
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("HouseWorkHoursToReport")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $houseWorkHoursToReport;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("HouseWorkType")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $houseWorkType;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("OrderedQuantity")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $orderedQuantity;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Price")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $price;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $project;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ReservedQuantity")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $reservedQuantity;
    /**
     * @var int
     * @Type("int")
     * @SerializedName("RowId")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $rowId;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointCode")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $stockPointCode;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("StockPointId")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $stockPointId;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Total")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $total;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Unit")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $unit;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("VAT")
     * @Groups({"order_row", "order"})
     * @SkipWhenEmpty()
     */
    private $vat;

    /**
     *
     * @return int
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     *
     * @param int $accountNumber
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
     * @return string
     */
    public function getOrderedQuantity()
    {
        return $this->orderedQuantity;
    }

    /**
     *
     * @param string $orderedQuantity
     * @return self
     */
    public function setOrderedQuantity($orderedQuantity): self
    {
        $this->orderedQuantity = $orderedQuantity;
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
    public function getReservedQuantity()
    {
        return $this->reservedQuantity;
    }

    /**
     *
     * @param string $reservedQuantity
     * @return self
     */
    public function setReservedQuantity($reservedQuantity): self
    {
        $this->reservedQuantity = $reservedQuantity;
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
     * @return double
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     *
     * @param double $vat
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
            ->serialize($this, "json", SerializationContext::create()->setSerializeNull(false));
    }

    /**
     * @return OrderRow
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
    public function toArray($excludeReadonly = false): array
    {
        $serializer = SerializerBuilder::create()->build();
        $context = SerializationContext::create();

        $data = $serializer->toArray($this, $context);

        if ($excludeReadonly) {
            $excludeKeys = [
                "Total",
                "TotalToPay",
                "TotalVAT"
            ];

            $data = array_diff_key($data, array_flip($excludeKeys));
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
