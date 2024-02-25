<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var int|null
     */
    protected $alg;
    /**
     * 
     *
     * @var int|null
     */
    protected $flags;
    /**
     * 
     *
     * @var int|null
     */
    protected $protocol;
    /**
     * 
     *
     * @var string|null
     */
    protected $pubKey;
    /**
     * 
     *
     * @var int|null
     */
    protected $readonly;
    /**
     * 
     *
     * @return int|null
     */
    public function getAlg() : ?int
    {
        return $this->alg;
    }
    /**
     * 
     *
     * @param int|null $alg
     *
     * @return self
     */
    public function setAlg(?int $alg) : self
    {
        $this->initialized['alg'] = true;
        $this->alg = $alg;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getFlags() : ?int
    {
        return $this->flags;
    }
    /**
     * 
     *
     * @param int|null $flags
     *
     * @return self
     */
    public function setFlags(?int $flags) : self
    {
        $this->initialized['flags'] = true;
        $this->flags = $flags;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProtocol() : ?int
    {
        return $this->protocol;
    }
    /**
     * 
     *
     * @param int|null $protocol
     *
     * @return self
     */
    public function setProtocol(?int $protocol) : self
    {
        $this->initialized['protocol'] = true;
        $this->protocol = $protocol;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPubKey() : ?string
    {
        return $this->pubKey;
    }
    /**
     * 
     *
     * @param string|null $pubKey
     *
     * @return self
     */
    public function setPubKey(?string $pubKey) : self
    {
        $this->initialized['pubKey'] = true;
        $this->pubKey = $pubKey;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReadonly() : ?int
    {
        return $this->readonly;
    }
    /**
     * 
     *
     * @param int|null $readonly
     *
     * @return self
     */
    public function setReadonly(?int $readonly) : self
    {
        $this->initialized['readonly'] = true;
        $this->readonly = $readonly;
        return $this;
    }
}