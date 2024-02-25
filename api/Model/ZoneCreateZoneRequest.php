<?php

namespace Rouda\OpenProvider\Api\Model;

class ZoneCreateZoneRequest
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
     * @var string|null
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
    protected $provider;
    /**
     * 
     *
     * @var ZoneRecord[]|null
     */
    protected $records;
    /**
     * 
     *
     * @var bool|null
     */
    protected $secured;
    /**
     * 
     *
     * @var string|null
     */
    protected $templateName;
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
     * @return string|null
     */
    public function getIsSpamexpertsEnabled() : ?string
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     * 
     *
     * @param string|null $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(?string $isSpamexpertsEnabled) : self
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
     * @return ZoneRecord[]|null
     */
    public function getRecords() : ?array
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param ZoneRecord[]|null $records
     *
     * @return self
     */
    public function setRecords(?array $records) : self
    {
        $this->initialized['records'] = true;
        $this->records = $records;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSecured() : ?bool
    {
        return $this->secured;
    }
    /**
     * 
     *
     * @param bool|null $secured
     *
     * @return self
     */
    public function setSecured(?bool $secured) : self
    {
        $this->initialized['secured'] = true;
        $this->secured = $secured;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTemplateName() : ?string
    {
        return $this->templateName;
    }
    /**
     * 
     *
     * @param string|null $templateName
     *
     * @return self
     */
    public function setTemplateName(?string $templateName) : self
    {
        $this->initialized['templateName'] = true;
        $this->templateName = $templateName;
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