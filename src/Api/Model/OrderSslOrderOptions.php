<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $features;
    /**
     * 
     *
     * @return string|null
     */
    public function getFeatures() : ?string
    {
        return $this->features;
    }
    /**
     * 
     *
     * @param string|null $features
     *
     * @return self
     */
    public function setFeatures(?string $features) : self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
}