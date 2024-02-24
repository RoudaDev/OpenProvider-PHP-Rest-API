<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainTransferDomainRequest
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
    protected $acceptPremiumFee;
    /**
     * 
     *
     * @var DomainTransferAdditionalData
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
    protected $at;
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
    protected $autorenew = 'default';
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
    protected $isPrivateWhoisEnabled;
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
     * @var string
     */
    protected $promoCode;
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
    protected $roid;
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
     * @return DomainTransferAdditionalData
     */
    public function getAdditionalData() : DomainTransferAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param DomainTransferAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(DomainTransferAdditionalData $additionalData) : self
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
    public function getAt() : string
    {
        return $this->at;
    }
    /**
     * 
     *
     * @param string $at
     *
     * @return self
     */
    public function setAt(string $at) : self
    {
        $this->initialized['at'] = true;
        $this->at = $at;
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
    public function getRoid() : string
    {
        return $this->roid;
    }
    /**
     * 
     *
     * @param string $roid
     *
     * @return self
     */
    public function setRoid(string $roid) : self
    {
        $this->initialized['roid'] = true;
        $this->roid = $roid;
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