<?php

namespace Rouda\OpenProviderAPI\Model;

class TldPrices
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
     * @var TldPrice
     */
    protected $createPrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $domicilePrice;
    /**
     * 
     *
     * @var int
     */
    protected $maxPeriod;
    /**
     * 
     *
     * @var int
     */
    protected $minPeriod;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $renewPrice;
    /**
     * 
     *
     * @var TldPriceWithPromoInfo
     */
    protected $resellerPrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $restorePrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $setupPrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $softRestorePrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $tradePrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $transferPrice;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $updatePrice;
    /**
     * 
     *
     * @return TldPrice
     */
    public function getCreatePrice() : TldPrice
    {
        return $this->createPrice;
    }
    /**
     * 
     *
     * @param TldPrice $createPrice
     *
     * @return self
     */
    public function setCreatePrice(TldPrice $createPrice) : self
    {
        $this->initialized['createPrice'] = true;
        $this->createPrice = $createPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getDomicilePrice() : TldPrice
    {
        return $this->domicilePrice;
    }
    /**
     * 
     *
     * @param TldPrice $domicilePrice
     *
     * @return self
     */
    public function setDomicilePrice(TldPrice $domicilePrice) : self
    {
        $this->initialized['domicilePrice'] = true;
        $this->domicilePrice = $domicilePrice;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxPeriod() : int
    {
        return $this->maxPeriod;
    }
    /**
     * 
     *
     * @param int $maxPeriod
     *
     * @return self
     */
    public function setMaxPeriod(int $maxPeriod) : self
    {
        $this->initialized['maxPeriod'] = true;
        $this->maxPeriod = $maxPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinPeriod() : int
    {
        return $this->minPeriod;
    }
    /**
     * 
     *
     * @param int $minPeriod
     *
     * @return self
     */
    public function setMinPeriod(int $minPeriod) : self
    {
        $this->initialized['minPeriod'] = true;
        $this->minPeriod = $minPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getRenewPrice() : TldPrice
    {
        return $this->renewPrice;
    }
    /**
     * 
     *
     * @param TldPrice $renewPrice
     *
     * @return self
     */
    public function setRenewPrice(TldPrice $renewPrice) : self
    {
        $this->initialized['renewPrice'] = true;
        $this->renewPrice = $renewPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPriceWithPromoInfo
     */
    public function getResellerPrice() : TldPriceWithPromoInfo
    {
        return $this->resellerPrice;
    }
    /**
     * 
     *
     * @param TldPriceWithPromoInfo $resellerPrice
     *
     * @return self
     */
    public function setResellerPrice(TldPriceWithPromoInfo $resellerPrice) : self
    {
        $this->initialized['resellerPrice'] = true;
        $this->resellerPrice = $resellerPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getRestorePrice() : TldPrice
    {
        return $this->restorePrice;
    }
    /**
     * 
     *
     * @param TldPrice $restorePrice
     *
     * @return self
     */
    public function setRestorePrice(TldPrice $restorePrice) : self
    {
        $this->initialized['restorePrice'] = true;
        $this->restorePrice = $restorePrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getSetupPrice() : TldPrice
    {
        return $this->setupPrice;
    }
    /**
     * 
     *
     * @param TldPrice $setupPrice
     *
     * @return self
     */
    public function setSetupPrice(TldPrice $setupPrice) : self
    {
        $this->initialized['setupPrice'] = true;
        $this->setupPrice = $setupPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getSoftRestorePrice() : TldPrice
    {
        return $this->softRestorePrice;
    }
    /**
     * 
     *
     * @param TldPrice $softRestorePrice
     *
     * @return self
     */
    public function setSoftRestorePrice(TldPrice $softRestorePrice) : self
    {
        $this->initialized['softRestorePrice'] = true;
        $this->softRestorePrice = $softRestorePrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getTradePrice() : TldPrice
    {
        return $this->tradePrice;
    }
    /**
     * 
     *
     * @param TldPrice $tradePrice
     *
     * @return self
     */
    public function setTradePrice(TldPrice $tradePrice) : self
    {
        $this->initialized['tradePrice'] = true;
        $this->tradePrice = $tradePrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getTransferPrice() : TldPrice
    {
        return $this->transferPrice;
    }
    /**
     * 
     *
     * @param TldPrice $transferPrice
     *
     * @return self
     */
    public function setTransferPrice(TldPrice $transferPrice) : self
    {
        $this->initialized['transferPrice'] = true;
        $this->transferPrice = $transferPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getUpdatePrice() : TldPrice
    {
        return $this->updatePrice;
    }
    /**
     * 
     *
     * @param TldPrice $updatePrice
     *
     * @return self
     */
    public function setUpdatePrice(TldPrice $updatePrice) : self
    {
        $this->initialized['updatePrice'] = true;
        $this->updatePrice = $updatePrice;
        return $this;
    }
}