<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var DomainSuggestNameDomainResult[]
     */
    protected $results;
    /**
     * 
     *
     * @return DomainSuggestNameDomainResult[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param DomainSuggestNameDomainResult[] $results
     *
     * @return self
     */
    public function setResults(array $results) : self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}