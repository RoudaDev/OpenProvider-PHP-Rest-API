<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var ZoneDomain|null
     */
    protected $domain;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
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
    protected $masterIp;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var ZonePremiumDnsData|null
     */
    protected $premiumDns;
    /**
     * 
     *
     * @var string|null
     */
    protected $provider;
    /**
     * 
     *
     * @var ZoneRecordUpdates|null
     */
    protected $records;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return ZoneDomain|null
     */
    public function getDomain() : ?ZoneDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param ZoneDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?ZoneDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
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
    public function getMasterIp() : ?string
    {
        return $this->masterIp;
    }
    /**
     * 
     *
     * @param string|null $masterIp
     *
     * @return self
     */
    public function setMasterIp(?string $masterIp) : self
    {
        $this->initialized['masterIp'] = true;
        $this->masterIp = $masterIp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ZonePremiumDnsData|null
     */
    public function getPremiumDns() : ?ZonePremiumDnsData
    {
        return $this->premiumDns;
    }
    /**
     * 
     *
     * @param ZonePremiumDnsData|null $premiumDns
     *
     * @return self
     */
    public function setPremiumDns(?ZonePremiumDnsData $premiumDns) : self
    {
        $this->initialized['premiumDns'] = true;
        $this->premiumDns = $premiumDns;
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
     * @return ZoneRecordUpdates|null
     */
    public function getRecords() : ?ZoneRecordUpdates
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param ZoneRecordUpdates|null $records
     *
     * @return self
     */
    public function setRecords(?ZoneRecordUpdates $records) : self
    {
        $this->initialized['records'] = true;
        $this->records = $records;
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
}