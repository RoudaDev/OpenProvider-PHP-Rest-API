<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $endDate;
    /**
     * 
     *
     * @var TldPrice|null
     */
    protected $nonPromoPrice;
    /**
     * 
     *
     * @var string|null
     */
    protected $startDate;
    /**
     * 
     *
     * @return string|null
     */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate) : self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrice|null
     */
    public function getNonPromoPrice() : ?TldPrice
    {
        return $this->nonPromoPrice;
    }
    /**
     * 
     *
     * @param TldPrice|null $nonPromoPrice
     *
     * @return self
     */
    public function setNonPromoPrice(?TldPrice $nonPromoPrice) : self
    {
        $this->initialized['nonPromoPrice'] = true;
        $this->nonPromoPrice = $nonPromoPrice;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate) : self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;
        return $this;
    }
}