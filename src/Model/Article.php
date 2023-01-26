<?php
namespace ITBMedia\FortnoxBundle\Modal;

use ITBMedia\FortnoxBundle\Modal\SerializableInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Article implements SerializableInterface{

	/**
	* @var string
	* @Type("string")
	* @SerializedName("@url")
	*/
	private $url;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("ArticleNumber")
	*/
	private $articleNumber;
	/**
	* @var bool
	* @Type("boolean")
	* @SerializedName("Bulky")
	*/
	private $bulky;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("ConstructionAccount")
	*/
	private $constructionAccount;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("Depth")
	*/
	private $depth;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("Description")
	*/
	private $description;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("DisposableQuantity")
	*/
	private $disposableQuantity;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("EAN")
	*/
	private $ean;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("EUAccount")
	*/
	private $euAccount;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("EUVATAccount")
	*/
	private $euVatAccount;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("ExportAccount")
	*/
	private $exportAccount;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("Height")
	*/
	private $height;
	/**
	* @var bool
	* @Type("boolean")
	* @SerializedName("Housework")
	*/
	private $housework;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("HouseworkType")
	*/
	private $houseworkType;
	/**
	* @var bool
	* @Type("boolean")
	* @SerializedName("Active")
	*/
	private $active;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("Manufacturer")
	*/
	private $manufacturer;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("ManufacturerArticleNumber")
	*/
	private $manufacturerArticleNumber;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("Note")
	*/
	private $note;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("PurchaseAccount")
	*/
	private $purchaseAccount;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("PurchasePrice")
	*/
	private $purchasePrice;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("QuantityInStock")
	*/
	private $quantityInStock;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("ReservedQuantity")
	*/
	private $reservedQuantity;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("SalesAccount")
	*/
	private $salesAccount;
	/**
	* @var bool
	* @Type("boolean")
	* @SerializedName("StockGoods")
	*/
	private $stockGoods;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("StockPlace")
	*/
	private $stockPlace;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("StockValue")
	*/
	private $stockValue;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("StockWarning")
	*/
	private $stockWarning;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("SupplierName")
	*/
	private $supplierName;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("SupplierNumber")
	*/
	private $supplierNumber;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("Type")
	*/
	private $type;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("Unit")
	*/
	private $unit;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("VAT")
	*/
	private $vat;
	/**
	* @var bool
	* @Type("boolean")
	* @SerializedName("WebshopArticle")
	*/
	private $webshopArticle;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("Weight")
	*/
	private $weight;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("Width")
	*/
	private $width;
	/**
	* @var bool
	* @Type("boolean")
	* @SerializedName("Expired")
	*/
	private $expired;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("SalesPrice")
	*/
	private $salesPrice;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("CostCalculationMethod")
	*/
	private $costCalculationMethod;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("StockAccount")
	*/
	private $stockAccount;
	/**
	* @var int
	* @Type("integer")
	* @SerializedName("StockChangeAccount")
	*/
	private $stockChangeAccount;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("DirectCost")
	*/
	private $directCost;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("FreightCost")
	*/
	private $freightCost;
	/**
	* @var double
	* @Type("double")
	* @SerializedName("OtherCost")
	*/
	private $otherCost;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("DefaultStockPoint")
	*/
	private $defaultStockPoint;
	/**
	* @var string
	* @Type("string")
	* @SerializedName("DefaultStockLocation")
	*/
	private $defaultStockLocation;
	

	/**
	 *
	 * @return string
	 */
	public function getUrl() {
		return $this->url;
	}
	
	/**
	 *
	 * @param string $url
	 * @return self
	 */
	public function setUrl($url): self {
		$this->url = $url;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getArticleNumber() {
		return $this->articleNumber;
	}
	
	/**
	 *
	 * @param string $articleNumber
	 * @return self
	 */
	public function setArticleNumber($articleNumber): self {
		$this->articleNumber = $articleNumber;
		return $this;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function getBulky() {
		return $this->bulky;
	}
	
	/**
	 *
	 * @param bool $bulky
	 * @return self
	 */
	public function setBulky($bulky): self {
		$this->bulky = $bulky;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getConstructionAccount() {
		return $this->constructionAccount;
	}
	
	/**
	 *
	 * @param int $constructionAccount
	 * @return self
	 */
	public function setConstructionAccount($constructionAccount): self {
		$this->constructionAccount = $constructionAccount;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getDepth() {
		return $this->depth;
	}
	
	/**
	 *
	 * @param int $depth
	 * @return self
	 */
	public function setDepth($depth): self {
		$this->depth = $depth;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 *
	 * @param string $description
	 * @return self
	 */
	public function setDescription($description): self {
		$this->description = $description;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getDisposableQuantity() {
		return $this->disposableQuantity;
	}
	
	/**
	 *
	 * @param double $disposableQuantity
	 * @return self
	 */
	public function setDisposableQuantity($disposableQuantity): self {
		$this->disposableQuantity = $disposableQuantity;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getEan() {
		return $this->ean;
	}
	
	/**
	 *
	 * @param string $ean
	 * @return self
	 */
	public function setEan($ean): self {
		$this->ean = $ean;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getEuAccount() {
		return $this->euAccount;
	}
	
	/**
	 *
	 * @param int $euAccount
	 * @return self
	 */
	public function setEuAccount($euAccount): self {
		$this->euAccount = $euAccount;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getEuVatAccount() {
		return $this->euVatAccount;
	}
	
	/**
	 *
	 * @param int $euVatAccount
	 * @return self
	 */
	public function setEuVatAccount($euVatAccount): self {
		$this->euVatAccount = $euVatAccount;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getExportAccount() {
		return $this->exportAccount;
	}
	
	/**
	 *
	 * @param int $exportAccount
	 * @return self
	 */
	public function setExportAccount($exportAccount): self {
		$this->exportAccount = $exportAccount;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getHeight() {
		return $this->height;
	}
	
	/**
	 *
	 * @param int $height
	 * @return self
	 */
	public function setHeight($height): self {
		$this->height = $height;
		return $this;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function getHousework() {
		return $this->housework;
	}
	
	/**
	 *
	 * @param bool $housework
	 * @return self
	 */
	public function setHousework($housework): self {
		$this->housework = $housework;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getHouseworkType() {
		return $this->houseworkType;
	}
	
	/**
	 *
	 * @param string $houseworkType
	 * @return self
	 */
	public function setHouseworkType($houseworkType): self {
		$this->houseworkType = $houseworkType;
		return $this;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function getActive() {
		return $this->active;
	}
	
	/**
	 *
	 * @param bool $active
	 * @return self
	 */
	public function setActive($active): self {
		$this->active = $active;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getManufacturer() {
		return $this->manufacturer;
	}
	
	/**
	 *
	 * @param string $manufacturer
	 * @return self
	 */
	public function setManufacturer($manufacturer): self {
		$this->manufacturer = $manufacturer;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getManufacturerArticleNumber() {
		return $this->manufacturerArticleNumber;
	}
	
	/**
	 *
	 * @param string $manufacturerArticleNumber
	 * @return self
	 */
	public function setManufacturerArticleNumber($manufacturerArticleNumber): self {
		$this->manufacturerArticleNumber = $manufacturerArticleNumber;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getNote() {
		return $this->note;
	}
	
	/**
	 *
	 * @param string $note
	 * @return self
	 */
	public function setNote($note): self {
		$this->note = $note;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getPurchaseAccount() {
		return $this->purchaseAccount;
	}
	
	/**
	 *
	 * @param int $purchaseAccount
	 * @return self
	 */
	public function setPurchaseAccount($purchaseAccount): self {
		$this->purchaseAccount = $purchaseAccount;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getPurchasePrice() {
		return $this->purchasePrice;
	}
	
	/**
	 *
	 * @param double $purchasePrice
	 * @return self
	 */
	public function setPurchasePrice($purchasePrice): self {
		$this->purchasePrice = $purchasePrice;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getQuantityInStock() {
		return $this->quantityInStock;
	}
	
	/**
	 *
	 * @param double $quantityInStock
	 * @return self
	 */
	public function setQuantityInStock($quantityInStock): self {
		$this->quantityInStock = $quantityInStock;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getReservedQuantity() {
		return $this->reservedQuantity;
	}
	
	/**
	 *
	 * @param double $reservedQuantity
	 * @return self
	 */
	public function setReservedQuantity($reservedQuantity): self {
		$this->reservedQuantity = $reservedQuantity;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getSalesAccount() {
		return $this->salesAccount;
	}
	
	/**
	 *
	 * @param int $salesAccount
	 * @return self
	 */
	public function setSalesAccount($salesAccount): self {
		$this->salesAccount = $salesAccount;
		return $this;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function getStockGoods() {
		return $this->stockGoods;
	}
	
	/**
	 *
	 * @param bool $stockGoods
	 * @return self
	 */
	public function setStockGoods($stockGoods): self {
		$this->stockGoods = $stockGoods;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getStockPlace() {
		return $this->stockPlace;
	}
	
	/**
	 *
	 * @param string $stockPlace
	 * @return self
	 */
	public function setStockPlace($stockPlace): self {
		$this->stockPlace = $stockPlace;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getStockValue() {
		return $this->stockValue;
	}
	
	/**
	 *
	 * @param double $stockValue
	 * @return self
	 */
	public function setStockValue($stockValue): self {
		$this->stockValue = $stockValue;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getStockWarning() {
		return $this->stockWarning;
	}
	
	/**
	 *
	 * @param double $stockWarning
	 * @return self
	 */
	public function setStockWarning($stockWarning): self {
		$this->stockWarning = $stockWarning;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getSupplierName() {
		return $this->supplierName;
	}
	
	/**
	 *
	 * @param string $supplierName
	 * @return self
	 */
	public function setSupplierName($supplierName): self {
		$this->supplierName = $supplierName;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getSupplierNumber() {
		return $this->supplierNumber;
	}
	
	/**
	 *
	 * @param string $supplierNumber
	 * @return self
	 */
	public function setSupplierNumber($supplierNumber): self {
		$this->supplierNumber = $supplierNumber;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getType() {
		return $this->type;
	}
	
	/**
	 *
	 * @param string $type
	 * @return self
	 */
	public function setType($type): self {
		$this->type = $type;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getUnit() {
		return $this->unit;
	}
	
	/**
	 *
	 * @param string $unit
	 * @return self
	 */
	public function setUnit($unit): self {
		$this->unit = $unit;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getVat() {
		return $this->vat;
	}
	
	/**
	 *
	 * @param double $vat
	 * @return self
	 */
	public function setVat($vat): self {
		$this->vat = $vat;
		return $this;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function getWebshopArticle() {
		return $this->webshopArticle;
	}
	
	/**
	 *
	 * @param bool $webshopArticle
	 * @return self
	 */
	public function setWebshopArticle($webshopArticle): self {
		$this->webshopArticle = $webshopArticle;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getWeight() {
		return $this->weight;
	}
	
	/**
	 *
	 * @param int $weight
	 * @return self
	 */
	public function setWeight($weight): self {
		$this->weight = $weight;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getWidth() {
		return $this->width;
	}
	
	/**
	 *
	 * @param int $width
	 * @return self
	 */
	public function setWidth($width): self {
		$this->width = $width;
		return $this;
	}
	
	/**
	 *
	 * @return bool
	 */
	public function getExpired() {
		return $this->expired;
	}
	
	/**
	 *
	 * @param bool $expired
	 * @return self
	 */
	public function setExpired($expired): self {
		$this->expired = $expired;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getSalesPrice() {
		return $this->salesPrice;
	}
	
	/**
	 *
	 * @param double $salesPrice
	 * @return self
	 */
	public function setSalesPrice($salesPrice): self {
		$this->salesPrice = $salesPrice;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getCostCalculationMethod() {
		return $this->costCalculationMethod;
	}
	
	/**
	 *
	 * @param string $costCalculationMethod
	 * @return self
	 */
	public function setCostCalculationMethod($costCalculationMethod): self {
		$this->costCalculationMethod = $costCalculationMethod;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getStockAccount() {
		return $this->stockAccount;
	}
	
	/**
	 *
	 * @param int $stockAccount
	 * @return self
	 */
	public function setStockAccount($stockAccount): self {
		$this->stockAccount = $stockAccount;
		return $this;
	}
	
	/**
	 *
	 * @return int
	 */
	public function getStockChangeAccount() {
		return $this->stockChangeAccount;
	}
	
	/**
	 *
	 * @param int $stockChangeAccount
	 * @return self
	 */
	public function setStockChangeAccount($stockChangeAccount): self {
		$this->stockChangeAccount = $stockChangeAccount;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getDirectCost() {
		return $this->directCost;
	}
	
	/**
	 *
	 * @param double $directCost
	 * @return self
	 */
	public function setDirectCost($directCost): self {
		$this->directCost = $directCost;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getFreightCost() {
		return $this->freightCost;
	}
	
	/**
	 *
	 * @param double $freightCost
	 * @return self
	 */
	public function setFreightCost($freightCost): self {
		$this->freightCost = $freightCost;
		return $this;
	}
	
	/**
	 *
	 * @return double
	 */
	public function getOtherCost() {
		return $this->otherCost;
	}
	
	/**
	 *
	 * @param double $otherCost
	 * @return self
	 */
	public function setOtherCost($otherCost): self {
		$this->otherCost = $otherCost;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDefaultStockPoint() {
		return $this->defaultStockPoint;
	}
	
	/**
	 *
	 * @param string $defaultStockPoint
	 * @return self
	 */
	public function setDefaultStockPoint($defaultStockPoint): self {
		$this->defaultStockPoint = $defaultStockPoint;
		return $this;
	}
	
	/**
	 *
	 * @return string
	 */
	public function getDefaultStockLocation() {
		return $this->defaultStockLocation;
	}
	
	/**
	 *
	 * @param string $defaultStockLocation
	 * @return self
	 */
	public function setDefaultStockLocation($defaultStockLocation): self {
		$this->defaultStockLocation = $defaultStockLocation;
		return $this;
	}

	/**
	 * @return string
	 */
	public function serialize() {
		return SerializerBuilder::create()->build()->serialize($this, 'json');
	}
	
	/**
	 * @return Article
	 */
	public static function deserialize(string $data) {
		return SerializerBuilder::create()->build()->deserialize($data, self::class, 'json');
	}
}
