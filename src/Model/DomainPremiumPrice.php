<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainPremiumPrice
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
    protected $currency;
    /**
     * 
     *
     * @var DomainOperationPrice
     */
    protected $price;
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return DomainOperationPrice
     */
    public function getPrice() : DomainOperationPrice
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param DomainOperationPrice $price
     *
     * @return self
     */
    public function setPrice(DomainOperationPrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}