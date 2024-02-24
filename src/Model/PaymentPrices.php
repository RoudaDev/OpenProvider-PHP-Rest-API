<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var PaymentPrice
     */
    protected $product;
    /**
     * 
     *
     * @var PaymentPrice
     */
    protected $reseller;
    /**
     * 
     *
     * @return PaymentPrice
     */
    public function getProduct() : PaymentPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param PaymentPrice $product
     *
     * @return self
     */
    public function setProduct(PaymentPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentPrice
     */
    public function getReseller() : PaymentPrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param PaymentPrice $reseller
     *
     * @return self
     */
    public function setReseller(PaymentPrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}