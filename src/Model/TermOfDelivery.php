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

class TermOfDelivery implements SerializableInterface
{
  /**
   * @var string
   * @Type("string")
   * @SerializedName("@url")
   * @SkipWhenEmpty()
   */
  private ?string $url;

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
   * @SerializedName("Description")
   * @SkipWhenEmpty()
   */
  private ?string $description;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("DescriptionEnglish")
   * @SkipWhenEmpty()
   */
  private ?string $descriptionEnglish;

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
   * @return string
   */
  public function getDescriptionEnglish()

  {
    return $this->descriptionEnglish;
  }

  /**
   *
   * @param string $descriptionEnglish
   * @return self
   */
  public function setDescriptionEnglish($descriptionEnglish): self
  {
    $this->descriptionEnglish = $descriptionEnglish;
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
   * @return TermOfDelivery
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
