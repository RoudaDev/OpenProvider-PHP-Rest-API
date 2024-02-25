<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string[]|null
     */
    protected $aliases;
    /**
     * 
     *
     * @var SeDomainDestination[]|null
     */
    protected $destinations;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $outgoingUserIps;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAliases() : ?array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[]|null $aliases
     *
     * @return self
     */
    public function setAliases(?array $aliases) : self
    {
        $this->initialized['aliases'] = true;
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * 
     *
     * @return SeDomainDestination[]|null
     */
    public function getDestinations() : ?array
    {
        return $this->destinations;
    }
    /**
     * 
     *
     * @param SeDomainDestination[]|null $destinations
     *
     * @return self
     */
    public function setDestinations(?array $destinations) : self
    {
        $this->initialized['destinations'] = true;
        $this->destinations = $destinations;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getOutgoingUserIps() : ?array
    {
        return $this->outgoingUserIps;
    }
    /**
     * 
     *
     * @param string[]|null $outgoingUserIps
     *
     * @return self
     */
    public function setOutgoingUserIps(?array $outgoingUserIps) : self
    {
        $this->initialized['outgoingUserIps'] = true;
        $this->outgoingUserIps = $outgoingUserIps;
        return $this;
    }
}