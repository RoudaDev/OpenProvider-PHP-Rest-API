<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var InvoicePrice|null
     */
    protected $product;
    /**
     * 
     *
     * @var InvoicePrice|null
     */
    protected $reseller;
    /**
     * 
     *
     * @return InvoicePrice|null
     */
    public function getProduct() : ?InvoicePrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param InvoicePrice|null $product
     *
     * @return self
     */
    public function setProduct(?InvoicePrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return InvoicePrice|null
     */
    public function getReseller() : ?InvoicePrice
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param InvoicePrice|null $reseller
     *
     * @return self
     */
    public function setReseller(?InvoicePrice $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}