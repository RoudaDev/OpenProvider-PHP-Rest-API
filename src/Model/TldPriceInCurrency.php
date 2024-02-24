<?php

namespace Rouda\OpenProviderAPI\Model;

class TldPriceInCurrency
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
     * @var float
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
     * @return float
     */
    public function getPrice() : float
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param float $price
     *
     * @return self
     */
    public function setPrice(float $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}