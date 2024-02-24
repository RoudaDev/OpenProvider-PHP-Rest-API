<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainCheckDomainRequest
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
     * @var DomainCheckAdditionalData
     */
    protected $additionalData;
    /**
     * When new gTLD is started it gets through several phases before it becomes available for registration to everybody (General availability or GA). There are several phases before GA when it is still possible to apply for a domain, but with some restrictions.
     *
     * @var string
     */
    protected $applicationMode;
    /**
     * 
     *
     * @var DomainDomain[]
     */
    protected $domains;
    /**
     * 
     *
     * @var string
     */
    protected $provider;
    /**
     * 
     *
     * @var bool
     */
    protected $withPrice;
    /**
     * 
     *
     * @return DomainCheckAdditionalData
     */
    public function getAdditionalData() : DomainCheckAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param DomainCheckAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(DomainCheckAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
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
     * @return DomainDomain[]
     */
    public function getDomains() : array
    {
        return $this->domains;
    }
    /**
     * 
     *
     * @param DomainDomain[] $domains
     *
     * @return self
     */
    public function setDomains(array $domains) : self
    {
        $this->initialized['domains'] = true;
        $this->domains = $domains;
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
     * @return bool
     */
    public function getWithPrice() : bool
    {
        return $this->withPrice;
    }
    /**
     * 
     *
     * @param bool $withPrice
     *
     * @return self
     */
    public function setWithPrice(bool $withPrice) : self
    {
        $this->initialized['withPrice'] = true;
        $this->withPrice = $withPrice;
        return $this;
    }
}