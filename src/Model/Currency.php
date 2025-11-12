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

class Currency implements SerializableInterface
{
  /**
   * @var string
   * @Type("string")
   * @SerializedName("@url")
   * @SkipWhenEmpty()
   */
  private ?string $url;

  /**
   * @var float
   * @Type("float")
   * @SerializedName("BuyRate")
   * @SkipWhenEmpty()
   */
  private ?float $buyRate;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("Code")
   * @SkipWhenEmpty()
   */
  private ?string $code;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("Date")
   * @SkipWhenEmpty()
   */
  private ?string $date;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("Description")
   * @SkipWhenEmpty()
   */
  private ?string $description;

  /**
   * @var bool
   * @Type("bool")
   * @SerializedName("IsAutomatic")
   * @SkipWhenEmpty()
   */
  private ?bool $isAutomatic;

  /**
   * @var float
   * @Type("float")
   * @SerializedName("SellRate")
   * @SkipWhenEmpty()
   */
  private ?float $sellRate;

  /**
   * @var int
   * @Type("integer")
   * @SerializedName("Unit")
   * @SkipWhenEmpty()
   */
  private ?int $unit;

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
   * @return float
   */
  public function getBuyRate()
  {
    return $this->buyRate;
  }

  /**
   *
   * @param float $buyRate
   * @return self
   */
  public function setBuyRate($buyRate): self
  {
    $this->buyRate = $buyRate;
    return $this;
  }

  /**
   *
   * @return string
   */
  public function getCode()
  {
    return $this->code;
  }

  /**
   *
   * @param string $code
   * @return self
   */

  public function setCode($code): self
  {
    $this->code = $code;
    return $this;
  }

  /**
   *
   * @return string
   */
  public function getDate()

  {
    return $this->date;
  }

  /**
   *
   * @param string $date
   * @return self
   */
  public function setDate($date): self
  {
    $this->date = $date;
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
   * @return bool
   */
  public function getIsAutomatic()

  {
    return $this->isAutomatic;
  }

  /**
   *
   * @param bool $isAutomatic
   * @return self
   */
  public function setIsAutomatic($isAutomatic): self
  {
    $this->isAutomatic = $isAutomatic;
    return $this;
  }

  /**
   *
   * @return float
   */
  public function getSellRate()

  {
    return $this->sellRate;
  }

  /**
   *
   * @param float $sellRate
   * @return self
   */
  public function setSellRate($sellRate): self
  {
    $this->sellRate = $sellRate;
    return $this;
  }

  /**
   *
   * @return int
   */
  public function getUnit()

  {
    return $this->unit;
  }

  /**
   *
   * @param int $unit
   * @return self
   */
  public function setUnit($unit): self
  {
    $this->unit = $unit;
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
   * @return Currency
   */
  public static function deserialize(string $data)
  {
    return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
  }

  /**
   * @return array
   */
  public function toArray(): array
  {
    return SerializerBuilder::create()->build()->toArray($this);
  }

  /**
   * @return self
   */
  public static function fromArray(array $data)
  {
    return SerializerBuilder::create()->build()->fromArray($data, self::class);
  }
}
