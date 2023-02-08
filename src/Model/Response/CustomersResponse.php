<?php
namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class CustomersResponse implements SerializableInterface 
{
     /**
     * @var MetaInformation
     * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
     * @SerializedName("MetaInformation")
     */
    private MetaInformation $metaInformation;

    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\Customer>")
     * @SerializedName("Customers")
     */
    private array $customers;

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
	 * @return array
	 */
	public function getCustomers(): array {
		return $this->customers;
	}
	
	/**
	 * 
	 * @param array $customers 
	 * @return self
	 */
	public function setCustomers(array $customers): self {
		$this->customers = $customers;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return CustomersResponse
	 */
	public static function deserialize(string $data) : CustomersResponse {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}	
}