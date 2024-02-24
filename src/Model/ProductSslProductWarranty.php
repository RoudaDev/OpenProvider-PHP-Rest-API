<?php

namespace Rouda\OpenProviderAPI\Model;

class ProductSslProductWarranty
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
     * @var ProductSslProductPrice
     */
    protected $product;
    /**
     * 
     *
     * @var ProductSslProductReseller
     */
    protected $reseller;
    /**
     * 
     *
     * @return ProductSslProductPrice
     */
    public function getProduct() : ProductSslProductPrice
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param ProductSslProductPrice $product
     *
     * @return self
     */
    public function setProduct(ProductSslProductPrice $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return ProductSslProductReseller
     */
    public function getReseller() : ProductSslProductReseller
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param ProductSslProductReseller $reseller
     *
     * @return self
     */
    public function setReseller(ProductSslProductReseller $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}