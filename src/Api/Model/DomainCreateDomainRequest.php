<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var float|null
     */
    protected $acceptEapFee;
    /**
     * 
     *
     * @var float|null
     */
    protected $acceptPremiumFee;
    /**
     * 
     *
     * @var DomainAdditionalData|null
     */
    protected $additionalData;
    /**
     * 
     *
     * @var string|null
     */
    protected $adminHandle;
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @var string|null
     */
    protected $applicationMode;
    /**
     * 
     *
     * @var string|null
     */
    protected $applicationNoticeId;
    /**
     * 
     *
     * @var string|null
     */
    protected $applicationSmd;
    /**
     * 
     *
     * @var string|null
     */
    protected $authCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $autorenew;
    /**
     * 
     *
     * @var string|null
     */
    protected $billingHandle;
    /**
     * 
     *
     * @var string|null
     */
    protected $comments;
    /**
     * 
     *
     * @var DomainDnssecKey[]|null
     */
    protected $dnssecKeys;
    /**
     * 
     *
     * @var DomainDomain|null
     */
    protected $domain;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isDnssecEnabled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isEasyDmarcEnabled = false;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPrivateWhoisEnabled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isSectigoDnsEnabled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isSpamexpertsEnabled;
    /**
     * 
     *
     * @var DomainNameserver[]|null
     */
    protected $nameServers;
    /**
     * 
     *
     * @var string|null
     */
    protected $nsGroup;
    /**
     * 
     *
     * @var int|null
     */
    protected $nsTemplateId;
    /**
     * 
     *
     * @var string|null
     */
    protected $nsTemplateName;
    /**
     * 
     *
     * @var string|null
     */
    protected $ownerHandle;
    /**
     * 
     *
     * @var int|null
     */
    protected $period;
    /**
     * 
     *
     * @var string|null
     */
    protected $promoCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $provider;
    /**
     * 
     *
     * @var string|null
     */
    protected $resellerHandle;
    /**
     * 
     *
     * @var string|null
     */
    protected $techHandle;
    /**
     * 
     *
     * @var string|null
     */
    protected $unit;
    /**
     * 
     *
     * @var bool|null
     */
    protected $useDomicile;
    /**
     * 
     *
     * @return float|null
     */
    public function getAcceptEapFee() : ?float
    {
        return $this->acceptEapFee;
    }
    /**
     * 
     *
     * @param float|null $acceptEapFee
     *
     * @return self
     */
    public function setAcceptEapFee(?float $acceptEapFee) : self
    {
        $this->initialized['acceptEapFee'] = true;
        $this->acceptEapFee = $acceptEapFee;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getAcceptPremiumFee() : ?float
    {
        return $this->acceptPremiumFee;
    }
    /**
     * 
     *
     * @param float|null $acceptPremiumFee
     *
     * @return self
     */
    public function setAcceptPremiumFee(?float $acceptPremiumFee) : self
    {
        $this->initialized['acceptPremiumFee'] = true;
        $this->acceptPremiumFee = $acceptPremiumFee;
        return $this;
    }
    /**
     * 
     *
     * @return DomainAdditionalData|null
     */
    public function getAdditionalData() : ?DomainAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param DomainAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?DomainAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAdminHandle() : ?string
    {
        return $this->adminHandle;
    }
    /**
     * 
     *
     * @param string|null $adminHandle
     *
     * @return self
     */
    public function setAdminHandle(?string $adminHandle) : self
    {
        $this->initialized['adminHandle'] = true;
        $this->adminHandle = $adminHandle;
        return $this;
    }
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @return string|null
     */
    public function getApplicationMode() : ?string
    {
        return $this->applicationMode;
    }
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @param string|null $applicationMode
     *
     * @return self
     */
    public function setApplicationMode(?string $applicationMode) : self
    {
        $this->initialized['applicationMode'] = true;
        $this->applicationMode = $applicationMode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplicationNoticeId() : ?string
    {
        return $this->applicationNoticeId;
    }
    /**
     * 
     *
     * @param string|null $applicationNoticeId
     *
     * @return self
     */
    public function setApplicationNoticeId(?string $applicationNoticeId) : self
    {
        $this->initialized['applicationNoticeId'] = true;
        $this->applicationNoticeId = $applicationNoticeId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplicationSmd() : ?string
    {
        return $this->applicationSmd;
    }
    /**
     * 
     *
     * @param string|null $applicationSmd
     *
     * @return self
     */
    public function setApplicationSmd(?string $applicationSmd) : self
    {
        $this->initialized['applicationSmd'] = true;
        $this->applicationSmd = $applicationSmd;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthCode() : ?string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string|null $authCode
     *
     * @return self
     */
    public function setAuthCode(?string $authCode) : self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAutorenew() : ?string
    {
        return $this->autorenew;
    }
    /**
     * 
     *
     * @param string|null $autorenew
     *
     * @return self
     */
    public function setAutorenew(?string $autorenew) : self
    {
        $this->initialized['autorenew'] = true;
        $this->autorenew = $autorenew;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillingHandle() : ?string
    {
        return $this->billingHandle;
    }
    /**
     * 
     *
     * @param string|null $billingHandle
     *
     * @return self
     */
    public function setBillingHandle(?string $billingHandle) : self
    {
        $this->initialized['billingHandle'] = true;
        $this->billingHandle = $billingHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string|null $comments
     *
     * @return self
     */
    public function setComments(?string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return DomainDnssecKey[]|null
     */
    public function getDnssecKeys() : ?array
    {
        return $this->dnssecKeys;
    }
    /**
     * 
     *
     * @param DomainDnssecKey[]|null $dnssecKeys
     *
     * @return self
     */
    public function setDnssecKeys(?array $dnssecKeys) : self
    {
        $this->initialized['dnssecKeys'] = true;
        $this->dnssecKeys = $dnssecKeys;
        return $this;
    }
    /**
     * 
     *
     * @return DomainDomain|null
     */
    public function getDomain() : ?DomainDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param DomainDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?DomainDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsDnssecEnabled() : ?bool
    {
        return $this->isDnssecEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isDnssecEnabled
     *
     * @return self
     */
    public function setIsDnssecEnabled(?bool $isDnssecEnabled) : self
    {
        $this->initialized['isDnssecEnabled'] = true;
        $this->isDnssecEnabled = $isDnssecEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsEasyDmarcEnabled() : ?bool
    {
        return $this->isEasyDmarcEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isEasyDmarcEnabled
     *
     * @return self
     */
    public function setIsEasyDmarcEnabled(?bool $isEasyDmarcEnabled) : self
    {
        $this->initialized['isEasyDmarcEnabled'] = true;
        $this->isEasyDmarcEnabled = $isEasyDmarcEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisEnabled() : ?bool
    {
        return $this->isPrivateWhoisEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isPrivateWhoisEnabled
     *
     * @return self
     */
    public function setIsPrivateWhoisEnabled(?bool $isPrivateWhoisEnabled) : self
    {
        $this->initialized['isPrivateWhoisEnabled'] = true;
        $this->isPrivateWhoisEnabled = $isPrivateWhoisEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsSectigoDnsEnabled() : ?bool
    {
        return $this->isSectigoDnsEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isSectigoDnsEnabled
     *
     * @return self
     */
    public function setIsSectigoDnsEnabled(?bool $isSectigoDnsEnabled) : self
    {
        $this->initialized['isSectigoDnsEnabled'] = true;
        $this->isSectigoDnsEnabled = $isSectigoDnsEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsSpamexpertsEnabled() : ?bool
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     * 
     *
     * @param bool|null $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(?bool $isSpamexpertsEnabled) : self
    {
        $this->initialized['isSpamexpertsEnabled'] = true;
        $this->isSpamexpertsEnabled = $isSpamexpertsEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return DomainNameserver[]|null
     */
    public function getNameServers() : ?array
    {
        return $this->nameServers;
    }
    /**
     * 
     *
     * @param DomainNameserver[]|null $nameServers
     *
     * @return self
     */
    public function setNameServers(?array $nameServers) : self
    {
        $this->initialized['nameServers'] = true;
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNsGroup() : ?string
    {
        return $this->nsGroup;
    }
    /**
     * 
     *
     * @param string|null $nsGroup
     *
     * @return self
     */
    public function setNsGroup(?string $nsGroup) : self
    {
        $this->initialized['nsGroup'] = true;
        $this->nsGroup = $nsGroup;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNsTemplateId() : ?int
    {
        return $this->nsTemplateId;
    }
    /**
     * 
     *
     * @param int|null $nsTemplateId
     *
     * @return self
     */
    public function setNsTemplateId(?int $nsTemplateId) : self
    {
        $this->initialized['nsTemplateId'] = true;
        $this->nsTemplateId = $nsTemplateId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNsTemplateName() : ?string
    {
        return $this->nsTemplateName;
    }
    /**
     * 
     *
     * @param string|null $nsTemplateName
     *
     * @return self
     */
    public function setNsTemplateName(?string $nsTemplateName) : self
    {
        $this->initialized['nsTemplateName'] = true;
        $this->nsTemplateName = $nsTemplateName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOwnerHandle() : ?string
    {
        return $this->ownerHandle;
    }
    /**
     * 
     *
     * @param string|null $ownerHandle
     *
     * @return self
     */
    public function setOwnerHandle(?string $ownerHandle) : self
    {
        $this->initialized['ownerHandle'] = true;
        $this->ownerHandle = $ownerHandle;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPromoCode() : ?string
    {
        return $this->promoCode;
    }
    /**
     * 
     *
     * @param string|null $promoCode
     *
     * @return self
     */
    public function setPromoCode(?string $promoCode) : self
    {
        $this->initialized['promoCode'] = true;
        $this->promoCode = $promoCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProvider() : ?string
    {
        return $this->provider;
    }
    /**
     * 
     *
     * @param string|null $provider
     *
     * @return self
     */
    public function setProvider(?string $provider) : self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getResellerHandle() : ?string
    {
        return $this->resellerHandle;
    }
    /**
     * 
     *
     * @param string|null $resellerHandle
     *
     * @return self
     */
    public function setResellerHandle(?string $resellerHandle) : self
    {
        $this->initialized['resellerHandle'] = true;
        $this->resellerHandle = $resellerHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTechHandle() : ?string
    {
        return $this->techHandle;
    }
    /**
     * 
     *
     * @param string|null $techHandle
     *
     * @return self
     */
    public function setTechHandle(?string $techHandle) : self
    {
        $this->initialized['techHandle'] = true;
        $this->techHandle = $techHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUnit() : ?string
    {
        return $this->unit;
    }
    /**
     * 
     *
     * @param string|null $unit
     *
     * @return self
     */
    public function setUnit(?string $unit) : self
    {
        $this->initialized['unit'] = true;
        $this->unit = $unit;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getUseDomicile() : ?bool
    {
        return $this->useDomicile;
    }
    /**
     * 
     *
     * @param bool|null $useDomicile
     *
     * @return self
     */
    public function setUseDomicile(?bool $useDomicile) : self
    {
        $this->initialized['useDomicile'] = true;
        $this->useDomicile = $useDomicile;
        return $this;
    }
}