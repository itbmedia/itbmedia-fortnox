<?php
namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\Invoice;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class InvoicesResponse implements SerializableInterface 
{
     /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;
	
    /**
     * @var Invoice[]
     * @Type("array<ITBMedia\FortnoxBundle\Model\Invoice>")
     * @SerializedName("Invoices")
     */
    private array $invoices;

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
	 * @return Invoice[]
	 */
	public function getInvoices(): array {
		return $this->invoices;
	}
	
	/**
	 * 
	 * @param Invoice[] $invoices 
	 * @return self
	 */
	public function setInvoices(array $invoices): self {
		$this->invoices = $invoices;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return InvoicesResponse
	 */
	public static function deserialize(string $data) : InvoicesResponse {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return array
	 */
	public function toArray() : array {
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return InvoicesResponse
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}