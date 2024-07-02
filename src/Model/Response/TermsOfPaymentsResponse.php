<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use ITBMedia\FortnoxBundle\Model\TermOfPayment;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

use ITBMedia\FortnoxBundle\Model\MetaInformation;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class TermsOfPaymentsResponse implements SerializableInterface
{
	/**
	 * @var MetaInformation
	 * @Type("ITBMedia\FortnoxBundle\Model\MetaInformation")
	 * @SerializedName("MetaInformation")
	 */
	private MetaInformation $metaInformation;

	/**
	 * @var TermOfPayment[]
	 * @Type("array<ITBMedia\FortnoxBundle\Model\TermOfPayment>")
	 * @SerializedName("TermsOfPayments")
	 */
	private array $termsOfPayments;

	/**
	 *
	 * @return MetaInformation
	 */
	public function getMetaInformation(): MetaInformation
	{
		return $this->metaInformation;
	}

	/**
	 *
	 * @param MetaInformation $metaInformation
	 * @return self
	 */
	public function setMetaInformation(MetaInformation $metaInformation): self
	{
		$this->metaInformation = $metaInformation;
		return $this;
	}

	/**
	 *
	 * @return TermOfPayment[]
	 */
	public function getTermsOfPayments(): array
	{
		return $this->termsOfPayments;
	}

	/**
	 *
	 * @param TermOfPayment[] $termsOfPayments
	 * @return self
	 */
	public function setTermsOfPayments(array $termsOfPayments): self
	{
		$this->termsOfPayments = $termsOfPayments;
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
	 * @return TermsOfPaymentsResponse
	 */
	public static function deserialize(string $data): TermsOfPaymentsResponse
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
	 * @return TermsOfPaymentsResponse
	 */
	public static function fromArray(array $data)
	{
		return SerializerBuilder::create()->build()->fromArray($data, self::class);
	}
}
