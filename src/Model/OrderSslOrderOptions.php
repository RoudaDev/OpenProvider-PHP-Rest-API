<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderSslOrderOptions
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
    protected $features;
    /**
     * 
     *
     * @return string
     */
    public function getFeatures() : string
    {
        return $this->features;
    }
    /**
     * 
     *
     * @param string $features
     *
     * @return self
     */
    public function setFeatures(string $features) : self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
}