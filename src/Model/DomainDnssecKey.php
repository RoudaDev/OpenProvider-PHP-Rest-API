<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainDnssecKey
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
     * @var int
     */
    protected $alg;
    /**
     * 
     *
     * @var int
     */
    protected $flags;
    /**
     * 
     *
     * @var int
     */
    protected $protocol;
    /**
     * 
     *
     * @var string
     */
    protected $pubKey;
    /**
     * 
     *
     * @var int
     */
    protected $readonly;
    /**
     * 
     *
     * @return int
     */
    public function getAlg() : int
    {
        return $this->alg;
    }
    /**
     * 
     *
     * @param int $alg
     *
     * @return self
     */
    public function setAlg(int $alg) : self
    {
        $this->initialized['alg'] = true;
        $this->alg = $alg;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getFlags() : int
    {
        return $this->flags;
    }
    /**
     * 
     *
     * @param int $flags
     *
     * @return self
     */
    public function setFlags(int $flags) : self
    {
        $this->initialized['flags'] = true;
        $this->flags = $flags;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProtocol() : int
    {
        return $this->protocol;
    }
    /**
     * 
     *
     * @param int $protocol
     *
     * @return self
     */
    public function setProtocol(int $protocol) : self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPubKey() : string
    {
        return $this->pubKey;
    }
    /**
     * 
     *
     * @param string $pubKey
     *
     * @return self
     */
    public function setPubKey(string $pubKey) : self
    {
        $this->initialized['pubKey'] = true;
        $this->pubKey = $pubKey;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReadonly() : int
    {
        return $this->readonly;
    }
    /**
     * 
     *
     * @param int $readonly
     *
     * @return self
     */
    public function setReadonly(int $readonly) : self
    {
        $this->initialized['readonly'] = true;
        $this->readonly = $readonly;
        return $this;
    }
}