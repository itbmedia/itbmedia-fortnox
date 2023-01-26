<?php
namespace ITBMedia\FortnoxBundle\Modal;

use ITBMedia\FortnoxBundle\Modal\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class MetaInformation implements SerializableInterface
{
     /**
     * @var int
     * @Type("integer")
     * @SerializedName("@TotalResources")
     */
    private $totalResources;
     /**
     * @var int
     * @Type("integer")
     * @SerializedName("@TotalPages")
     */
    private $totalPages;
     /**
     * @var int
     * @Type("integer")
     * @SerializedName("@CurrentPage")
     */
    private $currentPage;


	/**
	 * 
	 * @return int
	 */
	public function getTotalResources() {
		return $this->totalResources;
	}
	
	/**
	 * 
	 * @param int $totalResources 
	 * @return self
	 */
	public function setTotalResources($totalResources): self {
		$this->totalResources = $totalResources;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getTotalPages() {
		return $this->totalPages;
	}
	
	/**
	 * 
	 * @param int $totalPages 
	 * @return self
	 */
	public function setTotalPages($totalPages): self {
		$this->totalPages = $totalPages;
		return $this;
	}
	
	/**
	 * 
	 * @return int
	 */
	public function getCurrentPage() {
		return $this->currentPage;
	}
	
	/**
	 * 
	 * @param int $currentPage 
	 * @return self
	 */
	public function setCurrentPage($currentPage): self {
		$this->currentPage = $currentPage;
		return $this;
	}

    /**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return MetaInformation
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
}