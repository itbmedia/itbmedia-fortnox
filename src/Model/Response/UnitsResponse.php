<?php
namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class UnitsResponse implements SerializableInterface 
{
    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\Unit>")
     * @SerializedName("Units")
     */
    private array $units;
	/**
	 * 
	 * @return array
	 */
	public function getUnits(): array {
		return $this->units;
	}
	
	/**
	 * 
	 * @param array $units 
	 * @return self
	 */
	public function setUnits(array $units): self {
		$this->units = $units;
		return $this;
	}
	
	/**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return UnitsResponse
	 */
	public static function deserialize(string $data) : UnitsResponse {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return array
	 */
	public function toArray() : array {
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return UnitsResponse
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}