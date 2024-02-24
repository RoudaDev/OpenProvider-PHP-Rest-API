<?php

namespace Rouda\OpenProviderAPI\Model;

class TldTld
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
    protected $adminHandleSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $billingHandleEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $billingHandleSupported;
    /**
     * 
     *
     * @var TldDescription
     */
    protected $description;
    /**
     * 
     *
     * @var int[]
     */
    protected $dnssecAlgorithms;
    /**
     * 
     *
     * @var bool
     */
    protected $dnssecAllowed;
    /**
     * 
     *
     * @var bool
     */
    protected $dnssecDigestsAllowed;
    /**
     * 
     *
     * @var bool
     */
    protected $dnssecKeysAllowed;
    /**
     * 
     *
     * @var int
     */
    protected $dnssecMaxRecordsAmount;
    /**
     * 
     *
     * @var bool
     */
    protected $domicileAvailable;
    /**
     * 
     *
     * @var bool
     */
    protected $isAuthCodeAvailable;
    /**
     * 
     *
     * @var bool
     */
    protected $isAuthCodeChangeable;
    /**
     * 
     *
     * @var bool
     */
    protected $isAuthCodeRequested;
    /**
     * 
     *
     * @var bool
     */
    protected $isPrivateWhoisAllowed;
    /**
     * 
     *
     * @var bool
     */
    protected $isTradeAuthCodeRequired;
    /**
     * 
     *
     * @var bool
     */
    protected $isTransferAuthCodeRequired;
    /**
     * 
     *
     * @var TldLevelPrice[]
     */
    protected $levelPrices;
    /**
     * 
     *
     * @var int
     */
    protected $maxPeriod;
    /**
     * 
     *
     * @var int
     */
    protected $minPeriod;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var bool
     */
    protected $ownerHandleSupported;
    /**
     * 
     *
     * @var TldPrices
     */
    protected $prices;
    /**
     * 
     *
     * @var int
     */
    protected $quarantinePeriod;
    /**
     * 
     *
     * @var bool
     */
    protected $renewAvailable;
    /**
     * 
     *
     * @var bool
     */
    protected $resellerHandleEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $resellerHandleSupported;
    /**
     * 
     *
     * @var string[]
     */
    protected $restrictions;
    /**
     * 
     *
     * @var int
     */
    protected $softQuarantinePeriod;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var TldApplicationMode[]
     */
    protected $supportedApplicationMode;
    /**
     * 
     *
     * @var TldIdnScript[]
     */
    protected $supportedIdnScripts;
    /**
     * 
     *
     * @var bool
     */
    protected $techHandleSupported;
    /**
     * 
     *
     * @var bool
     */
    protected $tradeAvailable;
    /**
     * 
     *
     * @var bool
     */
    protected $transferAvailable;
    /**
     * 
     *
     * @var int
     */
    protected $usageCount;
    /**
     * 
     *
     * @return bool
     */
    public function getAdminHandleSupported() : bool
    {
        return $this->adminHandleSupported;
    }
    /**
     * 
     *
     * @param bool $adminHandleSupported
     *
     * @return self
     */
    public function setAdminHandleSupported(bool $adminHandleSupported) : self
    {
        $this->initialized['adminHandleSupported'] = true;
        $this->adminHandleSupported = $adminHandleSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBillingHandleEnabled() : bool
    {
        return $this->billingHandleEnabled;
    }
    /**
     * 
     *
     * @param bool $billingHandleEnabled
     *
     * @return self
     */
    public function setBillingHandleEnabled(bool $billingHandleEnabled) : self
    {
        $this->initialized['billingHandleEnabled'] = true;
        $this->billingHandleEnabled = $billingHandleEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getBillingHandleSupported() : bool
    {
        return $this->billingHandleSupported;
    }
    /**
     * 
     *
     * @param bool $billingHandleSupported
     *
     * @return self
     */
    public function setBillingHandleSupported(bool $billingHandleSupported) : self
    {
        $this->initialized['billingHandleSupported'] = true;
        $this->billingHandleSupported = $billingHandleSupported;
        return $this;
    }
    /**
     * 
     *
     * @return TldDescription
     */
    public function getDescription() : TldDescription
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param TldDescription $description
     *
     * @return self
     */
    public function setDescription(TldDescription $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getDnssecAlgorithms() : array
    {
        return $this->dnssecAlgorithms;
    }
    /**
     * 
     *
     * @param int[] $dnssecAlgorithms
     *
     * @return self
     */
    public function setDnssecAlgorithms(array $dnssecAlgorithms) : self
    {
        $this->initialized['dnssecAlgorithms'] = true;
        $this->dnssecAlgorithms = $dnssecAlgorithms;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDnssecAllowed() : bool
    {
        return $this->dnssecAllowed;
    }
    /**
     * 
     *
     * @param bool $dnssecAllowed
     *
     * @return self
     */
    public function setDnssecAllowed(bool $dnssecAllowed) : self
    {
        $this->initialized['dnssecAllowed'] = true;
        $this->dnssecAllowed = $dnssecAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDnssecDigestsAllowed() : bool
    {
        return $this->dnssecDigestsAllowed;
    }
    /**
     * 
     *
     * @param bool $dnssecDigestsAllowed
     *
     * @return self
     */
    public function setDnssecDigestsAllowed(bool $dnssecDigestsAllowed) : self
    {
        $this->initialized['dnssecDigestsAllowed'] = true;
        $this->dnssecDigestsAllowed = $dnssecDigestsAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDnssecKeysAllowed() : bool
    {
        return $this->dnssecKeysAllowed;
    }
    /**
     * 
     *
     * @param bool $dnssecKeysAllowed
     *
     * @return self
     */
    public function setDnssecKeysAllowed(bool $dnssecKeysAllowed) : self
    {
        $this->initialized['dnssecKeysAllowed'] = true;
        $this->dnssecKeysAllowed = $dnssecKeysAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDnssecMaxRecordsAmount() : int
    {
        return $this->dnssecMaxRecordsAmount;
    }
    /**
     * 
     *
     * @param int $dnssecMaxRecordsAmount
     *
     * @return self
     */
    public function setDnssecMaxRecordsAmount(int $dnssecMaxRecordsAmount) : self
    {
        $this->initialized['dnssecMaxRecordsAmount'] = true;
        $this->dnssecMaxRecordsAmount = $dnssecMaxRecordsAmount;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getDomicileAvailable() : bool
    {
        return $this->domicileAvailable;
    }
    /**
     * 
     *
     * @param bool $domicileAvailable
     *
     * @return self
     */
    public function setDomicileAvailable(bool $domicileAvailable) : self
    {
        $this->initialized['domicileAvailable'] = true;
        $this->domicileAvailable = $domicileAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAuthCodeAvailable() : bool
    {
        return $this->isAuthCodeAvailable;
    }
    /**
     * 
     *
     * @param bool $isAuthCodeAvailable
     *
     * @return self
     */
    public function setIsAuthCodeAvailable(bool $isAuthCodeAvailable) : self
    {
        $this->initialized['isAuthCodeAvailable'] = true;
        $this->isAuthCodeAvailable = $isAuthCodeAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAuthCodeChangeable() : bool
    {
        return $this->isAuthCodeChangeable;
    }
    /**
     * 
     *
     * @param bool $isAuthCodeChangeable
     *
     * @return self
     */
    public function setIsAuthCodeChangeable(bool $isAuthCodeChangeable) : self
    {
        $this->initialized['isAuthCodeChangeable'] = true;
        $this->isAuthCodeChangeable = $isAuthCodeChangeable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAuthCodeRequested() : bool
    {
        return $this->isAuthCodeRequested;
    }
    /**
     * 
     *
     * @param bool $isAuthCodeRequested
     *
     * @return self
     */
    public function setIsAuthCodeRequested(bool $isAuthCodeRequested) : self
    {
        $this->initialized['isAuthCodeRequested'] = true;
        $this->isAuthCodeRequested = $isAuthCodeRequested;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPrivateWhoisAllowed() : bool
    {
        return $this->isPrivateWhoisAllowed;
    }
    /**
     * 
     *
     * @param bool $isPrivateWhoisAllowed
     *
     * @return self
     */
    public function setIsPrivateWhoisAllowed(bool $isPrivateWhoisAllowed) : self
    {
        $this->initialized['isPrivateWhoisAllowed'] = true;
        $this->isPrivateWhoisAllowed = $isPrivateWhoisAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTradeAuthCodeRequired() : bool
    {
        return $this->isTradeAuthCodeRequired;
    }
    /**
     * 
     *
     * @param bool $isTradeAuthCodeRequired
     *
     * @return self
     */
    public function setIsTradeAuthCodeRequired(bool $isTradeAuthCodeRequired) : self
    {
        $this->initialized['isTradeAuthCodeRequired'] = true;
        $this->isTradeAuthCodeRequired = $isTradeAuthCodeRequired;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsTransferAuthCodeRequired() : bool
    {
        return $this->isTransferAuthCodeRequired;
    }
    /**
     * 
     *
     * @param bool $isTransferAuthCodeRequired
     *
     * @return self
     */
    public function setIsTransferAuthCodeRequired(bool $isTransferAuthCodeRequired) : self
    {
        $this->initialized['isTransferAuthCodeRequired'] = true;
        $this->isTransferAuthCodeRequired = $isTransferAuthCodeRequired;
        return $this;
    }
    /**
     * 
     *
     * @return TldLevelPrice[]
     */
    public function getLevelPrices() : array
    {
        return $this->levelPrices;
    }
    /**
     * 
     *
     * @param TldLevelPrice[] $levelPrices
     *
     * @return self
     */
    public function setLevelPrices(array $levelPrices) : self
    {
        $this->initialized['levelPrices'] = true;
        $this->levelPrices = $levelPrices;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxPeriod() : int
    {
        return $this->maxPeriod;
    }
    /**
     * 
     *
     * @param int $maxPeriod
     *
     * @return self
     */
    public function setMaxPeriod(int $maxPeriod) : self
    {
        $this->initialized['maxPeriod'] = true;
        $this->maxPeriod = $maxPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinPeriod() : int
    {
        return $this->minPeriod;
    }
    /**
     * 
     *
     * @param int $minPeriod
     *
     * @return self
     */
    public function setMinPeriod(int $minPeriod) : self
    {
        $this->initialized['minPeriod'] = true;
        $this->minPeriod = $minPeriod;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getOwnerHandleSupported() : bool
    {
        return $this->ownerHandleSupported;
    }
    /**
     * 
     *
     * @param bool $ownerHandleSupported
     *
     * @return self
     */
    public function setOwnerHandleSupported(bool $ownerHandleSupported) : self
    {
        $this->initialized['ownerHandleSupported'] = true;
        $this->ownerHandleSupported = $ownerHandleSupported;
        return $this;
    }
    /**
     * 
     *
     * @return TldPrices
     */
    public function getPrices() : TldPrices
    {
        return $this->prices;
    }
    /**
     * 
     *
     * @param TldPrices $prices
     *
     * @return self
     */
    public function setPrices(TldPrices $prices) : self
    {
        $this->initialized['prices'] = true;
        $this->prices = $prices;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuarantinePeriod() : int
    {
        return $this->quarantinePeriod;
    }
    /**
     * 
     *
     * @param int $quarantinePeriod
     *
     * @return self
     */
    public function setQuarantinePeriod(int $quarantinePeriod) : self
    {
        $this->initialized['quarantinePeriod'] = true;
        $this->quarantinePeriod = $quarantinePeriod;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRenewAvailable() : bool
    {
        return $this->renewAvailable;
    }
    /**
     * 
     *
     * @param bool $renewAvailable
     *
     * @return self
     */
    public function setRenewAvailable(bool $renewAvailable) : self
    {
        $this->initialized['renewAvailable'] = true;
        $this->renewAvailable = $renewAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getResellerHandleEnabled() : bool
    {
        return $this->resellerHandleEnabled;
    }
    /**
     * 
     *
     * @param bool $resellerHandleEnabled
     *
     * @return self
     */
    public function setResellerHandleEnabled(bool $resellerHandleEnabled) : self
    {
        $this->initialized['resellerHandleEnabled'] = true;
        $this->resellerHandleEnabled = $resellerHandleEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getResellerHandleSupported() : bool
    {
        return $this->resellerHandleSupported;
    }
    /**
     * 
     *
     * @param bool $resellerHandleSupported
     *
     * @return self
     */
    public function setResellerHandleSupported(bool $resellerHandleSupported) : self
    {
        $this->initialized['resellerHandleSupported'] = true;
        $this->resellerHandleSupported = $resellerHandleSupported;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRestrictions() : array
    {
        return $this->restrictions;
    }
    /**
     * 
     *
     * @param string[] $restrictions
     *
     * @return self
     */
    public function setRestrictions(array $restrictions) : self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSoftQuarantinePeriod() : int
    {
        return $this->softQuarantinePeriod;
    }
    /**
     * 
     *
     * @param int $softQuarantinePeriod
     *
     * @return self
     */
    public function setSoftQuarantinePeriod(int $softQuarantinePeriod) : self
    {
        $this->initialized['softQuarantinePeriod'] = true;
        $this->softQuarantinePeriod = $softQuarantinePeriod;
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
     * @return TldApplicationMode[]
     */
    public function getSupportedApplicationMode() : array
    {
        return $this->supportedApplicationMode;
    }
    /**
     * 
     *
     * @param TldApplicationMode[] $supportedApplicationMode
     *
     * @return self
     */
    public function setSupportedApplicationMode(array $supportedApplicationMode) : self
    {
        $this->initialized['supportedApplicationMode'] = true;
        $this->supportedApplicationMode = $supportedApplicationMode;
        return $this;
    }
    /**
     * 
     *
     * @return TldIdnScript[]
     */
    public function getSupportedIdnScripts() : array
    {
        return $this->supportedIdnScripts;
    }
    /**
     * 
     *
     * @param TldIdnScript[] $supportedIdnScripts
     *
     * @return self
     */
    public function setSupportedIdnScripts(array $supportedIdnScripts) : self
    {
        $this->initialized['supportedIdnScripts'] = true;
        $this->supportedIdnScripts = $supportedIdnScripts;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTechHandleSupported() : bool
    {
        return $this->techHandleSupported;
    }
    /**
     * 
     *
     * @param bool $techHandleSupported
     *
     * @return self
     */
    public function setTechHandleSupported(bool $techHandleSupported) : self
    {
        $this->initialized['techHandleSupported'] = true;
        $this->techHandleSupported = $techHandleSupported;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTradeAvailable() : bool
    {
        return $this->tradeAvailable;
    }
    /**
     * 
     *
     * @param bool $tradeAvailable
     *
     * @return self
     */
    public function setTradeAvailable(bool $tradeAvailable) : self
    {
        $this->initialized['tradeAvailable'] = true;
        $this->tradeAvailable = $tradeAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTransferAvailable() : bool
    {
        return $this->transferAvailable;
    }
    /**
     * 
     *
     * @param bool $transferAvailable
     *
     * @return self
     */
    public function setTransferAvailable(bool $transferAvailable) : self
    {
        $this->initialized['transferAvailable'] = true;
        $this->transferAvailable = $transferAvailable;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUsageCount() : int
    {
        return $this->usageCount;
    }
    /**
     * 
     *
     * @param int $usageCount
     *
     * @return self
     */
    public function setUsageCount(int $usageCount) : self
    {
        $this->initialized['usageCount'] = true;
        $this->usageCount = $usageCount;
        return $this;
    }
}