<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainSuggestNameDomainRequest
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
    protected $language;
    /**
     * 
     *
     * @var int
     */
    protected $limit;
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
    protected $provider;
    /**
     * Set true to remove domain name suggestions deemed obscene by the supplier. set false to include obscene domain name suggestions.
     *
     * @var bool
     */
    protected $sensitive;
    /**
     * 
     *
     * @var string[]
     */
    protected $tlds;
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLimit() : int
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param int $limit
     *
     * @return self
     */
    public function setLimit(int $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
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
     * Set true to remove domain name suggestions deemed obscene by the supplier. set false to include obscene domain name suggestions.
     *
     * @return bool
     */
    public function getSensitive() : bool
    {
        return $this->sensitive;
    }
    /**
     * Set true to remove domain name suggestions deemed obscene by the supplier. set false to include obscene domain name suggestions.
     *
     * @param bool $sensitive
     *
     * @return self
     */
    public function setSensitive(bool $sensitive) : self
    {
        $this->initialized['sensitive'] = true;
        $this->sensitive = $sensitive;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTlds() : array
    {
        return $this->tlds;
    }
    /**
     * 
     *
     * @param string[] $tlds
     *
     * @return self
     */
    public function setTlds(array $tlds) : self
    {
        $this->initialized['tlds'] = true;
        $this->tlds = $tlds;
        return $this;
    }
}