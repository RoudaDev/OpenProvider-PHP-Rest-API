<?php

namespace Rouda\OpenProvider\Api\Model;

class ProductSslProductPrices
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
     * @var ProductSslProductPriceGroup|null
     */
    protected $extraDomainPrice;
    /**
     * 
     *
     * @var ProductSslProductPriceGroup|null
     */
    protected $extraWildcardDomainPrice;
    /**
     * 
     *
     * @var int|null
     */
    protected $period;
    /**
     * 
     *
     * @var ProductSslProductPriceGroup|null
     */
    protected $price;
    /**
     * 
     *
     * @return ProductSslProductPriceGroup|null
     */
    public function getExtraDomainPrice() : ?ProductSslProductPriceGroup
    {
        return $this->extraDomainPrice;
    }
    /**
     * 
     *
     * @param ProductSslProductPriceGroup|null $extraDomainPrice
     *
     * @return self
     */
    public function setExtraDomainPrice(?ProductSslProductPriceGroup $extraDomainPrice) : self
    {
        $this->initialized['extraDomainPrice'] = true;
        $this->extraDomainPrice = $extraDomainPrice;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPriceGroup|null
     */
    public function getExtraWildcardDomainPrice() : ?ProductSslProductPriceGroup
    {
        return $this->extraWildcardDomainPrice;
    }
    /**
     * 
     *
     * @param ProductSslProductPriceGroup|null $extraWildcardDomainPrice
     *
     * @return self
     */
    public function setExtraWildcardDomainPrice(?ProductSslProductPriceGroup $extraWildcardDomainPrice) : self
    {
        $this->initialized['extraWildcardDomainPrice'] = true;
        $this->extraWildcardDomainPrice = $extraWildcardDomainPrice;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPriceGroup|null
     */
    public function getPrice() : ?ProductSslProductPriceGroup
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param ProductSslProductPriceGroup|null $price
     *
     * @return self
     */
    public function setPrice(?ProductSslProductPriceGroup $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}