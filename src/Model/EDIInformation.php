<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class EDIInformation implements SerializableInterface
{
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIGlobalLocationNumber")
    */
    private $ediGlobalLocationNumber;
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIGlobalLocationNumberDelivery")
    */
    private $ediGlobalLocationNumberDelivery;
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIInvoiceExtra1")
    */
    private $ediInvoiceExtra1;
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIInvoiceExtra2")
    */
    private $ediInvoiceExtra2;
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIOurElectronicReference")
    */
    private $ediOurElectronicReference;
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIYourElectronicReference")
    */
    private $ediYourElectronicReference;
    /**
    *@var string
    *@Type("string")
    *@SerializedName("EDIStatus")
    */
    private $ediStatus;

	/**
	 * 
	 * @return string
	 */
	public function getEdiGlobalLocationNumber() {
		return $this->ediGlobalLocationNumber;
	}
	
	/**
	 * 
	 * @param string $ediGlobalLocationNumber 
	 * @return self
	 */
	public function setEdiGlobalLocationNumber($ediGlobalLocationNumber): self {
		$this->ediGlobalLocationNumber = $ediGlobalLocationNumber;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEdiGlobalLocationNumberDelivery() {
		return $this->ediGlobalLocationNumberDelivery;
	}
	
	/**
	 * 
	 * @param string $ediGlobalLocationNumberDelivery 
	 * @return self
	 */
	public function setEdiGlobalLocationNumberDelivery($ediGlobalLocationNumberDelivery): self {
		$this->ediGlobalLocationNumberDelivery = $ediGlobalLocationNumberDelivery;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEdiInvoiceExtra1() {
		return $this->ediInvoiceExtra1;
	}
	
	/**
	 * 
	 * @param string $ediInvoiceExtra1 
	 * @return self
	 */
	public function setEdiInvoiceExtra1($ediInvoiceExtra1): self {
		$this->ediInvoiceExtra1 = $ediInvoiceExtra1;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEdiInvoiceExtra2() {
		return $this->ediInvoiceExtra2;
	}
	
	/**
	 * 
	 * @param string $ediInvoiceExtra2 
	 * @return self
	 */
	public function setEdiInvoiceExtra2($ediInvoiceExtra2): self {
		$this->ediInvoiceExtra2 = $ediInvoiceExtra2;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEdiOurElectronicReference() {
		return $this->ediOurElectronicReference;
	}
	
	/**
	 * 
	 * @param string $ediOurElectronicReference 
	 * @return self
	 */
	public function setEdiOurElectronicReference($ediOurElectronicReference): self {
		$this->ediOurElectronicReference = $ediOurElectronicReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEdiYourElectronicReference() {
		return $this->ediYourElectronicReference;
	}
	
	/**
	 * 
	 * @param string $ediYourElectronicReference 
	 * @return self
	 */
	public function setEdiYourElectronicReference($ediYourElectronicReference): self {
		$this->ediYourElectronicReference = $ediYourElectronicReference;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEdiStatus() {
		return $this->ediStatus;
	}
	
	/**
	 * 
	 * @param string $ediStatus 
	 * @return self
	 */
	public function setEdiStatus($ediStatus): self {
		$this->ediStatus = $ediStatus;
		return $this;
	}

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return EDIInformation
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
} 