<?php

namespace Rouda\OpenProvider\Api\Model;

class SeDomainDestination
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
    protected $hostname;
    /**
     * 
     *
     * @var int|null
     */
    protected $port;
    /**
     * 
     *
     * @return string|null
     */
    public function getHostname() : ?string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string|null $hostname
     *
     * @return self
     */
    public function setHostname(?string $hostname) : self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPort() : ?int
    {
        return $this->port;
    }
    /**
     * 
     *
     * @param int|null $port
     *
     * @return self
     */
    public function setPort(?int $port) : self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
}