<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainSuggestNameDomainResult
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $tld;
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
     * @return string
     */
    public function getTld() : string
    {
        return $this->tld;
    }
    /**
     * 
     *
     * @param string $tld
     *
     * @return self
     */
    public function setTld(string $tld) : self
    {
        $this->initialized['tld'] = true;
        $this->tld = $tld;
        return $this;
    }
}