<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var int|null
     */
    protected $limit;
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
    protected $provider;
    /**
     * Set true to remove domain name suggestions deemed obscene by the supplier. set false to include obscene domain name suggestions.
     *
     * @var bool|null
     */
    protected $sensitive;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $tlds;
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getLimit() : ?int
    {
        return $this->limit;
    }
    /**
     * 
     *
     * @param int|null $limit
     *
     * @return self
     */
    public function setLimit(?int $limit) : self
    {
        $this->initialized['limit'] = true;
        $this->limit = $limit;
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
     * Set true to remove domain name suggestions deemed obscene by the supplier. set false to include obscene domain name suggestions.
     *
     * @return bool|null
     */
    public function getSensitive() : ?bool
    {
        return $this->sensitive;
    }
    /**
     * Set true to remove domain name suggestions deemed obscene by the supplier. set false to include obscene domain name suggestions.
     *
     * @param bool|null $sensitive
     *
     * @return self
     */
    public function setSensitive(?bool $sensitive) : self
    {
        $this->initialized['sensitive'] = true;
        $this->sensitive = $sensitive;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getTlds() : ?array
    {
        return $this->tlds;
    }
    /**
     * 
     *
     * @param string[]|null $tlds
     *
     * @return self
     */
    public function setTlds(?array $tlds) : self
    {
        $this->initialized['tlds'] = true;
        $this->tlds = $tlds;
        return $this;
    }
}