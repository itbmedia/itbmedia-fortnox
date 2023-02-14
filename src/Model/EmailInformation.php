<?php
namespace ITBMedia\FortnoxBundle\Model;

use ITBMedia\FortnoxBundle\Model\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Groups;
class EmailInformation implements SerializableInterface
{
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailAddressFrom")
	 * @Groups({"order", "contract"})
     */
    private $emailAddressFrom;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailAddressTo")
	 * @Groups({"order", "contract"})
     */
    private $emailAddressTo;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailAddressCC")
	 * @Groups({"order", "contract"})
     */
    private $emailAddressCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailAddressBCC")
	 * @Groups({"order", "contract"})
     */
    private $emailAddressBCC;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailSubject")
	 * @Groups({"order", "contract"})
     */
    private $emailSubject;
    /**
     * @var string
     * @Type("string")
     * @SerializedName("EmailBody")
	 * @Groups({"order", "contract"})
     */
    private $emailBody;

	/**
	 * 
	 * @return string
	 */
	public function getEmailAddressFrom() {
		return $this->emailAddressFrom;
	}
	
	/**
	 * 
	 * @param string $emailAddressFrom 
	 * @return self
	 */
	public function setEmailAddressFrom($emailAddressFrom): self {
		$this->emailAddressFrom = $emailAddressFrom;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailAddressTo() {
		return $this->emailAddressTo;
	}
	
	/**
	 * 
	 * @param string $emailAddressTo 
	 * @return self
	 */
	public function setEmailAddressTo($emailAddressTo): self {
		$this->emailAddressTo = $emailAddressTo;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailAddressCC() {
		return $this->emailAddressCC;
	}
	
	/**
	 * 
	 * @param string $emailAddressCC 
	 * @return self
	 */
	public function setEmailAddressCC($emailAddressCC): self {
		$this->emailAddressCC = $emailAddressCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailAddressBCC() {
		return $this->emailAddressBCC;
	}
	
	/**
	 * 
	 * @param string $emailAddressBCC 
	 * @return self
	 */
	public function setEmailAddressBCC($emailAddressBCC): self {
		$this->emailAddressBCC = $emailAddressBCC;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailSubject() {
		return $this->emailSubject;
	}
	
	/**
	 * 
	 * @param string $emailSubject 
	 * @return self
	 */
	public function setEmailSubject($emailSubject): self {
		$this->emailSubject = $emailSubject;
		return $this;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getEmailBody() {
		return $this->emailBody;
	}
	
	/**
	 * 
	 * @param string $emailBody 
	 * @return self
	 */
	public function setEmailBody($emailBody): self {
		$this->emailBody = $emailBody;
		return $this;
	}
    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return EmailInformation
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
}