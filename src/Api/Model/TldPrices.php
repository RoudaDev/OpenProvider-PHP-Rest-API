<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var TldPrice|null
     */
    protected $createPrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $domicilePrice;
    /**
     * 
     *
     * @var int|null
     */
    protected $maxPeriod;
    /**
     * 
     *
     * @var int|null
     */
    protected $minPeriod;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $renewPrice;
    /**
     * 
     *
     * @var TldPriceWithPromoInfo|null
     */
    protected $resellerPrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $restorePrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $setupPrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $softRestorePrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $tradePrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $transferPrice;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $updatePrice;
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getCreatePrice() : ?TldPrice
    {
        return $this->createPrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $createPrice
     *
     * @return self
     */
    public function setCreatePrice(?TldPrice $createPrice) : self
    {
        $this->initialized['createPrice'] = true;
        $this->createPrice = $createPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getDomicilePrice() : ?TldPrice
    {
        return $this->domicilePrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $domicilePrice
     *
     * @return self
     */
    public function setDomicilePrice(?TldPrice $domicilePrice) : self
    {
        $this->initialized['domicilePrice'] = true;
        $this->domicilePrice = $domicilePrice;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMaxPeriod() : ?int
    {
        return $this->maxPeriod;
    }
    /**
     * 
     *
     * @param int|null $maxPeriod
     *
     * @return self
     */
    public function setMaxPeriod(?int $maxPeriod) : self
    {
        $this->initialized['maxPeriod'] = true;
        $this->maxPeriod = $maxPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getMinPeriod() : ?int
    {
        return $this->minPeriod;
    }
    /**
     * 
     *
     * @param int|null $minPeriod
     *
     * @return self
     */
    public function setMinPeriod(?int $minPeriod) : self
    {
        $this->initialized['minPeriod'] = true;
        $this->minPeriod = $minPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getRenewPrice() : ?TldPrice
    {
        return $this->renewPrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $renewPrice
     *
     * @return self
     */
    public function setRenewPrice(?TldPrice $renewPrice) : self
    {
        $this->initialized['renewPrice'] = true;
        $this->renewPrice = $renewPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPriceWithPromoInfo|null
     */
    public function getResellerPrice() : ?TldPriceWithPromoInfo
    {
        return $this->resellerPrice;
    }
    /**
     * 
     *
     * @param TldPriceWithPromoInfo|null $resellerPrice
     *
     * @return self
     */
    public function setResellerPrice(?TldPriceWithPromoInfo $resellerPrice) : self
    {
        $this->initialized['resellerPrice'] = true;
        $this->resellerPrice = $resellerPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getRestorePrice() : ?TldPrice
    {
        return $this->restorePrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $restorePrice
     *
     * @return self
     */
    public function setRestorePrice(?TldPrice $restorePrice) : self
    {
        $this->initialized['restorePrice'] = true;
        $this->restorePrice = $restorePrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getSetupPrice() : ?TldPrice
    {
        return $this->setupPrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $setupPrice
     *
     * @return self
     */
    public function setSetupPrice(?TldPrice $setupPrice) : self
    {
        $this->initialized['setupPrice'] = true;
        $this->setupPrice = $setupPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getSoftRestorePrice() : ?TldPrice
    {
        return $this->softRestorePrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $softRestorePrice
     *
     * @return self
     */
    public function setSoftRestorePrice(?TldPrice $softRestorePrice) : self
    {
        $this->initialized['softRestorePrice'] = true;
        $this->softRestorePrice = $softRestorePrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getTradePrice() : ?TldPrice
    {
        return $this->tradePrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $tradePrice
     *
     * @return self
     */
    public function setTradePrice(?TldPrice $tradePrice) : self
    {
        $this->initialized['tradePrice'] = true;
        $this->tradePrice = $tradePrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getTransferPrice() : ?TldPrice
    {
        return $this->transferPrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $transferPrice
     *
     * @return self
     */
    public function setTransferPrice(?TldPrice $transferPrice) : self
    {
        $this->initialized['transferPrice'] = true;
        $this->transferPrice = $transferPrice;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getUpdatePrice() : ?TldPrice
    {
        return $this->updatePrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $updatePrice
     *
     * @return self
     */
    public function setUpdatePrice(?TldPrice $updatePrice) : self
    {
        $this->initialized['updatePrice'] = true;
        $this->updatePrice = $updatePrice;
        return $this;
    }
}