<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainNameserver
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
    protected $ip;
    /**
     * 
     *
     * @var string
     */
    protected $ip6;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $seqNr;
    /**
     * 
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIp6() : string
    {
        return $this->ip6;
    }
    /**
     * 
     *
     * @param string $ip6
     *
     * @return self
     */
    public function setIp6(string $ip6) : self
    {
        $this->initialized['ip6'] = true;
        $this->ip6 = $ip6;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getSeqNr() : int
    {
        return $this->seqNr;
    }
    /**
     * 
     *
     * @param int $seqNr
     *
     * @return self
     */
    public function setSeqNr(int $seqNr) : self
    {
        $this->initialized['seqNr'] = true;
        $this->seqNr = $seqNr;
        return $this;
    }
}