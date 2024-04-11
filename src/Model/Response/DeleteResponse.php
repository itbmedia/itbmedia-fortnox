<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class DeleteResponse implements SerializableInterface
{
	/**
	 * @var string
	 * @Type("string")
	 * @SerializedName("error")
	 */
	private ?string $error;
	/**
	 * @var string
	 * @Type("string")
	 * @SerializedName("id")
	 */
	private ?string $id;

	/**
	 * @var string
	 * @Type("string")
	 * @SerializedName("message")
	 */
	private ?string $message;


	/**
	 * @return string
	 */
	public function serialize()
	{
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	/**
	 * @return DeleteResponse
	 */
	public static function deserialize(string $data): DeleteResponse
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
	 * @return DeleteResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
