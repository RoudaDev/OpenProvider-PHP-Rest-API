<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $ip;
    /**
     * 
     *
     * @var string|null
     */
    protected $ip6;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var int|null
     */
    protected $seqNr;
    /**
     * 
     *
     * @return string|null
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string|null $ip
     *
     * @return self
     */
    public function setIp(?string $ip) : self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIp6() : ?string
    {
        return $this->ip6;
    }
    /**
     * 
     *
     * @param string|null $ip6
     *
     * @return self
     */
    public function setIp6(?string $ip6) : self
    {
        $this->initialized['ip6'] = true;
        $this->ip6 = $ip6;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getSeqNr() : ?int
    {
        return $this->seqNr;
    }
    /**
     * 
     *
     * @param int|null $seqNr
     *
     * @return self
     */
    public function setSeqNr(?int $seqNr) : self
    {
        $this->initialized['seqNr'] = true;
        $this->seqNr = $seqNr;
        return $this;
    }
}