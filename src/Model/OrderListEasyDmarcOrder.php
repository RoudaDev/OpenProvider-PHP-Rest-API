<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderListEasyDmarcOrder
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
     * @var OrderDomain
     */
    protected $domain;
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $recordHost;
    /**
     * 
     *
     * @var string
     */
    protected $recordType;
    /**
     * 
     *
     * @var string
     */
    protected $recordValue;
    /**
     * 
     *
     * @var string
     */
    protected $renewAt;
    /**
     * 
     *
     * @var string
     */
    protected $status;
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
     * @return OrderDomain
     */
    public function getDomain() : OrderDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param OrderDomain $domain
     *
     * @return self
     */
    public function setDomain(OrderDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
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
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordHost() : string
    {
        return $this->recordHost;
    }
    /**
     * 
     *
     * @param string $recordHost
     *
     * @return self
     */
    public function setRecordHost(string $recordHost) : self
    {
        $this->initialized['recordHost'] = true;
        $this->recordHost = $recordHost;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordType() : string
    {
        return $this->recordType;
    }
    /**
     * 
     *
     * @param string $recordType
     *
     * @return self
     */
    public function setRecordType(string $recordType) : self
    {
        $this->initialized['recordType'] = true;
        $this->recordType = $recordType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRecordValue() : string
    {
        return $this->recordValue;
    }
    /**
     * 
     *
     * @param string $recordValue
     *
     * @return self
     */
    public function setRecordValue(string $recordValue) : self
    {
        $this->initialized['recordValue'] = true;
        $this->recordValue = $recordValue;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRenewAt() : string
    {
        return $this->renewAt;
    }
    /**
     * 
     *
     * @param string $renewAt
     *
     * @return self
     */
    public function setRenewAt(string $renewAt) : self
    {
        $this->initialized['renewAt'] = true;
        $this->renewAt = $renewAt;
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
}