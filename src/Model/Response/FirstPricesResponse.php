<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\Price;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerBuilder;

class FirstPricesResponse implements SerializableInterface
{
    /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var Price
     * @Type("ITBMedia\FortnoxBundle\Model\Price")
     * @SerializedName("Price")
     */
    private Price $price;

    public function getMetaInformation(): MetaInformation
    {
        return $this->metaInformation;
    }

    public function setMetaInformation(MetaInformation $metaInformation): self
    {
        $this->metaInformation = $metaInformation;
        return $this;
    }

    /**
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }

    /**
     * @param Price $price
     */
    public function setPrice(Price $price): self
    {
        $this->price = $price;
        return $this;
    }

    public function serialize()
    {
        return SerializerBuilder::create()->build()->serialize($this, 'json');
    }

    public static function deserialize(string $data): self
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
