<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderCreateOrderRequest
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
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @var string
     */
    protected $approverEmail;
    /**
     * 
     *
     * @var string
     */
    protected $autorenew = 'off';
    /**
     * 
     *
     * @var string
     */
    protected $csr;
    /**
     * 
     *
     * @var int
     */
    protected $domainAmount;
    /**
     * 
     *
     * @var OrderSslOrderDomainValidationMethods[]
     */
    protected $domainValidationMethods;
    /**
     * 
     *
     * @var bool
     */
    protected $enableDnsAutomation = false;
    /**
     * 
     *
     * @var string[]
     */
    protected $hostNames;
    /**
     * 
     *
     * @var string
     */
    protected $organizationHandle;
    /**
     * 
     *
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var int
     */
    protected $productId;
    /**
     * 
     *
     * @var string
     */
    protected $signatureHashAlgorithm;
    /**
     * 
     *
     * @var string
     */
    protected $softwareId;
    /**
     * 
     *
     * @var bool
     */
    protected $startProvision = false;
    /**
     * 
     *
     * @var string
     */
    protected $technicalHandle;
    /**
     * 
     *
     * @var int
     */
    protected $wildcardDomainAmount;
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @return string
     */
    public function getApproverEmail() : string
    {
        return $this->approverEmail;
    }
    /**
     * Email for domain ownership verification. Should start with well-known generic name like admin@, hostmater@, administrator@, etc.
     *
     * @param string $approverEmail
     *
     * @return self
     */
    public function setApproverEmail(string $approverEmail) : self
    {
        $this->initialized['approverEmail'] = true;
        $this->approverEmail = $approverEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAutorenew() : string
    {
        return $this->autorenew;
    }
    /**
     * 
     *
     * @param string $autorenew
     *
     * @return self
     */
    public function setAutorenew(string $autorenew) : self
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
    public function getCsr() : string
    {
        return $this->csr;
    }
    /**
     * 
     *
     * @param string $csr
     *
     * @return self
     */
    public function setCsr(string $csr) : self
    {
        $this->initialized['csr'] = true;
        $this->csr = $csr;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDomainAmount() : int
    {
        return $this->domainAmount;
    }
    /**
     * 
     *
     * @param int $domainAmount
     *
     * @return self
     */
    public function setDomainAmount(int $domainAmount) : self
    {
        $this->initialized['domainAmount'] = true;
        $this->domainAmount = $domainAmount;
        return $this;
    }
    /**
     * 
     *
     * @return OrderSslOrderDomainValidationMethods[]
     */
    public function getDomainValidationMethods() : array
    {
        return $this->domainValidationMethods;
    }
    /**
     * 
     *
     * @param OrderSslOrderDomainValidationMethods[] $domainValidationMethods
     *
     * @return self
     */
    public function setDomainValidationMethods(array $domainValidationMethods) : self
    {
        $this->initialized['domainValidationMethods'] = true;
        $this->domainValidationMethods = $domainValidationMethods;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getEnableDnsAutomation() : bool
    {
        return $this->enableDnsAutomation;
    }
    /**
     * 
     *
     * @param bool $enableDnsAutomation
     *
     * @return self
     */
    public function setEnableDnsAutomation(bool $enableDnsAutomation) : self
    {
        $this->initialized['enableDnsAutomation'] = true;
        $this->enableDnsAutomation = $enableDnsAutomation;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getHostNames() : array
    {
        return $this->hostNames;
    }
    /**
     * 
     *
     * @param string[] $hostNames
     *
     * @return self
     */
    public function setHostNames(array $hostNames) : self
    {
        $this->initialized['hostNames'] = true;
        $this->hostNames = $hostNames;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrganizationHandle() : string
    {
        return $this->organizationHandle;
    }
    /**
     * 
     *
     * @param string $organizationHandle
     *
     * @return self
     */
    public function setOrganizationHandle(string $organizationHandle) : self
    {
        $this->initialized['organizationHandle'] = true;
        $this->organizationHandle = $organizationHandle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int $period
     *
     * @return self
     */
    public function setPeriod(int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProductId() : int
    {
        return $this->productId;
    }
    /**
     * 
     *
     * @param int $productId
     *
     * @return self
     */
    public function setProductId(int $productId) : self
    {
        $this->initialized['productId'] = true;
        $this->productId = $productId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSignatureHashAlgorithm() : string
    {
        return $this->signatureHashAlgorithm;
    }
    /**
     * 
     *
     * @param string $signatureHashAlgorithm
     *
     * @return self
     */
    public function setSignatureHashAlgorithm(string $signatureHashAlgorithm) : self
    {
        $this->initialized['signatureHashAlgorithm'] = true;
        $this->signatureHashAlgorithm = $signatureHashAlgorithm;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSoftwareId() : string
    {
        return $this->softwareId;
    }
    /**
     * 
     *
     * @param string $softwareId
     *
     * @return self
     */
    public function setSoftwareId(string $softwareId) : self
    {
        $this->initialized['softwareId'] = true;
        $this->softwareId = $softwareId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getStartProvision() : bool
    {
        return $this->startProvision;
    }
    /**
     * 
     *
     * @param bool $startProvision
     *
     * @return self
     */
    public function setStartProvision(bool $startProvision) : self
    {
        $this->initialized['startProvision'] = true;
        $this->startProvision = $startProvision;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTechnicalHandle() : string
    {
        return $this->technicalHandle;
    }
    /**
     * 
     *
     * @param string $technicalHandle
     *
     * @return self
     */
    public function setTechnicalHandle(string $technicalHandle) : self
    {
        $this->initialized['technicalHandle'] = true;
        $this->technicalHandle = $technicalHandle;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getWildcardDomainAmount() : int
    {
        return $this->wildcardDomainAmount;
    }
    /**
     * 
     *
     * @param int $wildcardDomainAmount
     *
     * @return self
     */
    public function setWildcardDomainAmount(int $wildcardDomainAmount) : self
    {
        $this->initialized['wildcardDomainAmount'] = true;
        $this->wildcardDomainAmount = $wildcardDomainAmount;
        return $this;
    }
}