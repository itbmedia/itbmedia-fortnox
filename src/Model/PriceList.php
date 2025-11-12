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

class PriceList implements SerializableInterface
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
   * @SerializedName("Comments")
   * @SkipWhenEmpty()
   */
  private ?string $comments;

  /**
   * @var bool
   * @Type("bool")
   * @SerializedName("PreSelected")
   * @SkipWhenEmpty()
   */
  private ?bool $preSelected;


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
  public function getPreSelected()

  {
    return $this->preSelected;
  }

  /**
   *
   * @param bool $preSelected
   * @return self
   */
  public function setPreSelected($preSelected): self
  {
    $this->preSelected = $preSelected;
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
   * @return PriceList
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
