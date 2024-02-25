<?php

namespace Rouda\OpenProvider\Api\Model;

class CsrCsrPublicKey
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
    protected $bits;
    /**
     * 
     *
     * @var string|null
     */
    protected $key;
    /**
     * 
     *
     * @return int|null
     */
    public function getBits() : ?int
    {
        return $this->bits;
    }
    /**
     * 
     *
     * @param int|null $bits
     *
     * @return self
     */
    public function setBits(?int $bits) : self
    {
        $this->initialized['bits'] = true;
        $this->bits = $bits;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKey() : ?string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string|null $key
     *
     * @return self
     */
    public function setKey(?string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}