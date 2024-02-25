<?php

namespace Rouda\OpenProvider\Api\Model;

class PaymentPrices
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
     * @var PaymentPrice|null
     */
    protected $product;
    /**
     * 
     *
     * @var PaymentPrice|null
     */
    protected $reseller;
    /**
     * 
     *
     * @return PaymentPrice|null
     */
    public function getProduct() : ?PaymentPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param PaymentPrice|null $product
     *
     * @return self
     */
    public function setProduct(?PaymentPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentPrice|null
     */
    public function getReseller() : ?PaymentPrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param PaymentPrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?PaymentPrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}