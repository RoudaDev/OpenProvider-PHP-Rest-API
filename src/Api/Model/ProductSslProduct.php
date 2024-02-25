<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $brandName;
    /**
     * 
     *
     * @var bool|null
     */
    protected $bypassSan;
    /**
     * 
     *
     * @var string|null
     */
    protected $category;
    /**
     * Average period of time between order creation and completion.
     *
     * @var string|null
     */
    protected $deliveryTime;
    /**
     * 
     *
     * @var string|null
     */
    protected $description;
    /**
     * 
     *
     * @var string|null
     */
    protected $encryption;
    /**
     * 
     *
     * @var string|null
     */
    protected $freeRefundPeriod;
    /**
     * 
     *
     * @var string|null
     */
    protected $freeReissuePeriod;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var int|null
     */
    protected $includedDomainsCount;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isExtendedValidationSupported;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isIdnSupported;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isMobileSupported;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isSgcSupported;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isWildcardMultidomainSupported;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isWildcardSupported;
    /**
     * 
     *
     * @var ProductSslProductLevelPrices[]|null
     */
    protected $levelPrices;
    /**
     * Applies only to multi-domain certificates.
     *
     * @var int|null
     */
    protected $maxDomains;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxPeriod;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $numberOfDomains;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderModule;
    /**
     * 
     *
     * @var ProductSslProductPrices[]|null
     */
    protected $prices;
    /**
     * 
     *
     * @var string|null
     */
    protected $root;
    /**
     * 
     *
     * @var string|null
     */
    protected $subCategory;
    /**
     * 
     *
     * @var ProductSslProductSupportedSoftware[]|null
     */
    protected $supportedSoftware;
    /**
     * 
     *
     * @var string|null
     */
    protected $validationMethod;
    /**
     * 
     *
     * @var ProductSslProductWarranty|null
     */
    protected $warranty;
    /**
     * 
     *
     * @return string|null
     */
    public function getBrandName() : ?string
    {
        return $this->brandName;
    }
    /**
     * 
     *
     * @param string|null $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName) : self
    {
        $this->initialized['brandName'] = true;
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBypassSan() : ?bool
    {
        return $this->bypassSan;
    }
    /**
     * 
     *
     * @param bool|null $bypassSan
     *
     * @return self
     */
    public function setBypassSan(?bool $bypassSan) : self
    {
        $this->initialized['bypassSan'] = true;
        $this->bypassSan = $bypassSan;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCategory() : ?string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * Average period of time between order creation and completion.
     *
     * @return string|null
     */
    public function getDeliveryTime() : ?string
    {
        return $this->deliveryTime;
    }
    /**
     * Average period of time between order creation and completion.
     *
     * @param string|null $deliveryTime
     *
     * @return self
     */
    public function setDeliveryTime(?string $deliveryTime) : self
    {
        $this->initialized['deliveryTime'] = true;
        $this->deliveryTime = $deliveryTime;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEncryption() : ?string
    {
        return $this->encryption;
    }
    /**
     * 
     *
     * @param string|null $encryption
     *
     * @return self
     */
    public function setEncryption(?string $encryption) : self
    {
        $this->initialized['encryption'] = true;
        $this->encryption = $encryption;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFreeRefundPeriod() : ?string
    {
        return $this->freeRefundPeriod;
    }
    /**
     * 
     *
     * @param string|null $freeRefundPeriod
     *
     * @return self
     */
    public function setFreeRefundPeriod(?string $freeRefundPeriod) : self
    {
        $this->initialized['freeRefundPeriod'] = true;
        $this->freeRefundPeriod = $freeRefundPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFreeReissuePeriod() : ?string
    {
        return $this->freeReissuePeriod;
    }
    /**
     * 
     *
     * @param string|null $freeReissuePeriod
     *
     * @return self
     */
    public function setFreeReissuePeriod(?string $freeReissuePeriod) : self
    {
        $this->initialized['freeReissuePeriod'] = true;
        $this->freeReissuePeriod = $freeReissuePeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getIncludedDomainsCount() : ?int
    {
        return $this->includedDomainsCount;
    }
    /**
     * 
     *
     * @param int|null $includedDomainsCount
     *
     * @return self
     */
    public function setIncludedDomainsCount(?int $includedDomainsCount) : self
    {
        $this->initialized['includedDomainsCount'] = true;
        $this->includedDomainsCount = $includedDomainsCount;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsExtendedValidationSupported() : ?bool
    {
        return $this->isExtendedValidationSupported;
    }
    /**
     * 
     *
     * @param bool|null $isExtendedValidationSupported
     *
     * @return self
     */
    public function setIsExtendedValidationSupported(?bool $isExtendedValidationSupported) : self
    {
        $this->initialized['isExtendedValidationSupported'] = true;
        $this->isExtendedValidationSupported = $isExtendedValidationSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsIdnSupported() : ?bool
    {
        return $this->isIdnSupported;
    }
    /**
     * 
     *
     * @param bool|null $isIdnSupported
     *
     * @return self
     */
    public function setIsIdnSupported(?bool $isIdnSupported) : self
    {
        $this->initialized['isIdnSupported'] = true;
        $this->isIdnSupported = $isIdnSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsMobileSupported() : ?bool
    {
        return $this->isMobileSupported;
    }
    /**
     * 
     *
     * @param bool|null $isMobileSupported
     *
     * @return self
     */
    public function setIsMobileSupported(?bool $isMobileSupported) : self
    {
        $this->initialized['isMobileSupported'] = true;
        $this->isMobileSupported = $isMobileSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsSgcSupported() : ?bool
    {
        return $this->isSgcSupported;
    }
    /**
     * 
     *
     * @param bool|null $isSgcSupported
     *
     * @return self
     */
    public function setIsSgcSupported(?bool $isSgcSupported) : self
    {
        $this->initialized['isSgcSupported'] = true;
        $this->isSgcSupported = $isSgcSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsWildcardMultidomainSupported() : ?bool
    {
        return $this->isWildcardMultidomainSupported;
    }
    /**
     * 
     *
     * @param bool|null $isWildcardMultidomainSupported
     *
     * @return self
     */
    public function setIsWildcardMultidomainSupported(?bool $isWildcardMultidomainSupported) : self
    {
        $this->initialized['isWildcardMultidomainSupported'] = true;
        $this->isWildcardMultidomainSupported = $isWildcardMultidomainSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsWildcardSupported() : ?bool
    {
        return $this->isWildcardSupported;
    }
    /**
     * 
     *
     * @param bool|null $isWildcardSupported
     *
     * @return self
     */
    public function setIsWildcardSupported(?bool $isWildcardSupported) : self
    {
        $this->initialized['isWildcardSupported'] = true;
        $this->isWildcardSupported = $isWildcardSupported;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductLevelPrices[]|null
     */
    public function getLevelPrices() : ?array
    {
        return $this->levelPrices;
    }
    /**
     * 
     *
     * @param ProductSslProductLevelPrices[]|null $levelPrices
     *
     * @return self
     */
    public function setLevelPrices(?array $levelPrices) : self
    {
        $this->initialized['levelPrices'] = true;
        $this->levelPrices = $levelPrices;
        return $this;
    }
    /**
     * Applies only to multi-domain certificates.
     *
     * @return int|null
     */
    public function getMaxDomains() : ?int
    {
        return $this->maxDomains;
    }
    /**
     * Applies only to multi-domain certificates.
     *
     * @param int|null $maxDomains
     *
     * @return self
     */
    public function setMaxDomains(?int $maxDomains) : self
    {
        $this->initialized['maxDomains'] = true;
        $this->maxDomains = $maxDomains;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxPeriod() : ?int
    {
        return $this->maxPeriod;
    }
    /**
     * 
     *
     * @param int|null $maxPeriod
     *
     * @return self
     */
    public function setMaxPeriod(?int $maxPeriod) : self
    {
        $this->initialized['maxPeriod'] = true;
        $this->maxPeriod = $maxPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNumberOfDomains() : ?int
    {
        return $this->numberOfDomains;
    }
    /**
     * 
     *
     * @param int|null $numberOfDomains
     *
     * @return self
     */
    public function setNumberOfDomains(?int $numberOfDomains) : self
    {
        $this->initialized['numberOfDomains'] = true;
        $this->numberOfDomains = $numberOfDomains;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderModule() : ?string
    {
        return $this->orderModule;
    }
    /**
     * 
     *
     * @param string|null $orderModule
     *
     * @return self
     */
    public function setOrderModule(?string $orderModule) : self
    {
        $this->initialized['orderModule'] = true;
        $this->orderModule = $orderModule;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPrices[]|null
     */
    public function getPrices() : ?array
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param ProductSslProductPrices[]|null $prices
     *
     * @return self
     */
    public function setPrices(?array $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRoot() : ?string
    {
        return $this->root;
    }
    /**
     * 
     *
     * @param string|null $root
     *
     * @return self
     */
    public function setRoot(?string $root) : self
    {
        $this->initialized['root'] = true;
        $this->root = $root;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubCategory() : ?string
    {
        return $this->subCategory;
    }
    /**
     * 
     *
     * @param string|null $subCategory
     *
     * @return self
     */
    public function setSubCategory(?string $subCategory) : self
    {
        $this->initialized['subCategory'] = true;
        $this->subCategory = $subCategory;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductSupportedSoftware[]|null
     */
    public function getSupportedSoftware() : ?array
    {
        return $this->supportedSoftware;
    }
    /**
     * 
     *
     * @param ProductSslProductSupportedSoftware[]|null $supportedSoftware
     *
     * @return self
     */
    public function setSupportedSoftware(?array $supportedSoftware) : self
    {
        $this->initialized['supportedSoftware'] = true;
        $this->supportedSoftware = $supportedSoftware;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getValidationMethod() : ?string
    {
        return $this->validationMethod;
    }
    /**
     * 
     *
     * @param string|null $validationMethod
     *
     * @return self
     */
    public function setValidationMethod(?string $validationMethod) : self
    {
        $this->initialized['validationMethod'] = true;
        $this->validationMethod = $validationMethod;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductWarranty|null
     */
    public function getWarranty() : ?ProductSslProductWarranty
    {
        return $this->warranty;
    }
    /**
     * 
     *
     * @param ProductSslProductWarranty|null $warranty
     *
     * @return self
     */
    public function setWarranty(?ProductSslProductWarranty $warranty) : self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;
        return $this;
    }
}