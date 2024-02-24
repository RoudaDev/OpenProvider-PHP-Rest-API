<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainTokenCreateTokenRequest
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
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var string
     */
    protected $zoneProvider;
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
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
    public function getZoneProvider() : string
    {
        return $this->zoneProvider;
    }
    /**
     * 
     *
     * @param string $zoneProvider
     *
     * @return self
     */
    public function setZoneProvider(string $zoneProvider) : self
    {
        $this->initialized['zoneProvider'] = true;
        $this->zoneProvider = $zoneProvider;
        return $this;
    }
}