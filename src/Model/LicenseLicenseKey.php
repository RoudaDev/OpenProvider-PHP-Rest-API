<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseLicenseKey
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
    protected $key;
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