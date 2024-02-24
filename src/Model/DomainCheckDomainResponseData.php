<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainCheckDomainResponseData
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
     * @var DomainCheckDomainResult[]
     */
    protected $results;
    /**
     * 
     *
     * @return DomainCheckDomainResult[]
     */
    public function getResults() : array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param DomainCheckDomainResult[] $results
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