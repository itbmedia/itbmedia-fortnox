<?php
namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class PrintTemplatesResponse implements SerializableInterface
{
    /**
     * @var array
     * @Type("array<ITBMedia\FortnoxBundle\Model\PrintTemplate>")
     * @SerializedName("PrintTemplates")
     */
    private array $printTemplates;

	/**
	 * 
	 * @return array
	 */
	public function getPrintTemplates(): array {
		return $this->printTemplates;
	}
	
	/**
	 * 
	 * @param array $printTemplates 
	 * @return self
	 */
	public function setPrintTemplates(array $printTemplates): self {
		$this->printTemplates = $printTemplates;
		return $this;
	}

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return PrintTemplatesResponse
	 */
	public static function deserialize(string $data) : PrintTemplatesResponse {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return array
	 */
	public function toArray() : array {
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return PrintTemplatesResponse
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}