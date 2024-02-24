<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $hostname;
    /**
     * 
     *
     * @var int
     */
    protected $port;
    /**
     * 
     *
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }
    /**
     * 
     *
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname(string $hostname) : self
    {
        $this->initialized['hostname'] = true;
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPort() : int
    {
        return $this->port;
    }
    /**
     * 
     *
     * @param int $port
     *
     * @return self
     */
    public function setPort(int $port) : self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
}