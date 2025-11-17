<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerBuilder;

class Price implements SerializableInterface
{
    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("@url")
     * @SkipWhenEmpty()
     */
    private ?string $url = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("ArticleNumber")
     * @SkipWhenEmpty()
     */
    private ?string $articleNumber = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("Date")
     * @SkipWhenEmpty()
     */
    private ?string $date = null;

    /**
     * @var float|null
     * @Type("float")
     * @SerializedName("FromQuantity")
     * @SkipWhenEmpty()
     */
    private ?float $fromQuantity = null;

    /**
     * @var float|null
     * @Type("float")
     * @SerializedName("Percent")
     * @SkipWhenEmpty()
     */
    private ?float $percent = null;

    /**
     * @var float|null
     * @Type("float")
     * @SerializedName("Price")
     * @SkipWhenEmpty()
     */
    private ?float $price = null;

    /**
     * @var string|null
     * @Type("string")
     * @SerializedName("PriceList")
     * @SkipWhenEmpty()
     */
    private ?string $priceList = null;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    public function getArticleNumber(): ?string
    {
        return $this->articleNumber;
    }

    public function setArticleNumber(?string $articleNumber): self
    {
        $this->articleNumber = $articleNumber;
        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getFromQuantity(): ?float
    {
        return $this->fromQuantity;
    }

    public function setFromQuantity(?float $fromQuantity): self
    {
        $this->fromQuantity = $fromQuantity;
        return $this;
    }

    public function getPercent(): ?float
    {
        return $this->percent;
    }

    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;
        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function getPriceList(): ?string
    {
        return $this->priceList;
    }

    public function setPriceList(?string $priceList): self
    {
        $this->priceList = $priceList;
        return $this;
    }

    public function serialize()
    {
        return SerializerBuilder::create()->build()->serialize($this, 'json');
    }

    public static function deserialize(string $data)
    {
        return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
    }

    public function toArray(): array
    {
        return SerializerBuilder::create()->build()->toArray($this);
    }

    public static function fromArray(array $data)
    {
        return SerializerBuilder::create()->build()->fromArray($data, self::class);
    }
}
