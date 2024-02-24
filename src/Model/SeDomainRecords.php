<?php

namespace Rouda\OpenProviderAPI\Model;

class SeDomainRecords
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
     * @var string[]
     */
    protected $aliases;
    /**
     * 
     *
     * @var SeDomainDestination[]
     */
    protected $destinations;
    /**
     * 
     *
     * @var string[]
     */
    protected $outgoingUserIps;
    /**
     * 
     *
     * @return string[]
     */
    public function getAliases() : array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[] $aliases
     *
     * @return self
     */
    public function setAliases(array $aliases) : self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * 
     *
     * @return SeDomainDestination[]
     */
    public function getDestinations() : array
    {
        return $this->destinations;
    }
    /**
     * 
     *
     * @param SeDomainDestination[] $destinations
     *
     * @return self
     */
    public function setDestinations(array $destinations) : self
    {
        $this->initialized['destinations'] = true;
        $this->destinations = $destinations;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getOutgoingUserIps() : array
    {
        return $this->outgoingUserIps;
    }
    /**
     * 
     *
     * @param string[] $outgoingUserIps
     *
     * @return self
     */
    public function setOutgoingUserIps(array $outgoingUserIps) : self
    {
        $this->initialized['outgoingUserIps'] = true;
        $this->outgoingUserIps = $outgoingUserIps;
        return $this;
    }
}