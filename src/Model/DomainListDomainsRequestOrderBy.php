<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $activeDate;
    /**
     * 
     *
     * @var string
     */
    protected $domainExtension;
    /**
     * 
     *
     * @var string
     */
    protected $domainName;
    /**
     * 
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $id;
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
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $transferDate;
    /**
     * 
     *
     * @return string
     */
    public function getActiveDate() : string
    {
        return $this->activeDate;
    }
    /**
     * 
     *
     * @param string $activeDate
     *
     * @return self
     */
    public function setActiveDate(string $activeDate) : self
    {
        $this->initialized['activeDate'] = true;
        $this->activeDate = $activeDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainExtension() : string
    {
        return $this->domainExtension;
    }
    /**
     * 
     *
     * @param string $domainExtension
     *
     * @return self
     */
    public function setDomainExtension(string $domainExtension) : self
    {
        $this->initialized['domainExtension'] = true;
        $this->domainExtension = $domainExtension;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainName() : string
    {
        return $this->domainName;
    }
    /**
     * 
     *
     * @param string $domainName
     *
     * @return self
     */
    public function setDomainName(string $domainName) : self
    {
        $this->initialized['domainName'] = true;
        $this->domainName = $domainName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
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
     * @return string
     */
    public function getTransferDate() : string
    {
        return $this->transferDate;
    }
    /**
     * 
     *
     * @param string $transferDate
     *
     * @return self
     */
    public function setTransferDate(string $transferDate) : self
    {
        $this->initialized['transferDate'] = true;
        $this->transferDate = $transferDate;
        return $this;
    }
}