<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\Price;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\SerializerBuilder;

class ArticlePricesResponse implements SerializableInterface
{
    /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var Price[]
     * @Type("array<ITBMedia\FortnoxBundle\Model\Price>")
     * @SerializedName("Prices")
     */
    private array $prices = [];

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
     * @return Price[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param Price[] $prices
     */
    public function setPrices(array $prices): self
    {
        $this->prices = $prices;
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
