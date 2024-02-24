<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var int
     */
    protected $bits;
    /**
     * 
     *
     * @var string
     */
    protected $key;
    /**
     * 
     *
     * @return int
     */
    public function getBits() : int
    {
        return $this->bits;
    }
    /**
     * 
     *
     * @param int $bits
     *
     * @return self
     */
    public function setBits(int $bits) : self
    {
        $this->initialized['bits'] = true;
        $this->bits = $bits;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }
    /**
     * 
     *
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key) : self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
}