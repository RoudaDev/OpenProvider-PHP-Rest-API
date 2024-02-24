<?php

namespace Rouda\OpenProviderAPI\Model;

class ZoneZone
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
    protected $active;
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
    protected $dnskey;
    /**
     * 
     *
     * @var HistoryZoneHistory[]
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
    protected $ip;
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
    protected $isShadow;
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
    protected $modificationDate;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ZonePremiumDnsData
     */
    protected $premiumDns;
    /**
     * 
     *
     * @var string
     */
    protected $provider;
    /**
     * 
     *
     * @var RecordRecordInfo[]
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
    protected $type;
    /**
     * 
     *
     * @return bool
     */
    public function getActive() : bool
    {
        return $this->active;
    }
    /**
     * 
     *
     * @param bool $active
     *
     * @return self
     */
    public function setActive(bool $active) : self
    {
        $this->initialized['active'] = true;
        $this->active = $active;
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
    public function getDnskey() : string
    {
        return $this->dnskey;
    }
    /**
     * 
     *
     * @param string $dnskey
     *
     * @return self
     */
    public function setDnskey(string $dnskey) : self
    {
        $this->initialized['dnskey'] = true;
        $this->dnskey = $dnskey;
        return $this;
    }
    /**
     * 
     *
     * @return HistoryZoneHistory[]
     */
    public function getHistory() : array
    {
        return $this->history;
    }
    /**
     * 
     *
     * @param HistoryZoneHistory[] $history
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
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
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
    public function getIsShadow() : bool
    {
        return $this->isShadow;
    }
    /**
     * 
     *
     * @param bool $isShadow
     *
     * @return self
     */
    public function setIsShadow(bool $isShadow) : self
    {
        $this->initialized['isShadow'] = true;
        $this->isShadow = $isShadow;
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
    public function getModificationDate() : string
    {
        return $this->modificationDate;
    }
    /**
     * 
     *
     * @param string $modificationDate
     *
     * @return self
     */
    public function setModificationDate(string $modificationDate) : self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
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
     * @return ZonePremiumDnsData
     */
    public function getPremiumDns() : ZonePremiumDnsData
    {
        return $this->premiumDns;
    }
    /**
     * 
     *
     * @param ZonePremiumDnsData $premiumDns
     *
     * @return self
     */
    public function setPremiumDns(ZonePremiumDnsData $premiumDns) : self
    {
        $this->initialized['premiumDns'] = true;
        $this->premiumDns = $premiumDns;
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
     * @return RecordRecordInfo[]
     */
    public function getRecords() : array
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param RecordRecordInfo[] $records
     *
     * @return self
     */
    public function setRecords(array $records) : self
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
}