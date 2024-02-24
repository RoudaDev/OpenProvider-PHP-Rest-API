<?php

namespace Rouda\OpenProviderAPI\Model;

class ProductSslProduct
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $brandName;
    /**
     * 
     *
     * @var bool
     */
    protected $bypassSan;
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * Average period of time between order creation and completion.
     *
     * @var string
     */
    protected $deliveryTime;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $encryption;
    /**
     * 
     *
     * @var string
     */
    protected $freeRefundPeriod;
    /**
     * 
     *
     * @var string
     */
    protected $freeReissuePeriod;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var int
     */
    protected $includedDomainsCount;
    /**
     * 
     *
     * @var bool
     */
    protected $isExtendedValidationSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $isIdnSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $isMobileSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $isSgcSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $isWildcardMultidomainSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $isWildcardSupported;
    /**
     * 
     *
     * @var ProductSslProductLevelPrices[]
     */
    protected $levelPrices;
    /**
     * Applies only to multi-domain certificates.
     *
     * @var int
     */
    protected $maxDomains;
    /**
     * 
     *
     * @var int
     */
    protected $maxPeriod;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfDomains;
    /**
     * 
     *
     * @var string
     */
    protected $orderModule;
    /**
     * 
     *
     * @var ProductSslProductPrices[]
     */
    protected $prices;
    /**
     * 
     *
     * @var string
     */
    protected $root;
    /**
     * 
     *
     * @var string
     */
    protected $subCategory;
    /**
     * 
     *
     * @var ProductSslProductSupportedSoftware[]
     */
    protected $supportedSoftware;
    /**
     * 
     *
     * @var string
     */
    protected $validationMethod;
    /**
     * 
     *
     * @var ProductSslProductWarranty
     */
    protected $warranty;
    /**
     * 
     *
     * @return string
     */
    public function getBrandName() : string
    {
        return $this->brandName;
    }
    /**
     * 
     *
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName(string $brandName) : self
    {
        $this->initialized['brandName'] = true;
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBypassSan() : bool
    {
        return $this->bypassSan;
    }
    /**
     * 
     *
     * @param bool $bypassSan
     *
     * @return self
     */
    public function setBypassSan(bool $bypassSan) : self
    {
        $this->initialized['bypassSan'] = true;
        $this->bypassSan = $bypassSan;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Average period of time between order creation and completion.
     *
     * @return string
     */
    public function getDeliveryTime() : string
    {
        return $this->deliveryTime;
    }
    /**
     * Average period of time between order creation and completion.
     *
     * @param string $deliveryTime
     *
     * @return self
     */
    public function setDeliveryTime(string $deliveryTime) : self
    {
        $this->initialized['deliveryTime'] = true;
        $this->deliveryTime = $deliveryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEncryption() : string
    {
        return $this->encryption;
    }
    /**
     * 
     *
     * @param string $encryption
     *
     * @return self
     */
    public function setEncryption(string $encryption) : self
    {
        $this->initialized['encryption'] = true;
        $this->encryption = $encryption;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFreeRefundPeriod() : string
    {
        return $this->freeRefundPeriod;
    }
    /**
     * 
     *
     * @param string $freeRefundPeriod
     *
     * @return self
     */
    public function setFreeRefundPeriod(string $freeRefundPeriod) : self
    {
        $this->initialized['freeRefundPeriod'] = true;
        $this->freeRefundPeriod = $freeRefundPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFreeReissuePeriod() : string
    {
        return $this->freeReissuePeriod;
    }
    /**
     * 
     *
     * @param string $freeReissuePeriod
     *
     * @return self
     */
    public function setFreeReissuePeriod(string $freeReissuePeriod) : self
    {
        $this->initialized['freeReissuePeriod'] = true;
        $this->freeReissuePeriod = $freeReissuePeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIncludedDomainsCount() : int
    {
        return $this->includedDomainsCount;
    }
    /**
     * 
     *
     * @param int $includedDomainsCount
     *
     * @return self
     */
    public function setIncludedDomainsCount(int $includedDomainsCount) : self
    {
        $this->initialized['includedDomainsCount'] = true;
        $this->includedDomainsCount = $includedDomainsCount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsExtendedValidationSupported() : bool
    {
        return $this->isExtendedValidationSupported;
    }
    /**
     * 
     *
     * @param bool $isExtendedValidationSupported
     *
     * @return self
     */
    public function setIsExtendedValidationSupported(bool $isExtendedValidationSupported) : self
    {
        $this->initialized['isExtendedValidationSupported'] = true;
        $this->isExtendedValidationSupported = $isExtendedValidationSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsIdnSupported() : bool
    {
        return $this->isIdnSupported;
    }
    /**
     * 
     *
     * @param bool $isIdnSupported
     *
     * @return self
     */
    public function setIsIdnSupported(bool $isIdnSupported) : self
    {
        $this->initialized['isIdnSupported'] = true;
        $this->isIdnSupported = $isIdnSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsMobileSupported() : bool
    {
        return $this->isMobileSupported;
    }
    /**
     * 
     *
     * @param bool $isMobileSupported
     *
     * @return self
     */
    public function setIsMobileSupported(bool $isMobileSupported) : self
    {
        $this->initialized['isMobileSupported'] = true;
        $this->isMobileSupported = $isMobileSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSgcSupported() : bool
    {
        return $this->isSgcSupported;
    }
    /**
     * 
     *
     * @param bool $isSgcSupported
     *
     * @return self
     */
    public function setIsSgcSupported(bool $isSgcSupported) : self
    {
        $this->initialized['isSgcSupported'] = true;
        $this->isSgcSupported = $isSgcSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsWildcardMultidomainSupported() : bool
    {
        return $this->isWildcardMultidomainSupported;
    }
    /**
     * 
     *
     * @param bool $isWildcardMultidomainSupported
     *
     * @return self
     */
    public function setIsWildcardMultidomainSupported(bool $isWildcardMultidomainSupported) : self
    {
        $this->initialized['isWildcardMultidomainSupported'] = true;
        $this->isWildcardMultidomainSupported = $isWildcardMultidomainSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsWildcardSupported() : bool
    {
        return $this->isWildcardSupported;
    }
    /**
     * 
     *
     * @param bool $isWildcardSupported
     *
     * @return self
     */
    public function setIsWildcardSupported(bool $isWildcardSupported) : self
    {
        $this->initialized['isWildcardSupported'] = true;
        $this->isWildcardSupported = $isWildcardSupported;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductLevelPrices[]
     */
    public function getLevelPrices() : array
    {
        return $this->levelPrices;
    }
    /**
     * 
     *
     * @param ProductSslProductLevelPrices[] $levelPrices
     *
     * @return self
     */
    public function setLevelPrices(array $levelPrices) : self
    {
        $this->initialized['levelPrices'] = true;
        $this->levelPrices = $levelPrices;
        return $this;
    }
    /**
     * Applies only to multi-domain certificates.
     *
     * @return int
     */
    public function getMaxDomains() : int
    {
        return $this->maxDomains;
    }
    /**
     * Applies only to multi-domain certificates.
     *
     * @param int $maxDomains
     *
     * @return self
     */
    public function setMaxDomains(int $maxDomains) : self
    {
        $this->initialized['maxDomains'] = true;
        $this->maxDomains = $maxDomains;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxPeriod() : int
    {
        return $this->maxPeriod;
    }
    /**
     * 
     *
     * @param int $maxPeriod
     *
     * @return self
     */
    public function setMaxPeriod(int $maxPeriod) : self
    {
        $this->initialized['maxPeriod'] = true;
        $this->maxPeriod = $maxPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumberOfDomains() : int
    {
        return $this->numberOfDomains;
    }
    /**
     * 
     *
     * @param int $numberOfDomains
     *
     * @return self
     */
    public function setNumberOfDomains(int $numberOfDomains) : self
    {
        $this->initialized['numberOfDomains'] = true;
        $this->numberOfDomains = $numberOfDomains;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderModule() : string
    {
        return $this->orderModule;
    }
    /**
     * 
     *
     * @param string $orderModule
     *
     * @return self
     */
    public function setOrderModule(string $orderModule) : self
    {
        $this->initialized['orderModule'] = true;
        $this->orderModule = $orderModule;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPrices[]
     */
    public function getPrices() : array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param ProductSslProductPrices[] $prices
     *
     * @return self
     */
    public function setPrices(array $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRoot() : string
    {
        return $this->root;
    }
    /**
     * 
     *
     * @param string $root
     *
     * @return self
     */
    public function setRoot(string $root) : self
    {
        $this->initialized['root'] = true;
        $this->root = $root;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubCategory() : string
    {
        return $this->subCategory;
    }
    /**
     * 
     *
     * @param string $subCategory
     *
     * @return self
     */
    public function setSubCategory(string $subCategory) : self
    {
        $this->initialized['subCategory'] = true;
        $this->subCategory = $subCategory;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductSupportedSoftware[]
     */
    public function getSupportedSoftware() : array
    {
        return $this->supportedSoftware;
    }
    /**
     * 
     *
     * @param ProductSslProductSupportedSoftware[] $supportedSoftware
     *
     * @return self
     */
    public function setSupportedSoftware(array $supportedSoftware) : self
    {
        $this->initialized['supportedSoftware'] = true;
        $this->supportedSoftware = $supportedSoftware;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValidationMethod() : string
    {
        return $this->validationMethod;
    }
    /**
     * 
     *
     * @param string $validationMethod
     *
     * @return self
     */
    public function setValidationMethod(string $validationMethod) : self
    {
        $this->initialized['validationMethod'] = true;
        $this->validationMethod = $validationMethod;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductWarranty
     */
    public function getWarranty() : ProductSslProductWarranty
    {
        return $this->warranty;
    }
    /**
     * 
     *
     * @param ProductSslProductWarranty $warranty
     *
     * @return self
     */
    public function setWarranty(ProductSslProductWarranty $warranty) : self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;
        return $this;
    }
}