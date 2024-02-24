<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainUpdateDomainRequest
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
     * @var float
     */
    protected $acceptUpdateFee;
    /**
     * 
     *
     * @var DomainUpdateAdditionalData
     */
    protected $additionalData;
    /**
     * 
     *
     * @var string
     */
    protected $adminHandle;
    /**
     * 
     *
     * @var string
     */
    protected $authCode;
    /**
     * 
     *
     * @var string
     */
    protected $autorenew;
    /**
     * 
     *
     * @var string
     */
    protected $billingHandle;
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var DomainDnssecKey[]
     */
    protected $dnssecKeys;
    /**
     * 
     *
     * @var DomainDomain
     */
    protected $domain;
    /**
     * 
     *
     * @var bool
     */
    protected $forceRegistryUpdate;
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
    protected $isDnssecEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $isLocked;
    /**
     * 
     *
     * @var bool
     */
    protected $isPrivateWhoisEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $isSectigoDnsEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $isSpamexpertsEnabled;
    /**
     * 
     *
     * @var DomainNameserver[]
     */
    protected $nameServers;
    /**
     * 
     *
     * @var string
     */
    protected $nsGroup;
    /**
     * 
     *
     * @var int
     */
    protected $nsTemplateId;
    /**
     * 
     *
     * @var string
     */
    protected $nsTemplateName;
    /**
     * 
     *
     * @var string
     */
    protected $ownerHandle;
    /**
     * 
     *
     * @var bool
     */
    protected $removeNses;
    /**
     * 
     *
     * @var string
     */
    protected $resellerHandle;
    /**
     * 
     *
     * @var bool
     */
    protected $resetAuthCode;
    /**
     * 
     *
     * @var string
     */
    protected $scheduledAt;
    /**
     * 
     *
     * @var string
     */
    protected $techHandle;
    /**
     * 
     *
     * @var bool
     */
    protected $useDomicile;
    /**
     * 
     *
     * @return float
     */
    public function getAcceptUpdateFee() : float
    {
        return $this->acceptUpdateFee;
    }
    /**
     * 
     *
     * @param float $acceptUpdateFee
     *
     * @return self
     */
    public function setAcceptUpdateFee(float $acceptUpdateFee) : self
    {
        $this->initialized['acceptUpdateFee'] = true;
        $this->acceptUpdateFee = $acceptUpdateFee;
        return $this;
    }
    /**
     * 
     *
     * @return DomainUpdateAdditionalData
     */
    public function getAdditionalData() : DomainUpdateAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param DomainUpdateAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(DomainUpdateAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdminHandle() : string
    {
        return $this->adminHandle;
    }
    /**
     * 
     *
     * @param string $adminHandle
     *
     * @return self
     */
    public function setAdminHandle(string $adminHandle) : self
    {
        $this->initialized['adminHandle'] = true;
        $this->adminHandle = $adminHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string $authCode
     *
     * @return self
     */
    public function setAuthCode(string $authCode) : self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;
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
    public function getBillingHandle() : string
    {
        return $this->billingHandle;
    }
    /**
     * 
     *
     * @param string $billingHandle
     *
     * @return self
     */
    public function setBillingHandle(string $billingHandle) : self
    {
        $this->initialized['billingHandle'] = true;
        $this->billingHandle = $billingHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return DomainDnssecKey[]
     */
    public function getDnssecKeys() : array
    {
        return $this->dnssecKeys;
    }
    /**
     * 
     *
     * @param DomainDnssecKey[] $dnssecKeys
     *
     * @return self
     */
    public function setDnssecKeys(array $dnssecKeys) : self
    {
        $this->initialized['dnssecKeys'] = true;
        $this->dnssecKeys = $dnssecKeys;
        return $this;
    }
    /**
     * 
     *
     * @return DomainDomain
     */
    public function getDomain() : DomainDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param DomainDomain $domain
     *
     * @return self
     */
    public function setDomain(DomainDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getForceRegistryUpdate() : bool
    {
        return $this->forceRegistryUpdate;
    }
    /**
     * 
     *
     * @param bool $forceRegistryUpdate
     *
     * @return self
     */
    public function setForceRegistryUpdate(bool $forceRegistryUpdate) : self
    {
        $this->initialized['forceRegistryUpdate'] = true;
        $this->forceRegistryUpdate = $forceRegistryUpdate;
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
    public function getIsDnssecEnabled() : bool
    {
        return $this->isDnssecEnabled;
    }
    /**
     * 
     *
     * @param bool $isDnssecEnabled
     *
     * @return self
     */
    public function setIsDnssecEnabled(bool $isDnssecEnabled) : self
    {
        $this->initialized['isDnssecEnabled'] = true;
        $this->isDnssecEnabled = $isDnssecEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsLocked() : bool
    {
        return $this->isLocked;
    }
    /**
     * 
     *
     * @param bool $isLocked
     *
     * @return self
     */
    public function setIsLocked(bool $isLocked) : self
    {
        $this->initialized['isLocked'] = true;
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPrivateWhoisEnabled() : bool
    {
        return $this->isPrivateWhoisEnabled;
    }
    /**
     * 
     *
     * @param bool $isPrivateWhoisEnabled
     *
     * @return self
     */
    public function setIsPrivateWhoisEnabled(bool $isPrivateWhoisEnabled) : self
    {
        $this->initialized['isPrivateWhoisEnabled'] = true;
        $this->isPrivateWhoisEnabled = $isPrivateWhoisEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSectigoDnsEnabled() : bool
    {
        return $this->isSectigoDnsEnabled;
    }
    /**
     * 
     *
     * @param bool $isSectigoDnsEnabled
     *
     * @return self
     */
    public function setIsSectigoDnsEnabled(bool $isSectigoDnsEnabled) : self
    {
        $this->initialized['isSectigoDnsEnabled'] = true;
        $this->isSectigoDnsEnabled = $isSectigoDnsEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSpamexpertsEnabled() : bool
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     * 
     *
     * @param bool $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(bool $isSpamexpertsEnabled) : self
    {
        $this->initialized['isSpamexpertsEnabled'] = true;
        $this->isSpamexpertsEnabled = $isSpamexpertsEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return DomainNameserver[]
     */
    public function getNameServers() : array
    {
        return $this->nameServers;
    }
    /**
     * 
     *
     * @param DomainNameserver[] $nameServers
     *
     * @return self
     */
    public function setNameServers(array $nameServers) : self
    {
        $this->initialized['nameServers'] = true;
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNsGroup() : string
    {
        return $this->nsGroup;
    }
    /**
     * 
     *
     * @param string $nsGroup
     *
     * @return self
     */
    public function setNsGroup(string $nsGroup) : self
    {
        $this->initialized['nsGroup'] = true;
        $this->nsGroup = $nsGroup;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNsTemplateId() : int
    {
        return $this->nsTemplateId;
    }
    /**
     * 
     *
     * @param int $nsTemplateId
     *
     * @return self
     */
    public function setNsTemplateId(int $nsTemplateId) : self
    {
        $this->initialized['nsTemplateId'] = true;
        $this->nsTemplateId = $nsTemplateId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNsTemplateName() : string
    {
        return $this->nsTemplateName;
    }
    /**
     * 
     *
     * @param string $nsTemplateName
     *
     * @return self
     */
    public function setNsTemplateName(string $nsTemplateName) : self
    {
        $this->initialized['nsTemplateName'] = true;
        $this->nsTemplateName = $nsTemplateName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOwnerHandle() : string
    {
        return $this->ownerHandle;
    }
    /**
     * 
     *
     * @param string $ownerHandle
     *
     * @return self
     */
    public function setOwnerHandle(string $ownerHandle) : self
    {
        $this->initialized['ownerHandle'] = true;
        $this->ownerHandle = $ownerHandle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRemoveNses() : bool
    {
        return $this->removeNses;
    }
    /**
     * 
     *
     * @param bool $removeNses
     *
     * @return self
     */
    public function setRemoveNses(bool $removeNses) : self
    {
        $this->initialized['removeNses'] = true;
        $this->removeNses = $removeNses;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResellerHandle() : string
    {
        return $this->resellerHandle;
    }
    /**
     * 
     *
     * @param string $resellerHandle
     *
     * @return self
     */
    public function setResellerHandle(string $resellerHandle) : self
    {
        $this->initialized['resellerHandle'] = true;
        $this->resellerHandle = $resellerHandle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getResetAuthCode() : bool
    {
        return $this->resetAuthCode;
    }
    /**
     * 
     *
     * @param bool $resetAuthCode
     *
     * @return self
     */
    public function setResetAuthCode(bool $resetAuthCode) : self
    {
        $this->initialized['resetAuthCode'] = true;
        $this->resetAuthCode = $resetAuthCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getScheduledAt() : string
    {
        return $this->scheduledAt;
    }
    /**
     * 
     *
     * @param string $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(string $scheduledAt) : self
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTechHandle() : string
    {
        return $this->techHandle;
    }
    /**
     * 
     *
     * @param string $techHandle
     *
     * @return self
     */
    public function setTechHandle(string $techHandle) : self
    {
        $this->initialized['techHandle'] = true;
        $this->techHandle = $techHandle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getUseDomicile() : bool
    {
        return $this->useDomicile;
    }
    /**
     * 
     *
     * @param bool $useDomicile
     *
     * @return self
     */
    public function setUseDomicile(bool $useDomicile) : self
    {
        $this->initialized['useDomicile'] = true;
        $this->useDomicile = $useDomicile;
        return $this;
    }
}