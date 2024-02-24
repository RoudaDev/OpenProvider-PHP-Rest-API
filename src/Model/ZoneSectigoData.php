<?php

namespace Rouda\OpenProviderAPI\Model;

class ZoneSectigoData
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
    protected $autorenew;
    /**
     * 
     *
     * @var string
     */
    protected $orderDate;
    /**
     * 
     *
     * @var string
     */
    protected $renewalDate;
    /**
     * 
     *
     * @var bool
     */
    protected $secured;
    /**
     * 
     *
     * @var int
     */
    protected $websiteId;
    /**
     * 
     *
     * @return bool
     */
    public function getAutorenew() : bool
    {
        return $this->autorenew;
    }
    /**
     * 
     *
     * @param bool $autorenew
     *
     * @return self
     */
    public function setAutorenew(bool $autorenew) : self
    {
        $this->initialized['autorenew'] = true;
        $this->autorenew = $autorenew;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrderDate() : string
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param string $orderDate
     *
     * @return self
     */
    public function setOrderDate(string $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRenewalDate() : string
    {
        return $this->renewalDate;
    }
    /**
     * 
     *
     * @param string $renewalDate
     *
     * @return self
     */
    public function setRenewalDate(string $renewalDate) : self
    {
        $this->initialized['renewalDate'] = true;
        $this->renewalDate = $renewalDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSecured() : bool
    {
        return $this->secured;
    }
    /**
     * 
     *
     * @param bool $secured
     *
     * @return self
     */
    public function setSecured(bool $secured) : self
    {
        $this->initialized['secured'] = true;
        $this->secured = $secured;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWebsiteId() : int
    {
        return $this->websiteId;
    }
    /**
     * 
     *
     * @param int $websiteId
     *
     * @return self
     */
    public function setWebsiteId(int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
}