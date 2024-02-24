<?php

namespace Rouda\OpenProviderAPI\Model;

class InvoicePrices
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
     * @var InvoicePrice
     */
    protected $product;
    /**
     * 
     *
     * @var InvoicePrice
     */
    protected $reseller;
    /**
     * 
     *
     * @return InvoicePrice
     */
    public function getProduct() : InvoicePrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param InvoicePrice $product
     *
     * @return self
     */
    public function setProduct(InvoicePrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return InvoicePrice
     */
    public function getReseller() : InvoicePrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param InvoicePrice $reseller
     *
     * @return self
     */
    public function setReseller(InvoicePrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}