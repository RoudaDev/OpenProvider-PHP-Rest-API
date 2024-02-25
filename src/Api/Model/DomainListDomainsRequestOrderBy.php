<?php

namespace Rouda\OpenProvider\Api\Model;

class DomainListDomainsRequestOrderBy
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
    protected $activeDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainExtension;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainName;
    /**
     * 
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $id;
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
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $transferDate;
    /**
     * 
     *
     * @return string|null
     */
    public function getActiveDate() : ?string
    {
        return $this->activeDate;
    }
    /**
     * 
     *
     * @param string|null $activeDate
     *
     * @return self
     */
    public function setActiveDate(?string $activeDate) : self
    {
        $this->initialized['activeDate'] = true;
        $this->activeDate = $activeDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainExtension() : ?string
    {
        return $this->domainExtension;
    }
    /**
     * 
     *
     * @param string|null $domainExtension
     *
     * @return self
     */
    public function setDomainExtension(?string $domainExtension) : self
    {
        $this->initialized['domainExtension'] = true;
        $this->domainExtension = $domainExtension;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainName() : ?string
    {
        return $this->domainName;
    }
    /**
     * 
     *
     * @param string|null $domainName
     *
     * @return self
     */
    public function setDomainName(?string $domainName) : self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExpirationDate() : ?string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id) : self
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
    /**
     * 
     *
     * @return string|null
     */
    public function getTransferDate() : ?string
    {
        return $this->transferDate;
    }
    /**
     * 
     *
     * @param string|null $transferDate
     *
     * @return self
     */
    public function setTransferDate(?string $transferDate) : self
    {
        $this->initialized['transferDate'] = true;
        $this->transferDate = $transferDate;
        return $this;
    }
}