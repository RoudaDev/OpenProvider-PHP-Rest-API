<?php

namespace Rouda\OpenProviderAPI\Model;

class ZoneUpdateZoneRequest
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
     * @var ZoneDomain
     */
    protected $domain;
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
    protected $isSpamexpertsEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $masterIp;
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
     * @var ZoneRecordUpdates
     */
    protected $records;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return ZoneDomain
     */
    public function getDomain() : ZoneDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param ZoneDomain $domain
     *
     * @return self
     */
    public function setDomain(ZoneDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
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
    public function getMasterIp() : string
    {
        return $this->masterIp;
    }
    /**
     * 
     *
     * @param string $masterIp
     *
     * @return self
     */
    public function setMasterIp(string $masterIp) : self
    {
        $this->initialized['masterIp'] = true;
        $this->masterIp = $masterIp;
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
     * @return ZoneRecordUpdates
     */
    public function getRecords() : ZoneRecordUpdates
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param ZoneRecordUpdates $records
     *
     * @return self
     */
    public function setRecords(ZoneRecordUpdates $records) : self
    {
        $this->initialized['records'] = true;
        $this->records = $records;
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