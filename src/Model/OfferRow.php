<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;

class OfferRow implements SerializableInterface
{
    /**
     * @var int
     * @Type("integer")
     * @SerializedName("AccountNumber")
     * @Groups({"offer", "offerRow"})
     */
    private $accountNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ArticleNumber")
     * @Groups({"offer", "offerRow"})
     */
    private $articleNumber;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContributionPercent")
     * @Groups({"offer", "offerRow"})
     */
    private $contributionPercent;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("ContributionValue")
     * @Groups({"offer", "offerRow"})
     */
    private $contributionValue;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("CostCenter")
     * @Groups({"offer", "offerRow"})
     */
    private $costCenter;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Description")
     * @Groups({"offer", "offerRow"})
     */
    private $description;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Discount")
     * @Groups({"offer", "offerRow"})
     */
    private $discount;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("DiscountType")
     * @Groups({"offer", "offerRow"})
     */
    private $discountType;
    /**
     * @var bool
     * @Type("boolean")
     * @SerializedName("HouseWork")
     * @Groups({"offer", "offerRow"})
     */
    private $houseWork;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("HouseWorkHoursToReport")
     * @Groups({"offer", "offerRow"})
     */
    private $houseWorkHoursToReport;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("HouseWorkType")
     * @Groups({"offer", "offerRow"})
     */
    private $houseWorkType;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Price")
     * @Groups({"offer", "offerRow"})
     */
    private $price;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Project")
     * @Groups({"offer", "offerRow"})
     */
    private $project;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Quantity")
     * @Groups({"offer", "offerRow"})
     */
    private $quantity;
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("RowId")
     * @Groups({"offer", "offerRow"})
     */
    private $rowId;
    /**
     * @var double
     * @Type("double")
     * @SerializedName("Total")
     * @Groups({"offer", "offerRow"})
     */
    private $total;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("Unit")
     * @Groups({"offer", "offerRow"})
     */
    private $unit;
    /**
     * @var integer
     * @Type("integer")
     * @SerializedName("VAT")
     * @Groups({"offer", "offerRow"})
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
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     *
     * @param int $discount
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
     * @return double
     */
    public function getHouseWorkHoursToReport()
    {
        return $this->houseWorkHoursToReport;
    }

    /**
     *
     * @param double $houseWorkHoursToReport
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
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *
     * @param string $quantity
     * @return self
     */
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     *
     * @return integer
     */
    public function getRowId()
    {
        return $this->rowId;
    }

    /**
     *
     * @param integer $rowId
     * @return self
     */
    public function setRowId($rowId): self
    {
        $this->rowId = $rowId;
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
     * @return integer
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     *
     * @param integer $vat
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
     * @return OfferRow
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
