<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var ZoneDomain
     */
    protected $domain;
    /**
     * 
     *
     * @var string
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
    protected $provider;
    /**
     * 
     *
     * @var ZoneRecord[]
     */
    protected $records;
    /**
     * 
     *
     * @var bool
     */
    protected $secured;
    /**
     * 
     *
     * @var string
     */
    protected $templateName;
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
     * @return string
     */
    public function getIsSpamexpertsEnabled() : string
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     * 
     *
     * @param string $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(string $isSpamexpertsEnabled) : self
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
     * @return ZoneRecord[]
     */
    public function getRecords() : array
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param ZoneRecord[] $records
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
     * @return bool
     */
    public function getSecured() : bool
    {
        return $this->secured;
    }
    /**
     * 
     *
     * @param bool $secured
     *
     * @return self
     */
    public function setSecured(bool $secured) : self
    {
        $this->initialized['secured'] = true;
        $this->secured = $secured;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTemplateName() : string
    {
        return $this->templateName;
    }
    /**
     * 
     *
     * @param string $templateName
     *
     * @return self
     */
    public function setTemplateName(string $templateName) : self
    {
        $this->initialized['templateName'] = true;
        $this->templateName = $templateName;
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