<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var TransactionPrice|null
     */
    protected $product;
    /**
     * 
     *
     * @var TransactionPrice|null
     */
    protected $reseller;
    /**
     * 
     *
     * @return TransactionPrice|null
     */
    public function getProduct() : ?TransactionPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param TransactionPrice|null $product
     *
     * @return self
     */
    public function setProduct(?TransactionPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrice|null
     */
    public function getReseller() : ?TransactionPrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param TransactionPrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?TransactionPrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}