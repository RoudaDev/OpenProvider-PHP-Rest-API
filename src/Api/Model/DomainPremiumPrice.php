<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $currency;
    /**
     * 
     *
     * @var DomainOperationPrice|null
     */
    protected $price;
    /**
     * 
     *
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string|null $currency
     *
     * @return self
     */
    public function setCurrency(?string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return DomainOperationPrice|null
     */
    public function getPrice() : ?DomainOperationPrice
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param DomainOperationPrice|null $price
     *
     * @return self
     */
    public function setPrice(?DomainOperationPrice $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}