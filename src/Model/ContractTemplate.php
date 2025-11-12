<?php

namespace ITBMedia\FortnoxBundle\Model;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SkipWhenEmpty;

class ContractTemplate implements SerializableInterface
{
	/**
	 * @var string
	 * @Type("string")
	 * @SerializedName("@url")
	 * @SkipWhenEmpty()
	 */
	private ?string $url = null;

	/**
	 * @var int
	 * @Type("integer")
	 * @SerializedName("ContractLength")
	 * @SkipWhenEmpty()
	 */
	private ?int $contractLength = null;

	/**
	 * @var int
	 * @Type("integer")
	 * @SerializedName("ContractTemplate")
	 * @SkipWhenEmpty()
	 */
	private ?int $contractTemplate = null;

	/**
	 * @var string
	 * @Type("string")
	 * @SerializedName("ContractTemplateName")
	 * @SkipWhenEmpty()
	 */
	private ?string $contractTemplateName = null;

	/**
	 * @var int
	 * @Type("integer")
	 * @SerializedName("InvoiceInterval")
	 * @SkipWhenEmpty()
	 */
	private ?int $invoiceInterval = null;

	public function getUrl()
	{
		return $this->url;
	}

	public function setUrl($url): self
	{
		$this->url = $url;
		return $this;
	}

	public function getContractLength()
	{
		return $this->contractLength;
	}

	public function setContractLength($contractLength): self
	{
		$this->contractLength = $contractLength;
		return $this;
	}

	public function getContractTemplate()
	{
		return $this->contractTemplate;
	}

	public function setContractTemplate($contractTemplate): self
	{
		$this->contractTemplate = $contractTemplate;
		return $this;
	}

	public function getContractTemplateName()
	{
		return $this->contractTemplateName;
	}

	public function setContractTemplateName($contractTemplateName): self
	{
		$this->contractTemplateName = $contractTemplateName;
		return $this;
	}

	public function getInvoiceInterval()
	{
		return $this->invoiceInterval;
	}

	public function setInvoiceInterval($invoiceInterval): self
	{
		$this->invoiceInterval = $invoiceInterval;
		return $this;
	}

	public function serialize()
	{
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}

	public static function deserialize(string $data)
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
