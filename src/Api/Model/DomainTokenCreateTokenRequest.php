<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $zoneProvider;
    /**
     * 
     *
     * @return string|null
     */
    public function getDomain() : ?string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string|null $domain
     *
     * @return self
     */
    public function setDomain(?string $domain) : self
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
    public function getZoneProvider() : ?string
    {
        return $this->zoneProvider;
    }
    /**
     * 
     *
     * @param string|null $zoneProvider
     *
     * @return self
     */
    public function setZoneProvider(?string $zoneProvider) : self
    {
        $this->initialized['zoneProvider'] = true;
        $this->zoneProvider = $zoneProvider;
        return $this;
    }
}