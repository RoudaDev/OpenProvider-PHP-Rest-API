<?php

namespace Rouda\OpenProviderAPI\Model;

class PriceGetPriceResponseData
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
     * @var bool
     */
    protected $isPremium;
    /**
     * 
     *
     * @var bool
     */
    protected $isPromotion;
    /**
     * 
     *
     * @var DomainPriceGroup
     */
    protected $membershipPrice;
    /**
     * 
     *
     * @var DomainPriceGroup
     */
    protected $price;
    /**
     * 
     *
     * @var PricePromotionData
     */
    protected $promotionData;
    /**
     * 
     *
     * @var DomainPriceGroup
     */
    protected $tierPrice;
    /**
     * 
     *
     * @return bool
     */
    public function getIsPremium() : bool
    {
        return $this->isPremium;
    }
    /**
     * 
     *
     * @param bool $isPremium
     *
     * @return self
     */
    public function setIsPremium(bool $isPremium) : self
    {
        $this->initialized['isPremium'] = true;
        $this->isPremium = $isPremium;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPromotion() : bool
    {
        return $this->isPromotion;
    }
    /**
     * 
     *
     * @param bool $isPromotion
     *
     * @return self
     */
    public function setIsPromotion(bool $isPromotion) : self
    {
        $this->initialized['isPromotion'] = true;
        $this->isPromotion = $isPromotion;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPriceGroup
     */
    public function getMembershipPrice() : DomainPriceGroup
    {
        return $this->membershipPrice;
    }
    /**
     * 
     *
     * @param DomainPriceGroup $membershipPrice
     *
     * @return self
     */
    public function setMembershipPrice(DomainPriceGroup $membershipPrice) : self
    {
        $this->initialized['membershipPrice'] = true;
        $this->membershipPrice = $membershipPrice;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPriceGroup
     */
    public function getPrice() : DomainPriceGroup
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param DomainPriceGroup $price
     *
     * @return self
     */
    public function setPrice(DomainPriceGroup $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return PricePromotionData
     */
    public function getPromotionData() : PricePromotionData
    {
        return $this->promotionData;
    }
    /**
     * 
     *
     * @param PricePromotionData $promotionData
     *
     * @return self
     */
    public function setPromotionData(PricePromotionData $promotionData) : self
    {
        $this->initialized['promotionData'] = true;
        $this->promotionData = $promotionData;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPriceGroup
     */
    public function getTierPrice() : DomainPriceGroup
    {
        return $this->tierPrice;
    }
    /**
     * 
     *
     * @param DomainPriceGroup $tierPrice
     *
     * @return self
     */
    public function setTierPrice(DomainPriceGroup $tierPrice) : self
    {
        $this->initialized['tierPrice'] = true;
        $this->tierPrice = $tierPrice;
        return $this;
    }
}