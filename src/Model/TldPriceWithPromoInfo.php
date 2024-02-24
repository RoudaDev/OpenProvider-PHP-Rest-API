<?php

namespace Rouda\OpenProviderAPI\Model;

class TldPriceWithPromoInfo
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
     * @var TldPriceInCurrency
     */
    protected $product;
    /**
     * 
     *
     * @var TldPromoDetails
     */
    protected $promotionDetails;
    /**
     * 
     *
     * @var TldPriceInCurrency
     */
    protected $reseller;
    /**
     * 
     *
     * @return TldPriceInCurrency
     */
    public function getProduct() : TldPriceInCurrency
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency $product
     *
     * @return self
     */
    public function setProduct(TldPriceInCurrency $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return TldPromoDetails
     */
    public function getPromotionDetails() : TldPromoDetails
    {
        return $this->promotionDetails;
    }
    /**
     * 
     *
     * @param TldPromoDetails $promotionDetails
     *
     * @return self
     */
    public function setPromotionDetails(TldPromoDetails $promotionDetails) : self
    {
        $this->initialized['promotionDetails'] = true;
        $this->promotionDetails = $promotionDetails;
        return $this;
    }
    /**
     * 
     *
     * @return TldPriceInCurrency
     */
    public function getReseller() : TldPriceInCurrency
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency $reseller
     *
     * @return self
     */
    public function setReseller(TldPriceInCurrency $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}