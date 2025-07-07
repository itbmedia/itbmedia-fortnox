<?php

namespace ITBMedia\FortnoxBundle\Model\Response;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use ITBMedia\FortnoxBundle\Model\SerializableInterface;

class NoxFinansInvoiceResponse implements SerializableInterface
{
  /**
   * @var float
   * @Type("float")
   * @SerializedName("BalanceIncludeFees")
   */
  private float $balanceIncludeFees;

  /**
   * @var float
   * @Type("float")
   * @SerializedName("BalanceIncludeFeesCurrency")
   */
  private float $balanceIncludeFeesCurrency;

  /**
   * @var float
   * @Type("float")
   * @SerializedName("CurrentCapitalBalance")
   */
  private float $currentCapitalBalance;

  /**
   * @var float
   * @Type("float")
   * @SerializedName("CurrentCapitalBalanceCurrency")
   */
  private float $currentCapitalBalanceCurrency;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("InvoiceDocumentURL")
   */
  private string $invoiceDocumentURL;

  /**
   * @var int
   * @Type("integer")
   * @SerializedName("InvoiceNumber")
   */
  private int $invoiceNumber;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("NextEvent")
   */
  private string $nextEvent;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("NextEventDate")
   */
  private string $nextEventDate;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("OCRNumber")
   */
  private string $ocrNumber;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("Service")
   */
  private string $service;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("ServiceName")
   */
  private string $serviceName;

  /**
   * @var string
   * @Type("string")
   * @SerializedName("Status")
   */
  private string $status;


  // Getters & setters

  public function getBalanceIncludeFees(): float
  {
    return $this->balanceIncludeFees;
  }

  public function setBalanceIncludeFees(float $balanceIncludeFees): self
  {
    $this->balanceIncludeFees = $balanceIncludeFees;
    return $this;
  }

  public function getBalanceIncludeFeesCurrency(): float
  {
    return $this->balanceIncludeFeesCurrency;
  }

  public function setBalanceIncludeFeesCurrency(float $balanceIncludeFeesCurrency): self
  {
    $this->balanceIncludeFeesCurrency = $balanceIncludeFeesCurrency;
    return $this;
  }

  public function getCurrentCapitalBalance(): float
  {
    return $this->currentCapitalBalance;
  }

  public function setCurrentCapitalBalance(float $currentCapitalBalance): self
  {
    $this->currentCapitalBalance = $currentCapitalBalance;
    return $this;
  }

  public function getCurrentCapitalBalanceCurrency(): float
  {
    return $this->currentCapitalBalanceCurrency;
  }

  public function setCurrentCapitalBalanceCurrency(float $currentCapitalBalanceCurrency): self
  {
    $this->currentCapitalBalanceCurrency = $currentCapitalBalanceCurrency;
    return $this;
  }

  public function getInvoiceDocumentURL(): string
  {
    return $this->invoiceDocumentURL;
  }

  public function setInvoiceDocumentURL(string $invoiceDocumentURL): self
  {
    $this->invoiceDocumentURL = $invoiceDocumentURL;
    return $this;
  }

  public function getInvoiceNumber(): int
  {
    return $this->invoiceNumber;
  }

  public function setInvoiceNumber(int $invoiceNumber): self
  {
    $this->invoiceNumber = $invoiceNumber;
    return $this;
  }

  public function getNextEvent(): string
  {
    return $this->nextEvent;
  }

  public function setNextEvent(string $nextEvent): self
  {
    $this->nextEvent = $nextEvent;
    return $this;
  }

  public function getNextEventDate(): string
  {
    return $this->nextEventDate;
  }

  public function setNextEventDate(string $nextEventDate): self
  {
    $this->nextEventDate = $nextEventDate;
    return $this;
  }

  public function getOcrNumber(): string
  {
    return $this->ocrNumber;
  }

  public function setOcrNumber(string $ocrNumber): self
  {
    $this->ocrNumber = $ocrNumber;
    return $this;
  }

  public function getService(): string
  {
    return $this->service;
  }

  public function setService(string $service): self
  {
    $this->service = $service;
    return $this;
  }

  public function getServiceName(): string
  {
    return $this->serviceName;
  }

  public function setServiceName(string $serviceName): self
  {
    $this->serviceName = $serviceName;
    return $this;
  }

  public function getStatus(): string
  {
    return $this->status;
  }

  public function setStatus(string $status): self
  {
    $this->status = $status;
    return $this;
  }


  // SerializableInterface methods

  public function serialize(): string
  {
    return SerializerBuilder::create()->build()->serialize($this, 'json');
  }

  public static function deserialize(string $data): NoxFinansInvoiceResponse
  {
    return SerializerBuilder::create()
      ->build()
      ->deserialize($data, self::class, 'json');
  }

  public function toArray(): array
  {
    return SerializerBuilder::create()
      ->build()
      ->toArray($this);
  }

  public static function fromArray(array $data): NoxFinansInvoiceResponse
  {
    return SerializerBuilder::create()
      ->build()
      ->fromArray($data, self::class);
  }
}
