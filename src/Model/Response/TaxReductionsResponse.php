<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use ITBMedia\FortnoxBundle\Model\TaxReduction;

class TaxReductionsResponse implements SerializableInterface
{
    /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var TaxReduction[]
     * @Type("array<ITBMedia\FortnoxBundle\Model\TaxReduction>")
     * @SerializedName("TaxReductions")
     */
    private array $taxReductions;

    /**
     * 
     * @return MetaInformation
     */
    public function getMetaInformation(): MetaInformation {
        return $this->metaInformation;
    }

    /**
     * 
     * @param MetaInformation $metaInformation 
     * @return self
     */
    public function setMetaInformation(MetaInformation $metaInformation): self {
        $this->metaInformation = $metaInformation;
        return $this;
    }

    /**
     * 
     * @return TaxReduction[]
     */
    public function getTaxReductions(): array {
        return $this->taxReductions;
    }

    /**
     * 
     * @param TaxReduction[] $taxReductions 
     * @return self
     */
    public function setTaxReductions(array $taxReductions): self {
        $this->taxReductions = $taxReductions;
        return $this;
    }

    /**
     * @return string
     */
    public function serialize() {
        return SerializerBuilder::create()->build()->serialize($this, 'json');
    }

    /**
     * @return TaxReductionsResponse
     */
    public static function deserialize(string $data) : TaxReductionsResponse {
        return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
    }

    /**
     * @return array
     */
    public function toArray() : array {
        return SerializerBuilder::create()->build()->toArray($this);
    }

    /**
     * @return TaxReductionsResponse
     */
    public static function fromArray(array $data) {
        return SerializerBuilder::create()->build()->fromArray($data, self::class);
    }
}
