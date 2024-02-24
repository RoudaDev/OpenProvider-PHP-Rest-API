<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var TldPriceInCurrency
     */
    protected $product;
    /**
     * 
     *
     * @var TldPriceInCurrency
     */
    protected $reseller;
    /**
     * 
     *
     * @return TldPriceInCurrency
     */
    public function getProduct() : TldPriceInCurrency
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency $product
     *
     * @return self
     */
    public function setProduct(TldPriceInCurrency $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return TldPriceInCurrency
     */
    public function getReseller() : TldPriceInCurrency
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency $reseller
     *
     * @return self
     */
    public function setReseller(TldPriceInCurrency $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}