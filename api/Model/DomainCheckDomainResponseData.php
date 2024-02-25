<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var DomainCheckDomainResult[]|null
     */
    protected $results;
    /**
     * 
     *
     * @return DomainCheckDomainResult[]|null
     */
    public function getResults() : ?array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param DomainCheckDomainResult[]|null $results
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