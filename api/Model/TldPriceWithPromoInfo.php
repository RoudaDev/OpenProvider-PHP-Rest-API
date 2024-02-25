<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var TldPriceInCurrency|null
     */
    protected $product;
    /**
     * 
     *
     * @var TldPromoDetails|null
     */
    protected $promotionDetails;
    /**
     * 
     *
     * @var TldPriceInCurrency|null
     */
    protected $reseller;
    /**
     * 
     *
     * @return TldPriceInCurrency|null
     */
    public function getProduct() : ?TldPriceInCurrency
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency|null $product
     *
     * @return self
     */
    public function setProduct(?TldPriceInCurrency $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return TldPromoDetails|null
     */
    public function getPromotionDetails() : ?TldPromoDetails
    {
        return $this->promotionDetails;
    }
    /**
     * 
     *
     * @param TldPromoDetails|null $promotionDetails
     *
     * @return self
     */
    public function setPromotionDetails(?TldPromoDetails $promotionDetails) : self
    {
        $this->initialized['promotionDetails'] = true;
        $this->promotionDetails = $promotionDetails;
        return $this;
    }
    /**
     * 
     *
     * @return TldPriceInCurrency|null
     */
    public function getReseller() : ?TldPriceInCurrency
    {
        return $this->reseller;
    }
    /**
     * 
     *
     * @param TldPriceInCurrency|null $reseller
     *
     * @return self
     */
    public function setReseller(?TldPriceInCurrency $reseller) : self
    {
        $this->initialized['reseller'] = true;
        $this->reseller = $reseller;
        return $this;
    }
}