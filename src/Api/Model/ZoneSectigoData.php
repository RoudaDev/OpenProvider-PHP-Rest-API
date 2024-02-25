<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var bool|null
     */
    protected $autorenew;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $renewalDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $secured;
    /**
     * 
     *
     * @var int|null
     */
    protected $websiteId;
    /**
     * 
     *
     * @return bool|null
     */
    public function getAutorenew() : ?bool
    {
        return $this->autorenew;
    }
    /**
     * 
     *
     * @param bool|null $autorenew
     *
     * @return self
     */
    public function setAutorenew(?bool $autorenew) : self
    {
        $this->initialized['autorenew'] = true;
        $this->autorenew = $autorenew;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderDate() : ?string
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param string|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?string $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRenewalDate() : ?string
    {
        return $this->renewalDate;
    }
    /**
     * 
     *
     * @param string|null $renewalDate
     *
     * @return self
     */
    public function setRenewalDate(?string $renewalDate) : self
    {
        $this->initialized['renewalDate'] = true;
        $this->renewalDate = $renewalDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSecured() : ?bool
    {
        return $this->secured;
    }
    /**
     * 
     *
     * @param bool|null $secured
     *
     * @return self
     */
    public function setSecured(?bool $secured) : self
    {
        $this->initialized['secured'] = true;
        $this->secured = $secured;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getWebsiteId() : ?int
    {
        return $this->websiteId;
    }
    /**
     * 
     *
     * @param int|null $websiteId
     *
     * @return self
     */
    public function setWebsiteId(?int $websiteId) : self
    {
        $this->initialized['websiteId'] = true;
        $this->websiteId = $websiteId;
        return $this;
    }
}