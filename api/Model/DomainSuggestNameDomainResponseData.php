<?php

namespace Rouda\OpenProvider\Api\Model;

class DomainSuggestNameDomainResponseData
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
     * @var DomainSuggestNameDomainResult[]|null
     */
    protected $results;
    /**
     * 
     *
     * @return DomainSuggestNameDomainResult[]|null
     */
    public function getResults() : ?array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param DomainSuggestNameDomainResult[]|null $results
     *
     * @return self
     */
    public function setResults(?array $results) : self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}