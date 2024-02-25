<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var DomainPrice|null
     */
    protected $product;
    /**
     * 
     *
     * @var DomainPrice|null
     */
    protected $reseller;
    /**
     * 
     *
     * @return DomainPrice|null
     */
    public function getProduct() : ?DomainPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param DomainPrice|null $product
     *
     * @return self
     */
    public function setProduct(?DomainPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPrice|null
     */
    public function getReseller() : ?DomainPrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param DomainPrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?DomainPrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}