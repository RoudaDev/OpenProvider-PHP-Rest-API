<?php

namespace Rouda\OpenProvider\Api\Model;

class TldPrice
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
     * @var TldPriceInCurrency|null
     */
    protected $product;
    /**
     * 
     *
     * @var TldPriceInCurrency|null
     */
    protected $reseller;
    /**
     * 
     *
     * @return TldPriceInCurrency|null
     */
    public function getProduct() : ?TldPriceInCurrency
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency|null $product
     *
     * @return self
     */
    public function setProduct(?TldPriceInCurrency $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return TldPriceInCurrency|null
     */
    public function getReseller() : ?TldPriceInCurrency
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency|null $reseller
     *
     * @return self
     */
    public function setReseller(?TldPriceInCurrency $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}