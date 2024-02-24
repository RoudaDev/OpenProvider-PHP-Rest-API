<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainGetDomainResponseData
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
     * @var DomainAbuseDetails
     */
    protected $abuseDetails;
    /**
     * 
     *
     * @var string
     */
    protected $activeDate;
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
     * 
     *
     * @var DomainApiHistory[]
     */
    protected $apiHistory;
    /**
     * 
     *
     * @var string
     */
    protected $applicationId;
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
    protected $applicationModeExpirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $applicationModeTitle;
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
     * @var bool
     */
    protected $canRenew;
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var string
     */
    protected $commentsLastChangedAt;
    /**
     * 
     *
     * @var string
     */
    protected $creationDate;
    /**
     * 
     *
     * @var string
     */
    protected $deleteStatus;
    /**
     * 
     *
     * @var string
     */
    protected $deletedAt;
    /**
     * Indicates, if DNSSEC is enabled. Possible values: signedDelegation, unsigned.
     *
     * @var string
     */
    protected $dnssec;
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
     * @var string
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $hardQuarantineExpiryDate;
    /**
     * 
     *
     * @var bool
     */
    protected $hasActiveSectigoZone;
    /**
     * 
     *
     * @var bool
     */
    protected $hasHistory;
    /**
     * 
     *
     * @var DomainHistory[]
     */
    protected $history;
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
    protected $internalAuthCode;
    /**
     * 
     *
     * @var bool
     */
    protected $isAbusive;
    /**
     * 
     *
     * @var string
     */
    protected $isClientHoldEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $isDeleted;
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
    protected $isHostedWhois;
    /**
     * 
     *
     * @var bool
     */
    protected $isLockable;
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
    protected $isParked;
    /**
     * 
     *
     * @var bool
     */
    protected $isPremium;
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
     * @var string
     */
    protected $lastChanged;
    /**
     * 
     *
     * @var bool
     */
    protected $modifyOwnerAllowed;
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
     * @var int
     */
    protected $nsgroupId;
    /**
     * 
     *
     * @var string
     */
    protected $orderDate;
    /**
     * 
     *
     * @var DomainOwner
     */
    protected $owner;
    /**
     * 
     *
     * @var string
     */
    protected $ownerCompanyName;
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
    protected $quarantineExpirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $registryExpirationDate;
    /**
     * 
     *
     * @var DomainRegistryStatuses
     */
    protected $registryStatuses;
    /**
     * 
     *
     * @var int
     */
    protected $renew;
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
    protected $resellerHandle;
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
    protected $restorableUntil;
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
    protected $scheduledFrom;
    /**
     * 
     *
     * @var string
     */
    protected $softQuarantineExpiryDate;
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
    protected $techHandle;
    /**
     * 
     *
     * @var bool
     */
    protected $tradeAllowed;
    /**
     * 
     *
     * @var string
     */
    protected $tradeAuthCodeRequired;
    /**
     * 
     *
     * @var string
     */
    protected $transferAuthCodeRequired;
    /**
     * 
     *
     * @var bool
     */
    protected $transferCancelSupported;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
     * @var string
     */
    protected $verificationEmailExpDate;
    /**
     * 
     *
     * @var string
     */
    protected $verificationEmailName;
    /**
     * 
     *
     * @var string
     */
    protected $verificationEmailStatus;
    /**
     * 
     *
     * @var string
     */
    protected $verificationEmailStatusDescription;
    /**
     * 
     *
     * @var DomainWhoisPrivacyData
     */
    protected $whoisPrivacyData;
    /**
     * 
     *
     * @return DomainAbuseDetails
     */
    public function getAbuseDetails() : DomainAbuseDetails
    {
        return $this->abuseDetails;
    }
    /**
     * 
     *
     * @param DomainAbuseDetails $abuseDetails
     *
     * @return self
     */
    public function setAbuseDetails(DomainAbuseDetails $abuseDetails) : self
    {
        $this->initialized['abuseDetails'] = true;
        $this->abuseDetails = $abuseDetails;
        return $this;
    }
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
     * 
     *
     * @return DomainApiHistory[]
     */
    public function getApiHistory() : array
    {
        return $this->apiHistory;
    }
    /**
     * 
     *
     * @param DomainApiHistory[] $apiHistory
     *
     * @return self
     */
    public function setApiHistory(array $apiHistory) : self
    {
        $this->initialized['apiHistory'] = true;
        $this->apiHistory = $apiHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApplicationId() : string
    {
        return $this->applicationId;
    }
    /**
     * 
     *
     * @param string $applicationId
     *
     * @return self
     */
    public function setApplicationId(string $applicationId) : self
    {
        $this->initialized['applicationId'] = true;
        $this->applicationId = $applicationId;
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
    public function getApplicationModeExpirationDate() : string
    {
        return $this->applicationModeExpirationDate;
    }
    /**
     * 
     *
     * @param string $applicationModeExpirationDate
     *
     * @return self
     */
    public function setApplicationModeExpirationDate(string $applicationModeExpirationDate) : self
    {
        $this->initialized['applicationModeExpirationDate'] = true;
        $this->applicationModeExpirationDate = $applicationModeExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApplicationModeTitle() : string
    {
        return $this->applicationModeTitle;
    }
    /**
     * 
     *
     * @param string $applicationModeTitle
     *
     * @return self
     */
    public function setApplicationModeTitle(string $applicationModeTitle) : self
    {
        $this->initialized['applicationModeTitle'] = true;
        $this->applicationModeTitle = $applicationModeTitle;
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
     * @return bool
     */
    public function getCanRenew() : bool
    {
        return $this->canRenew;
    }
    /**
     * 
     *
     * @param bool $canRenew
     *
     * @return self
     */
    public function setCanRenew(bool $canRenew) : self
    {
        $this->initialized['canRenew'] = true;
        $this->canRenew = $canRenew;
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
     * @return string
     */
    public function getCommentsLastChangedAt() : string
    {
        return $this->commentsLastChangedAt;
    }
    /**
     * 
     *
     * @param string $commentsLastChangedAt
     *
     * @return self
     */
    public function setCommentsLastChangedAt(string $commentsLastChangedAt) : self
    {
        $this->initialized['commentsLastChangedAt'] = true;
        $this->commentsLastChangedAt = $commentsLastChangedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreationDate() : string
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate(string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeleteStatus() : string
    {
        return $this->deleteStatus;
    }
    /**
     * 
     *
     * @param string $deleteStatus
     *
     * @return self
     */
    public function setDeleteStatus(string $deleteStatus) : self
    {
        $this->initialized['deleteStatus'] = true;
        $this->deleteStatus = $deleteStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDeletedAt() : string
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param string $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(string $deletedAt) : self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * Indicates, if DNSSEC is enabled. Possible values: signedDelegation, unsigned.
     *
     * @return string
     */
    public function getDnssec() : string
    {
        return $this->dnssec;
    }
    /**
     * Indicates, if DNSSEC is enabled. Possible values: signedDelegation, unsigned.
     *
     * @param string $dnssec
     *
     * @return self
     */
    public function setDnssec(string $dnssec) : self
    {
        $this->initialized['dnssec'] = true;
        $this->dnssec = $dnssec;
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
    public function getHardQuarantineExpiryDate() : string
    {
        return $this->hardQuarantineExpiryDate;
    }
    /**
     * 
     *
     * @param string $hardQuarantineExpiryDate
     *
     * @return self
     */
    public function setHardQuarantineExpiryDate(string $hardQuarantineExpiryDate) : self
    {
        $this->initialized['hardQuarantineExpiryDate'] = true;
        $this->hardQuarantineExpiryDate = $hardQuarantineExpiryDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasActiveSectigoZone() : bool
    {
        return $this->hasActiveSectigoZone;
    }
    /**
     * 
     *
     * @param bool $hasActiveSectigoZone
     *
     * @return self
     */
    public function setHasActiveSectigoZone(bool $hasActiveSectigoZone) : self
    {
        $this->initialized['hasActiveSectigoZone'] = true;
        $this->hasActiveSectigoZone = $hasActiveSectigoZone;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getHasHistory() : bool
    {
        return $this->hasHistory;
    }
    /**
     * 
     *
     * @param bool $hasHistory
     *
     * @return self
     */
    public function setHasHistory(bool $hasHistory) : self
    {
        $this->initialized['hasHistory'] = true;
        $this->hasHistory = $hasHistory;
        return $this;
    }
    /**
     * 
     *
     * @return DomainHistory[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param DomainHistory[] $history
     *
     * @return self
     */
    public function setHistory(array $history) : self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
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
    public function getInternalAuthCode() : string
    {
        return $this->internalAuthCode;
    }
    /**
     * 
     *
     * @param string $internalAuthCode
     *
     * @return self
     */
    public function setInternalAuthCode(string $internalAuthCode) : self
    {
        $this->initialized['internalAuthCode'] = true;
        $this->internalAuthCode = $internalAuthCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAbusive() : bool
    {
        return $this->isAbusive;
    }
    /**
     * 
     *
     * @param bool $isAbusive
     *
     * @return self
     */
    public function setIsAbusive(bool $isAbusive) : self
    {
        $this->initialized['isAbusive'] = true;
        $this->isAbusive = $isAbusive;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIsClientHoldEnabled() : string
    {
        return $this->isClientHoldEnabled;
    }
    /**
     * 
     *
     * @param string $isClientHoldEnabled
     *
     * @return self
     */
    public function setIsClientHoldEnabled(string $isClientHoldEnabled) : self
    {
        $this->initialized['isClientHoldEnabled'] = true;
        $this->isClientHoldEnabled = $isClientHoldEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsDeleted() : bool
    {
        return $this->isDeleted;
    }
    /**
     * 
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted) : self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
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
    public function getIsHostedWhois() : bool
    {
        return $this->isHostedWhois;
    }
    /**
     * 
     *
     * @param bool $isHostedWhois
     *
     * @return self
     */
    public function setIsHostedWhois(bool $isHostedWhois) : self
    {
        $this->initialized['isHostedWhois'] = true;
        $this->isHostedWhois = $isHostedWhois;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsLockable() : bool
    {
        return $this->isLockable;
    }
    /**
     * 
     *
     * @param bool $isLockable
     *
     * @return self
     */
    public function setIsLockable(bool $isLockable) : self
    {
        $this->initialized['isLockable'] = true;
        $this->isLockable = $isLockable;
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
    public function getIsParked() : bool
    {
        return $this->isParked;
    }
    /**
     * 
     *
     * @param bool $isParked
     *
     * @return self
     */
    public function setIsParked(bool $isParked) : self
    {
        $this->initialized['isParked'] = true;
        $this->isParked = $isParked;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPremium() : bool
    {
        return $this->isPremium;
    }
    /**
     * 
     *
     * @param bool $isPremium
     *
     * @return self
     */
    public function setIsPremium(bool $isPremium) : self
    {
        $this->initialized['isPremium'] = true;
        $this->isPremium = $isPremium;
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
     * @return string
     */
    public function getLastChanged() : string
    {
        return $this->lastChanged;
    }
    /**
     * 
     *
     * @param string $lastChanged
     *
     * @return self
     */
    public function setLastChanged(string $lastChanged) : self
    {
        $this->initialized['lastChanged'] = true;
        $this->lastChanged = $lastChanged;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getModifyOwnerAllowed() : bool
    {
        return $this->modifyOwnerAllowed;
    }
    /**
     * 
     *
     * @param bool $modifyOwnerAllowed
     *
     * @return self
     */
    public function setModifyOwnerAllowed(bool $modifyOwnerAllowed) : self
    {
        $this->initialized['modifyOwnerAllowed'] = true;
        $this->modifyOwnerAllowed = $modifyOwnerAllowed;
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
     * @return int
     */
    public function getNsgroupId() : int
    {
        return $this->nsgroupId;
    }
    /**
     * 
     *
     * @param int $nsgroupId
     *
     * @return self
     */
    public function setNsgroupId(int $nsgroupId) : self
    {
        $this->initialized['nsgroupId'] = true;
        $this->nsgroupId = $nsgroupId;
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
     * @return DomainOwner
     */
    public function getOwner() : DomainOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param DomainOwner $owner
     *
     * @return self
     */
    public function setOwner(DomainOwner $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOwnerCompanyName() : string
    {
        return $this->ownerCompanyName;
    }
    /**
     * 
     *
     * @param string $ownerCompanyName
     *
     * @return self
     */
    public function setOwnerCompanyName(string $ownerCompanyName) : self
    {
        $this->initialized['ownerCompanyName'] = true;
        $this->ownerCompanyName = $ownerCompanyName;
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
    public function getQuarantineExpirationDate() : string
    {
        return $this->quarantineExpirationDate;
    }
    /**
     * 
     *
     * @param string $quarantineExpirationDate
     *
     * @return self
     */
    public function setQuarantineExpirationDate(string $quarantineExpirationDate) : self
    {
        $this->initialized['quarantineExpirationDate'] = true;
        $this->quarantineExpirationDate = $quarantineExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getRegistryExpirationDate() : string
    {
        return $this->registryExpirationDate;
    }
    /**
     * 
     *
     * @param string $registryExpirationDate
     *
     * @return self
     */
    public function setRegistryExpirationDate(string $registryExpirationDate) : self
    {
        $this->initialized['registryExpirationDate'] = true;
        $this->registryExpirationDate = $registryExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return DomainRegistryStatuses
     */
    public function getRegistryStatuses() : DomainRegistryStatuses
    {
        return $this->registryStatuses;
    }
    /**
     * 
     *
     * @param DomainRegistryStatuses $registryStatuses
     *
     * @return self
     */
    public function setRegistryStatuses(DomainRegistryStatuses $registryStatuses) : self
    {
        $this->initialized['registryStatuses'] = true;
        $this->registryStatuses = $registryStatuses;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRenew() : int
    {
        return $this->renew;
    }
    /**
     * 
     *
     * @param int $renew
     *
     * @return self
     */
    public function setRenew(int $renew) : self
    {
        $this->initialized['renew'] = true;
        $this->renew = $renew;
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
    public function getRestorableUntil() : string
    {
        return $this->restorableUntil;
    }
    /**
     * 
     *
     * @param string $restorableUntil
     *
     * @return self
     */
    public function setRestorableUntil(string $restorableUntil) : self
    {
        $this->initialized['restorableUntil'] = true;
        $this->restorableUntil = $restorableUntil;
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
    public function getScheduledFrom() : string
    {
        return $this->scheduledFrom;
    }
    /**
     * 
     *
     * @param string $scheduledFrom
     *
     * @return self
     */
    public function setScheduledFrom(string $scheduledFrom) : self
    {
        $this->initialized['scheduledFrom'] = true;
        $this->scheduledFrom = $scheduledFrom;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSoftQuarantineExpiryDate() : string
    {
        return $this->softQuarantineExpiryDate;
    }
    /**
     * 
     *
     * @param string $softQuarantineExpiryDate
     *
     * @return self
     */
    public function setSoftQuarantineExpiryDate(string $softQuarantineExpiryDate) : self
    {
        $this->initialized['softQuarantineExpiryDate'] = true;
        $this->softQuarantineExpiryDate = $softQuarantineExpiryDate;
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
    public function getTradeAllowed() : bool
    {
        return $this->tradeAllowed;
    }
    /**
     * 
     *
     * @param bool $tradeAllowed
     *
     * @return self
     */
    public function setTradeAllowed(bool $tradeAllowed) : self
    {
        $this->initialized['tradeAllowed'] = true;
        $this->tradeAllowed = $tradeAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTradeAuthCodeRequired() : string
    {
        return $this->tradeAuthCodeRequired;
    }
    /**
     * 
     *
     * @param string $tradeAuthCodeRequired
     *
     * @return self
     */
    public function setTradeAuthCodeRequired(string $tradeAuthCodeRequired) : self
    {
        $this->initialized['tradeAuthCodeRequired'] = true;
        $this->tradeAuthCodeRequired = $tradeAuthCodeRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransferAuthCodeRequired() : string
    {
        return $this->transferAuthCodeRequired;
    }
    /**
     * 
     *
     * @param string $transferAuthCodeRequired
     *
     * @return self
     */
    public function setTransferAuthCodeRequired(string $transferAuthCodeRequired) : self
    {
        $this->initialized['transferAuthCodeRequired'] = true;
        $this->transferAuthCodeRequired = $transferAuthCodeRequired;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTransferCancelSupported() : bool
    {
        return $this->transferCancelSupported;
    }
    /**
     * 
     *
     * @param bool $transferCancelSupported
     *
     * @return self
     */
    public function setTransferCancelSupported(bool $transferCancelSupported) : self
    {
        $this->initialized['transferCancelSupported'] = true;
        $this->transferCancelSupported = $transferCancelSupported;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
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
    /**
     * 
     *
     * @return string
     */
    public function getVerificationEmailExpDate() : string
    {
        return $this->verificationEmailExpDate;
    }
    /**
     * 
     *
     * @param string $verificationEmailExpDate
     *
     * @return self
     */
    public function setVerificationEmailExpDate(string $verificationEmailExpDate) : self
    {
        $this->initialized['verificationEmailExpDate'] = true;
        $this->verificationEmailExpDate = $verificationEmailExpDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerificationEmailName() : string
    {
        return $this->verificationEmailName;
    }
    /**
     * 
     *
     * @param string $verificationEmailName
     *
     * @return self
     */
    public function setVerificationEmailName(string $verificationEmailName) : self
    {
        $this->initialized['verificationEmailName'] = true;
        $this->verificationEmailName = $verificationEmailName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerificationEmailStatus() : string
    {
        return $this->verificationEmailStatus;
    }
    /**
     * 
     *
     * @param string $verificationEmailStatus
     *
     * @return self
     */
    public function setVerificationEmailStatus(string $verificationEmailStatus) : self
    {
        $this->initialized['verificationEmailStatus'] = true;
        $this->verificationEmailStatus = $verificationEmailStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVerificationEmailStatusDescription() : string
    {
        return $this->verificationEmailStatusDescription;
    }
    /**
     * 
     *
     * @param string $verificationEmailStatusDescription
     *
     * @return self
     */
    public function setVerificationEmailStatusDescription(string $verificationEmailStatusDescription) : self
    {
        $this->initialized['verificationEmailStatusDescription'] = true;
        $this->verificationEmailStatusDescription = $verificationEmailStatusDescription;
        return $this;
    }
    /**
     * 
     *
     * @return DomainWhoisPrivacyData
     */
    public function getWhoisPrivacyData() : DomainWhoisPrivacyData
    {
        return $this->whoisPrivacyData;
    }
    /**
     * 
     *
     * @param DomainWhoisPrivacyData $whoisPrivacyData
     *
     * @return self
     */
    public function setWhoisPrivacyData(DomainWhoisPrivacyData $whoisPrivacyData) : self
    {
        $this->initialized['whoisPrivacyData'] = true;
        $this->whoisPrivacyData = $whoisPrivacyData;
        return $this;
    }
}