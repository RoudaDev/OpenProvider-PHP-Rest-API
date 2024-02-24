<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var ProductSslProductPriceGroup
     */
    protected $extraDomainPrice;
    /**
     * 
     *
     * @var ProductSslProductPriceGroup
     */
    protected $extraWildcardDomainPrice;
    /**
     * 
     *
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var ProductSslProductPriceGroup
     */
    protected $price;
    /**
     * 
     *
     * @return ProductSslProductPriceGroup
     */
    public function getExtraDomainPrice() : ProductSslProductPriceGroup
    {
        return $this->extraDomainPrice;
    }
    /**
     * 
     *
     * @param ProductSslProductPriceGroup $extraDomainPrice
     *
     * @return self
     */
    public function setExtraDomainPrice(ProductSslProductPriceGroup $extraDomainPrice) : self
    {
        $this->initialized['extraDomainPrice'] = true;
        $this->extraDomainPrice = $extraDomainPrice;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPriceGroup
     */
    public function getExtraWildcardDomainPrice() : ProductSslProductPriceGroup
    {
        return $this->extraWildcardDomainPrice;
    }
    /**
     * 
     *
     * @param ProductSslProductPriceGroup $extraWildcardDomainPrice
     *
     * @return self
     */
    public function setExtraWildcardDomainPrice(ProductSslProductPriceGroup $extraWildcardDomainPrice) : self
    {
        $this->initialized['extraWildcardDomainPrice'] = true;
        $this->extraWildcardDomainPrice = $extraWildcardDomainPrice;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int $period
     *
     * @return self
     */
    public function setPeriod(int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductPriceGroup
     */
    public function getPrice() : ProductSslProductPriceGroup
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param ProductSslProductPriceGroup $price
     *
     * @return self
     */
    public function setPrice(ProductSslProductPriceGroup $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}