<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderReissueOrderRequest
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
    protected $csr;
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
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $organizationHandle;
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
}