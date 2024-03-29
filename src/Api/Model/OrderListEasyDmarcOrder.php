<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $activatedAt;
    /**
     * 
     *
     * @var OrderDomain|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $expiredAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordHost;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordType;
    /**
     * 
     *
     * @var string|null
     */
    protected $recordValue;
    /**
     * 
     *
     * @var string|null
     */
    protected $renewAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @return string|null
     */
    public function getActivatedAt() : ?string
    {
        return $this->activatedAt;
    }
    /**
     * 
     *
     * @param string|null $activatedAt
     *
     * @return self
     */
    public function setActivatedAt(?string $activatedAt) : self
    {
        $this->initialized['activatedAt'] = true;
        $this->activatedAt = $activatedAt;
        return $this;
    }
    /**
     * 
     *
     * @return OrderDomain|null
     */
    public function getDomain() : ?OrderDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param OrderDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?OrderDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExpiredAt() : ?string
    {
        return $this->expiredAt;
    }
    /**
     * 
     *
     * @param string|null $expiredAt
     *
     * @return self
     */
    public function setExpiredAt(?string $expiredAt) : self
    {
        $this->initialized['expiredAt'] = true;
        $this->expiredAt = $expiredAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordHost() : ?string
    {
        return $this->recordHost;
    }
    /**
     * 
     *
     * @param string|null $recordHost
     *
     * @return self
     */
    public function setRecordHost(?string $recordHost) : self
    {
        $this->initialized['recordHost'] = true;
        $this->recordHost = $recordHost;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordType() : ?string
    {
        return $this->recordType;
    }
    /**
     * 
     *
     * @param string|null $recordType
     *
     * @return self
     */
    public function setRecordType(?string $recordType) : self
    {
        $this->initialized['recordType'] = true;
        $this->recordType = $recordType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRecordValue() : ?string
    {
        return $this->recordValue;
    }
    /**
     * 
     *
     * @param string|null $recordValue
     *
     * @return self
     */
    public function setRecordValue(?string $recordValue) : self
    {
        $this->initialized['recordValue'] = true;
        $this->recordValue = $recordValue;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRenewAt() : ?string
    {
        return $this->renewAt;
    }
    /**
     * 
     *
     * @param string|null $renewAt
     *
     * @return self
     */
    public function setRenewAt(?string $renewAt) : self
    {
        $this->initialized['renewAt'] = true;
        $this->renewAt = $renewAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}