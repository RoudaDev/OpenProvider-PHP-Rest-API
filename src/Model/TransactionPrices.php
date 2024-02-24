<?php

namespace Rouda\OpenProviderAPI\Model;

class TransactionPrices
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
     * @var TransactionPrice
     */
    protected $product;
    /**
     * 
     *
     * @var TransactionPrice
     */
    protected $reseller;
    /**
     * 
     *
     * @return TransactionPrice
     */
    public function getProduct() : TransactionPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param TransactionPrice $product
     *
     * @return self
     */
    public function setProduct(TransactionPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrice
     */
    public function getReseller() : TransactionPrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param TransactionPrice $reseller
     *
     * @return self
     */
    public function setReseller(TransactionPrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}