<?php

namespace Rouda\OpenProviderAPI\Model;

class SeDomainDomain
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
    protected $bundle;
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
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var bool
     */
    protected $isActive;
    /**
     * 
     *
     * @var int
     */
    protected $orderId;
    /**
     * 
     *
     * @var SeDomainProducts
     */
    protected $products;
    /**
     * 
     *
     * @var SeDomainRecords
     */
    protected $records;
    /**
     * 
     *
     * @var int
     */
    protected $resellerId;
    /**
     * 
     *
     * @var string
     */
    protected $smtpPassword;
    /**
     * 
     *
     * @var string
     */
    protected $userEmail;
    /**
     * 
     *
     * @var string
     */
    protected $userPassword;
    /**
     * 
     *
     * @var bool
     */
    protected $withOutgoingFilter;
    /**
     * 
     *
     * @return bool
     */
    public function getBundle() : bool
    {
        return $this->bundle;
    }
    /**
     * 
     *
     * @param bool $bundle
     *
     * @return self
     */
    public function setBundle(bool $bundle) : self
    {
        $this->initialized['bundle'] = true;
        $this->bundle = $bundle;
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
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOrderId() : int
    {
        return $this->orderId;
    }
    /**
     * 
     *
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId) : self
    {
        $this->initialized['orderId'] = true;
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * 
     *
     * @return SeDomainProducts
     */
    public function getProducts() : SeDomainProducts
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param SeDomainProducts $products
     *
     * @return self
     */
    public function setProducts(SeDomainProducts $products) : self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * 
     *
     * @return SeDomainRecords
     */
    public function getRecords() : SeDomainRecords
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param SeDomainRecords $records
     *
     * @return self
     */
    public function setRecords(SeDomainRecords $records) : self
    {
        $this->initialized['records'] = true;
        $this->records = $records;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResellerId() : int
    {
        return $this->resellerId;
    }
    /**
     * 
     *
     * @param int $resellerId
     *
     * @return self
     */
    public function setResellerId(int $resellerId) : self
    {
        $this->initialized['resellerId'] = true;
        $this->resellerId = $resellerId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSmtpPassword() : string
    {
        return $this->smtpPassword;
    }
    /**
     * 
     *
     * @param string $smtpPassword
     *
     * @return self
     */
    public function setSmtpPassword(string $smtpPassword) : self
    {
        $this->initialized['smtpPassword'] = true;
        $this->smtpPassword = $smtpPassword;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserEmail() : string
    {
        return $this->userEmail;
    }
    /**
     * 
     *
     * @param string $userEmail
     *
     * @return self
     */
    public function setUserEmail(string $userEmail) : self
    {
        $this->initialized['userEmail'] = true;
        $this->userEmail = $userEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserPassword() : string
    {
        return $this->userPassword;
    }
    /**
     * 
     *
     * @param string $userPassword
     *
     * @return self
     */
    public function setUserPassword(string $userPassword) : self
    {
        $this->initialized['userPassword'] = true;
        $this->userPassword = $userPassword;
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