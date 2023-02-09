<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class PrintTemplate implements SerializableInterface
{
    /**
	* @var string
	* @Type("string")
	* @SerializedName("Template")
	*/
	private $template;
    
	/**
	* @var string
	* @Type("string")
	* @SerializedName("Name")
	*/
	private $name;

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return PrintTemplate
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}

	/**
	 * @return array
	 */
	public function toArray() : array {
		return SerializerBuilder::create()->build()->toArray($this);
	}

	/**
	 * @return PrintTemplate
	 */
	public static function fromArray(array $data) {
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}