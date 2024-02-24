<?php

namespace Rouda\OpenProviderAPI\Model;

class TldPromoDetails
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
     * @var string
     */
    protected $endDate;
    /**
     * 
     *
     * @var TldPrice
     */
    protected $nonPromoPrice;
    /**
     * 
     *
     * @var string
     */
    protected $startDate;
    /**
     * 
     *
     * @return string
     */
    public function getEndDate() : string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice
     */
    public function getNonPromoPrice() : TldPrice
    {
        return $this->nonPromoPrice;
    }
    /**
     * 
     *
     * @param TldPrice $nonPromoPrice
     *
     * @return self
     */
    public function setNonPromoPrice(TldPrice $nonPromoPrice) : self
    {
        $this->initialized['nonPromoPrice'] = true;
        $this->nonPromoPrice = $nonPromoPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStartDate() : string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
}