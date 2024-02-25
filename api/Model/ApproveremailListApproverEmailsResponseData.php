<?php

namespace Rouda\OpenProvider\Api\Model;

class ApproveremailListApproverEmailsResponseData
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
     * @var string[]|null
     */
    protected $results;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getResults() : ?array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param string[]|null $results
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