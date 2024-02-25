<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var DomainAbuseDetails|null
     */
    protected $abuseDetails;
    /**
     * 
     *
     * @var string|null
     */
    protected $activeDate;
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
     * 
     *
     * @var DomainApiHistory[]|null
     */
    protected $apiHistory;
    /**
     * 
     *
     * @var string|null
     */
    protected $applicationId;
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
    protected $applicationModeExpirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $applicationModeTitle;
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
     * @var bool|null
     */
    protected $canRenew;
    /**
     * 
     *
     * @var string|null
     */
    protected $comments;
    /**
     * 
     *
     * @var string|null
     */
    protected $commentsLastChangedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $creationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $deleteStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $deletedAt;
    /**
     * Indicates, if DNSSEC is enabled. Possible values: signedDelegation, unsigned.
     *
     * @var string|null
     */
    protected $dnssec;
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
     * @var string|null
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $hardQuarantineExpiryDate;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasActiveSectigoZone;
    /**
     * 
     *
     * @var bool|null
     */
    protected $hasHistory;
    /**
     * 
     *
     * @var DomainHistory[]|null
     */
    protected $history;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $internalAuthCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isAbusive;
    /**
     * 
     *
     * @var string|null
     */
    protected $isClientHoldEnabled;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isDeleted;
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
    protected $isHostedWhois;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isLockable;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isLocked;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isParked;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPremium;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isPrivateWhoisAllowed;
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
     * @var string|null
     */
    protected $lastChanged;
    /**
     * 
     *
     * @var bool|null
     */
    protected $modifyOwnerAllowed;
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
     * @var int|null
     */
    protected $nsgroupId;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderDate;
    /**
     * 
     *
     * @var DomainOwner|null
     */
    protected $owner;
    /**
     * 
     *
     * @var string|null
     */
    protected $ownerCompanyName;
    /**
     * 
     *
     * @var string|null
     */
    protected $ownerHandle;
    /**
     * 
     *
     * @var string|null
     */
    protected $quarantineExpirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $registryExpirationDate;
    /**
     * 
     *
     * @var DomainRegistryStatuses|null
     */
    protected $registryStatuses;
    /**
     * 
     *
     * @var int|null
     */
    protected $renew;
    /**
     * 
     *
     * @var string|null
     */
    protected $renewalDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $resellerHandle;
    /**
     * 
     *
     * @var int|null
     */
    protected $resellerId;
    /**
     * 
     *
     * @var string|null
     */
    protected $restorableUntil;
    /**
     * 
     *
     * @var string|null
     */
    protected $scheduledAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $scheduledFrom;
    /**
     * 
     *
     * @var string|null
     */
    protected $softQuarantineExpiryDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $techHandle;
    /**
     * 
     *
     * @var bool|null
     */
    protected $tradeAllowed;
    /**
     * 
     *
     * @var string|null
     */
    protected $tradeAuthCodeRequired;
    /**
     * 
     *
     * @var string|null
     */
    protected $transferAuthCodeRequired;
    /**
     * 
     *
     * @var bool|null
     */
    protected $transferCancelSupported;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
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
     * @var string|null
     */
    protected $verificationEmailExpDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $verificationEmailName;
    /**
     * 
     *
     * @var string|null
     */
    protected $verificationEmailStatus;
    /**
     * 
     *
     * @var string|null
     */
    protected $verificationEmailStatusDescription;
    /**
     * 
     *
     * @var DomainWhoisPrivacyData|null
     */
    protected $whoisPrivacyData;
    /**
     * 
     *
     * @return DomainAbuseDetails|null
     */
    public function getAbuseDetails() : ?DomainAbuseDetails
    {
        return $this->abuseDetails;
    }
    /**
     * 
     *
     * @param DomainAbuseDetails|null $abuseDetails
     *
     * @return self
     */
    public function setAbuseDetails(?DomainAbuseDetails $abuseDetails) : self
    {
        $this->initialized['abuseDetails'] = true;
        $this->abuseDetails = $abuseDetails;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getActiveDate() : ?string
    {
        return $this->activeDate;
    }
    /**
     * 
     *
     * @param string|null $activeDate
     *
     * @return self
     */
    public function setActiveDate(?string $activeDate) : self
    {
        $this->initialized['activeDate'] = true;
        $this->activeDate = $activeDate;
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
     * 
     *
     * @return DomainApiHistory[]|null
     */
    public function getApiHistory() : ?array
    {
        return $this->apiHistory;
    }
    /**
     * 
     *
     * @param DomainApiHistory[]|null $apiHistory
     *
     * @return self
     */
    public function setApiHistory(?array $apiHistory) : self
    {
        $this->initialized['apiHistory'] = true;
        $this->apiHistory = $apiHistory;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplicationId() : ?string
    {
        return $this->applicationId;
    }
    /**
     * 
     *
     * @param string|null $applicationId
     *
     * @return self
     */
    public function setApplicationId(?string $applicationId) : self
    {
        $this->initialized['applicationId'] = true;
        $this->applicationId = $applicationId;
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
    public function getApplicationModeExpirationDate() : ?string
    {
        return $this->applicationModeExpirationDate;
    }
    /**
     * 
     *
     * @param string|null $applicationModeExpirationDate
     *
     * @return self
     */
    public function setApplicationModeExpirationDate(?string $applicationModeExpirationDate) : self
    {
        $this->initialized['applicationModeExpirationDate'] = true;
        $this->applicationModeExpirationDate = $applicationModeExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getApplicationModeTitle() : ?string
    {
        return $this->applicationModeTitle;
    }
    /**
     * 
     *
     * @param string|null $applicationModeTitle
     *
     * @return self
     */
    public function setApplicationModeTitle(?string $applicationModeTitle) : self
    {
        $this->initialized['applicationModeTitle'] = true;
        $this->applicationModeTitle = $applicationModeTitle;
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
     * @return bool|null
     */
    public function getCanRenew() : ?bool
    {
        return $this->canRenew;
    }
    /**
     * 
     *
     * @param bool|null $canRenew
     *
     * @return self
     */
    public function setCanRenew(?bool $canRenew) : self
    {
        $this->initialized['canRenew'] = true;
        $this->canRenew = $canRenew;
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
     * @return string|null
     */
    public function getCommentsLastChangedAt() : ?string
    {
        return $this->commentsLastChangedAt;
    }
    /**
     * 
     *
     * @param string|null $commentsLastChangedAt
     *
     * @return self
     */
    public function setCommentsLastChangedAt(?string $commentsLastChangedAt) : self
    {
        $this->initialized['commentsLastChangedAt'] = true;
        $this->commentsLastChangedAt = $commentsLastChangedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreationDate() : ?string
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param string|null $creationDate
     *
     * @return self
     */
    public function setCreationDate(?string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeleteStatus() : ?string
    {
        return $this->deleteStatus;
    }
    /**
     * 
     *
     * @param string|null $deleteStatus
     *
     * @return self
     */
    public function setDeleteStatus(?string $deleteStatus) : self
    {
        $this->initialized['deleteStatus'] = true;
        $this->deleteStatus = $deleteStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDeletedAt() : ?string
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param string|null $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(?string $deletedAt) : self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
        return $this;
    }
    /**
     * Indicates, if DNSSEC is enabled. Possible values: signedDelegation, unsigned.
     *
     * @return string|null
     */
    public function getDnssec() : ?string
    {
        return $this->dnssec;
    }
    /**
     * Indicates, if DNSSEC is enabled. Possible values: signedDelegation, unsigned.
     *
     * @param string|null $dnssec
     *
     * @return self
     */
    public function setDnssec(?string $dnssec) : self
    {
        $this->initialized['dnssec'] = true;
        $this->dnssec = $dnssec;
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
     * @return string|null
     */
    public function getExpirationDate() : ?string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHardQuarantineExpiryDate() : ?string
    {
        return $this->hardQuarantineExpiryDate;
    }
    /**
     * 
     *
     * @param string|null $hardQuarantineExpiryDate
     *
     * @return self
     */
    public function setHardQuarantineExpiryDate(?string $hardQuarantineExpiryDate) : self
    {
        $this->initialized['hardQuarantineExpiryDate'] = true;
        $this->hardQuarantineExpiryDate = $hardQuarantineExpiryDate;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHasActiveSectigoZone() : ?bool
    {
        return $this->hasActiveSectigoZone;
    }
    /**
     * 
     *
     * @param bool|null $hasActiveSectigoZone
     *
     * @return self
     */
    public function setHasActiveSectigoZone(?bool $hasActiveSectigoZone) : self
    {
        $this->initialized['hasActiveSectigoZone'] = true;
        $this->hasActiveSectigoZone = $hasActiveSectigoZone;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getHasHistory() : ?bool
    {
        return $this->hasHistory;
    }
    /**
     * 
     *
     * @param bool|null $hasHistory
     *
     * @return self
     */
    public function setHasHistory(?bool $hasHistory) : self
    {
        $this->initialized['hasHistory'] = true;
        $this->hasHistory = $hasHistory;
        return $this;
    }
    /**
     * 
     *
     * @return DomainHistory[]|null
     */
    public function getHistory() : ?array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param DomainHistory[]|null $history
     *
     * @return self
     */
    public function setHistory(?array $history) : self
    {
        $this->initialized['history'] = true;
        $this->history = $history;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInternalAuthCode() : ?string
    {
        return $this->internalAuthCode;
    }
    /**
     * 
     *
     * @param string|null $internalAuthCode
     *
     * @return self
     */
    public function setInternalAuthCode(?string $internalAuthCode) : self
    {
        $this->initialized['internalAuthCode'] = true;
        $this->internalAuthCode = $internalAuthCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsAbusive() : ?bool
    {
        return $this->isAbusive;
    }
    /**
     * 
     *
     * @param bool|null $isAbusive
     *
     * @return self
     */
    public function setIsAbusive(?bool $isAbusive) : self
    {
        $this->initialized['isAbusive'] = true;
        $this->isAbusive = $isAbusive;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIsClientHoldEnabled() : ?string
    {
        return $this->isClientHoldEnabled;
    }
    /**
     * 
     *
     * @param string|null $isClientHoldEnabled
     *
     * @return self
     */
    public function setIsClientHoldEnabled(?string $isClientHoldEnabled) : self
    {
        $this->initialized['isClientHoldEnabled'] = true;
        $this->isClientHoldEnabled = $isClientHoldEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsDeleted() : ?bool
    {
        return $this->isDeleted;
    }
    /**
     * 
     *
     * @param bool|null $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(?bool $isDeleted) : self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
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
    public function getIsHostedWhois() : ?bool
    {
        return $this->isHostedWhois;
    }
    /**
     * 
     *
     * @param bool|null $isHostedWhois
     *
     * @return self
     */
    public function setIsHostedWhois(?bool $isHostedWhois) : self
    {
        $this->initialized['isHostedWhois'] = true;
        $this->isHostedWhois = $isHostedWhois;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsLockable() : ?bool
    {
        return $this->isLockable;
    }
    /**
     * 
     *
     * @param bool|null $isLockable
     *
     * @return self
     */
    public function setIsLockable(?bool $isLockable) : self
    {
        $this->initialized['isLockable'] = true;
        $this->isLockable = $isLockable;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsLocked() : ?bool
    {
        return $this->isLocked;
    }
    /**
     * 
     *
     * @param bool|null $isLocked
     *
     * @return self
     */
    public function setIsLocked(?bool $isLocked) : self
    {
        $this->initialized['isLocked'] = true;
        $this->isLocked = $isLocked;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsParked() : ?bool
    {
        return $this->isParked;
    }
    /**
     * 
     *
     * @param bool|null $isParked
     *
     * @return self
     */
    public function setIsParked(?bool $isParked) : self
    {
        $this->initialized['isParked'] = true;
        $this->isParked = $isParked;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPremium() : ?bool
    {
        return $this->isPremium;
    }
    /**
     * 
     *
     * @param bool|null $isPremium
     *
     * @return self
     */
    public function setIsPremium(?bool $isPremium) : self
    {
        $this->initialized['isPremium'] = true;
        $this->isPremium = $isPremium;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsPrivateWhoisAllowed() : ?bool
    {
        return $this->isPrivateWhoisAllowed;
    }
    /**
     * 
     *
     * @param bool|null $isPrivateWhoisAllowed
     *
     * @return self
     */
    public function setIsPrivateWhoisAllowed(?bool $isPrivateWhoisAllowed) : self
    {
        $this->initialized['isPrivateWhoisAllowed'] = true;
        $this->isPrivateWhoisAllowed = $isPrivateWhoisAllowed;
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
     * @return string|null
     */
    public function getLastChanged() : ?string
    {
        return $this->lastChanged;
    }
    /**
     * 
     *
     * @param string|null $lastChanged
     *
     * @return self
     */
    public function setLastChanged(?string $lastChanged) : self
    {
        $this->initialized['lastChanged'] = true;
        $this->lastChanged = $lastChanged;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getModifyOwnerAllowed() : ?bool
    {
        return $this->modifyOwnerAllowed;
    }
    /**
     * 
     *
     * @param bool|null $modifyOwnerAllowed
     *
     * @return self
     */
    public function setModifyOwnerAllowed(?bool $modifyOwnerAllowed) : self
    {
        $this->initialized['modifyOwnerAllowed'] = true;
        $this->modifyOwnerAllowed = $modifyOwnerAllowed;
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
     * @return int|null
     */
    public function getNsgroupId() : ?int
    {
        return $this->nsgroupId;
    }
    /**
     * 
     *
     * @param int|null $nsgroupId
     *
     * @return self
     */
    public function setNsgroupId(?int $nsgroupId) : self
    {
        $this->initialized['nsgroupId'] = true;
        $this->nsgroupId = $nsgroupId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderDate() : ?string
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param string|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?string $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return DomainOwner|null
     */
    public function getOwner() : ?DomainOwner
    {
        return $this->owner;
    }
    /**
     * 
     *
     * @param DomainOwner|null $owner
     *
     * @return self
     */
    public function setOwner(?DomainOwner $owner) : self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOwnerCompanyName() : ?string
    {
        return $this->ownerCompanyName;
    }
    /**
     * 
     *
     * @param string|null $ownerCompanyName
     *
     * @return self
     */
    public function setOwnerCompanyName(?string $ownerCompanyName) : self
    {
        $this->initialized['ownerCompanyName'] = true;
        $this->ownerCompanyName = $ownerCompanyName;
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
     * @return string|null
     */
    public function getQuarantineExpirationDate() : ?string
    {
        return $this->quarantineExpirationDate;
    }
    /**
     * 
     *
     * @param string|null $quarantineExpirationDate
     *
     * @return self
     */
    public function setQuarantineExpirationDate(?string $quarantineExpirationDate) : self
    {
        $this->initialized['quarantineExpirationDate'] = true;
        $this->quarantineExpirationDate = $quarantineExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRegistryExpirationDate() : ?string
    {
        return $this->registryExpirationDate;
    }
    /**
     * 
     *
     * @param string|null $registryExpirationDate
     *
     * @return self
     */
    public function setRegistryExpirationDate(?string $registryExpirationDate) : self
    {
        $this->initialized['registryExpirationDate'] = true;
        $this->registryExpirationDate = $registryExpirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return DomainRegistryStatuses|null
     */
    public function getRegistryStatuses() : ?DomainRegistryStatuses
    {
        return $this->registryStatuses;
    }
    /**
     * 
     *
     * @param DomainRegistryStatuses|null $registryStatuses
     *
     * @return self
     */
    public function setRegistryStatuses(?DomainRegistryStatuses $registryStatuses) : self
    {
        $this->initialized['registryStatuses'] = true;
        $this->registryStatuses = $registryStatuses;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getRenew() : ?int
    {
        return $this->renew;
    }
    /**
     * 
     *
     * @param int|null $renew
     *
     * @return self
     */
    public function setRenew(?int $renew) : self
    {
        $this->initialized['renew'] = true;
        $this->renew = $renew;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRenewalDate() : ?string
    {
        return $this->renewalDate;
    }
    /**
     * 
     *
     * @param string|null $renewalDate
     *
     * @return self
     */
    public function setRenewalDate(?string $renewalDate) : self
    {
        $this->initialized['renewalDate'] = true;
        $this->renewalDate = $renewalDate;
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
     * @return int|null
     */
    public function getResellerId() : ?int
    {
        return $this->resellerId;
    }
    /**
     * 
     *
     * @param int|null $resellerId
     *
     * @return self
     */
    public function setResellerId(?int $resellerId) : self
    {
        $this->initialized['resellerId'] = true;
        $this->resellerId = $resellerId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRestorableUntil() : ?string
    {
        return $this->restorableUntil;
    }
    /**
     * 
     *
     * @param string|null $restorableUntil
     *
     * @return self
     */
    public function setRestorableUntil(?string $restorableUntil) : self
    {
        $this->initialized['restorableUntil'] = true;
        $this->restorableUntil = $restorableUntil;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScheduledAt() : ?string
    {
        return $this->scheduledAt;
    }
    /**
     * 
     *
     * @param string|null $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(?string $scheduledAt) : self
    {
        $this->initialized['scheduledAt'] = true;
        $this->scheduledAt = $scheduledAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getScheduledFrom() : ?string
    {
        return $this->scheduledFrom;
    }
    /**
     * 
     *
     * @param string|null $scheduledFrom
     *
     * @return self
     */
    public function setScheduledFrom(?string $scheduledFrom) : self
    {
        $this->initialized['scheduledFrom'] = true;
        $this->scheduledFrom = $scheduledFrom;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSoftQuarantineExpiryDate() : ?string
    {
        return $this->softQuarantineExpiryDate;
    }
    /**
     * 
     *
     * @param string|null $softQuarantineExpiryDate
     *
     * @return self
     */
    public function setSoftQuarantineExpiryDate(?string $softQuarantineExpiryDate) : self
    {
        $this->initialized['softQuarantineExpiryDate'] = true;
        $this->softQuarantineExpiryDate = $softQuarantineExpiryDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
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
     * @return bool|null
     */
    public function getTradeAllowed() : ?bool
    {
        return $this->tradeAllowed;
    }
    /**
     * 
     *
     * @param bool|null $tradeAllowed
     *
     * @return self
     */
    public function setTradeAllowed(?bool $tradeAllowed) : self
    {
        $this->initialized['tradeAllowed'] = true;
        $this->tradeAllowed = $tradeAllowed;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTradeAuthCodeRequired() : ?string
    {
        return $this->tradeAuthCodeRequired;
    }
    /**
     * 
     *
     * @param string|null $tradeAuthCodeRequired
     *
     * @return self
     */
    public function setTradeAuthCodeRequired(?string $tradeAuthCodeRequired) : self
    {
        $this->initialized['tradeAuthCodeRequired'] = true;
        $this->tradeAuthCodeRequired = $tradeAuthCodeRequired;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTransferAuthCodeRequired() : ?string
    {
        return $this->transferAuthCodeRequired;
    }
    /**
     * 
     *
     * @param string|null $transferAuthCodeRequired
     *
     * @return self
     */
    public function setTransferAuthCodeRequired(?string $transferAuthCodeRequired) : self
    {
        $this->initialized['transferAuthCodeRequired'] = true;
        $this->transferAuthCodeRequired = $transferAuthCodeRequired;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTransferCancelSupported() : ?bool
    {
        return $this->transferCancelSupported;
    }
    /**
     * 
     *
     * @param bool|null $transferCancelSupported
     *
     * @return self
     */
    public function setTransferCancelSupported(?bool $transferCancelSupported) : self
    {
        $this->initialized['transferCancelSupported'] = true;
        $this->transferCancelSupported = $transferCancelSupported;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getVerificationEmailExpDate() : ?string
    {
        return $this->verificationEmailExpDate;
    }
    /**
     * 
     *
     * @param string|null $verificationEmailExpDate
     *
     * @return self
     */
    public function setVerificationEmailExpDate(?string $verificationEmailExpDate) : self
    {
        $this->initialized['verificationEmailExpDate'] = true;
        $this->verificationEmailExpDate = $verificationEmailExpDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVerificationEmailName() : ?string
    {
        return $this->verificationEmailName;
    }
    /**
     * 
     *
     * @param string|null $verificationEmailName
     *
     * @return self
     */
    public function setVerificationEmailName(?string $verificationEmailName) : self
    {
        $this->initialized['verificationEmailName'] = true;
        $this->verificationEmailName = $verificationEmailName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVerificationEmailStatus() : ?string
    {
        return $this->verificationEmailStatus;
    }
    /**
     * 
     *
     * @param string|null $verificationEmailStatus
     *
     * @return self
     */
    public function setVerificationEmailStatus(?string $verificationEmailStatus) : self
    {
        $this->initialized['verificationEmailStatus'] = true;
        $this->verificationEmailStatus = $verificationEmailStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVerificationEmailStatusDescription() : ?string
    {
        return $this->verificationEmailStatusDescription;
    }
    /**
     * 
     *
     * @param string|null $verificationEmailStatusDescription
     *
     * @return self
     */
    public function setVerificationEmailStatusDescription(?string $verificationEmailStatusDescription) : self
    {
        $this->initialized['verificationEmailStatusDescription'] = true;
        $this->verificationEmailStatusDescription = $verificationEmailStatusDescription;
        return $this;
    }
    /**
     * 
     *
     * @return DomainWhoisPrivacyData|null
     */
    public function getWhoisPrivacyData() : ?DomainWhoisPrivacyData
    {
        return $this->whoisPrivacyData;
    }
    /**
     * 
     *
     * @param DomainWhoisPrivacyData|null $whoisPrivacyData
     *
     * @return self
     */
    public function setWhoisPrivacyData(?DomainWhoisPrivacyData $whoisPrivacyData) : self
    {
        $this->initialized['whoisPrivacyData'] = true;
        $this->whoisPrivacyData = $whoisPrivacyData;
        return $this;
    }
}