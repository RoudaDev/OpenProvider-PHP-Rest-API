<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $tld;
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
     * @return string|null
     */
    public function getTld() : ?string
    {
        return $this->tld;
    }
    /**
     * 
     *
     * @param string|null $tld
     *
     * @return self
     */
    public function setTld(?string $tld) : self
    {
        $this->initialized['tld'] = true;
        $this->tld = $tld;
        return $this;
    }
}