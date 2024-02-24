<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainCreateDomainRequest
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
    protected $acceptEapFee;
    /**
     * 
     *
     * @var float
     */
    protected $acceptPremiumFee;
    /**
     * 
     *
     * @var DomainAdditionalData
     */
    protected $additionalData;
    /**
     * 
     *
     * @var string
     */
    protected $adminHandle;
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @var string
     */
    protected $applicationMode;
    /**
     * 
     *
     * @var string
     */
    protected $applicationNoticeId;
    /**
     * 
     *
     * @var string
     */
    protected $applicationSmd;
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
    protected $isDnssecEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $isEasyDmarcEnabled = false;
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
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var string
     */
    protected $promoCode;
    /**
     * 
     *
     * @var string
     */
    protected $provider;
    /**
     * 
     *
     * @var string
     */
    protected $resellerHandle;
    /**
     * 
     *
     * @var string
     */
    protected $techHandle;
    /**
     * 
     *
     * @var string
     */
    protected $unit;
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
    public function getAcceptEapFee() : float
    {
        return $this->acceptEapFee;
    }
    /**
     * 
     *
     * @param float $acceptEapFee
     *
     * @return self
     */
    public function setAcceptEapFee(float $acceptEapFee) : self
    {
        $this->initialized['acceptEapFee'] = true;
        $this->acceptEapFee = $acceptEapFee;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAcceptPremiumFee() : float
    {
        return $this->acceptPremiumFee;
    }
    /**
     * 
     *
     * @param float $acceptPremiumFee
     *
     * @return self
     */
    public function setAcceptPremiumFee(float $acceptPremiumFee) : self
    {
        $this->initialized['acceptPremiumFee'] = true;
        $this->acceptPremiumFee = $acceptPremiumFee;
        return $this;
    }
    /**
     * 
     *
     * @return DomainAdditionalData
     */
    public function getAdditionalData() : DomainAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param DomainAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(DomainAdditionalData $additionalData) : self
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
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @return string
     */
    public function getApplicationMode() : string
    {
        return $this->applicationMode;
    }
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @param string $applicationMode
     *
     * @return self
     */
    public function setApplicationMode(string $applicationMode) : self
    {
        $this->initialized['applicationMode'] = true;
        $this->applicationMode = $applicationMode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApplicationNoticeId() : string
    {
        return $this->applicationNoticeId;
    }
    /**
     * 
     *
     * @param string $applicationNoticeId
     *
     * @return self
     */
    public function setApplicationNoticeId(string $applicationNoticeId) : self
    {
        $this->initialized['applicationNoticeId'] = true;
        $this->applicationNoticeId = $applicationNoticeId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApplicationSmd() : string
    {
        return $this->applicationSmd;
    }
    /**
     * 
     *
     * @param string $applicationSmd
     *
     * @return self
     */
    public function setApplicationSmd(string $applicationSmd) : self
    {
        $this->initialized['applicationSmd'] = true;
        $this->applicationSmd = $applicationSmd;
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
    public function getIsEasyDmarcEnabled() : bool
    {
        return $this->isEasyDmarcEnabled;
    }
    /**
     * 
     *
     * @param bool $isEasyDmarcEnabled
     *
     * @return self
     */
    public function setIsEasyDmarcEnabled(bool $isEasyDmarcEnabled) : self
    {
        $this->initialized['isEasyDmarcEnabled'] = true;
        $this->isEasyDmarcEnabled = $isEasyDmarcEnabled;
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
     * @return string
     */
    public function getPromoCode() : string
    {
        return $this->promoCode;
    }
    /**
     * 
     *
     * @param string $promoCode
     *
     * @return self
     */
    public function setPromoCode(string $promoCode) : self
    {
        $this->initialized['promoCode'] = true;
        $this->promoCode = $promoCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProvider() : string
    {
        return $this->provider;
    }
    /**
     * 
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider) : self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
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
     * @return string
     */
    public function getUnit() : string
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit) : self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
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