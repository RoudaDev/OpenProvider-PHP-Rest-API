<?php

namespace Rouda\OpenProviderAPI\Model;

class StatisticsSpamExpertsStatistics
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
    protected $activatedAt;
    /**
     * 
     *
     * @var string
     */
    protected $createdAt;
    /**
     * 
     *
     * @var bool
     */
    protected $exists;
    /**
     * 
     *
     * @var string
     */
    protected $expiredAt;
    /**
     * 
     *
     * @var int
     */
    protected $incomingCount;
    /**
     * 
     *
     * @var int
     */
    protected $incomingLimit;
    /**
     * 
     *
     * @var int
     */
    protected $outgoingCount;
    /**
     * 
     *
     * @var int
     */
    protected $outgoingLimit;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var bool
     */
    protected $withOutgoingFilter;
    /**
     * 
     *
     * @return string
     */
    public function getActivatedAt() : string
    {
        return $this->activatedAt;
    }
    /**
     * 
     *
     * @param string $activatedAt
     *
     * @return self
     */
    public function setActivatedAt(string $activatedAt) : self
    {
        $this->initialized['activatedAt'] = true;
        $this->activatedAt = $activatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getExists() : bool
    {
        return $this->exists;
    }
    /**
     * 
     *
     * @param bool $exists
     *
     * @return self
     */
    public function setExists(bool $exists) : self
    {
        $this->initialized['exists'] = true;
        $this->exists = $exists;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpiredAt() : string
    {
        return $this->expiredAt;
    }
    /**
     * 
     *
     * @param string $expiredAt
     *
     * @return self
     */
    public function setExpiredAt(string $expiredAt) : self
    {
        $this->initialized['expiredAt'] = true;
        $this->expiredAt = $expiredAt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIncomingCount() : int
    {
        return $this->incomingCount;
    }
    /**
     * 
     *
     * @param int $incomingCount
     *
     * @return self
     */
    public function setIncomingCount(int $incomingCount) : self
    {
        $this->initialized['incomingCount'] = true;
        $this->incomingCount = $incomingCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getIncomingLimit() : int
    {
        return $this->incomingLimit;
    }
    /**
     * 
     *
     * @param int $incomingLimit
     *
     * @return self
     */
    public function setIncomingLimit(int $incomingLimit) : self
    {
        $this->initialized['incomingLimit'] = true;
        $this->incomingLimit = $incomingLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOutgoingCount() : int
    {
        return $this->outgoingCount;
    }
    /**
     * 
     *
     * @param int $outgoingCount
     *
     * @return self
     */
    public function setOutgoingCount(int $outgoingCount) : self
    {
        $this->initialized['outgoingCount'] = true;
        $this->outgoingCount = $outgoingCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOutgoingLimit() : int
    {
        return $this->outgoingLimit;
    }
    /**
     * 
     *
     * @param int $outgoingLimit
     *
     * @return self
     */
    public function setOutgoingLimit(int $outgoingLimit) : self
    {
        $this->initialized['outgoingLimit'] = true;
        $this->outgoingLimit = $outgoingLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWithOutgoingFilter() : bool
    {
        return $this->withOutgoingFilter;
    }
    /**
     * 
     *
     * @param bool $withOutgoingFilter
     *
     * @return self
     */
    public function setWithOutgoingFilter(bool $withOutgoingFilter) : self
    {
        $this->initialized['withOutgoingFilter'] = true;
        $this->withOutgoingFilter = $withOutgoingFilter;
        return $this;
    }
}