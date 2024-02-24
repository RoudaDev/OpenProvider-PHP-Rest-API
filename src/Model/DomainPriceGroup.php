<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainPriceGroup
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
     * @var DomainPrice
     */
    protected $product;
    /**
     * 
     *
     * @var DomainPrice
     */
    protected $reseller;
    /**
     * 
     *
     * @return DomainPrice
     */
    public function getProduct() : DomainPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param DomainPrice $product
     *
     * @return self
     */
    public function setProduct(DomainPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPrice
     */
    public function getReseller() : DomainPrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param DomainPrice $reseller
     *
     * @return self
     */
    public function setReseller(DomainPrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}