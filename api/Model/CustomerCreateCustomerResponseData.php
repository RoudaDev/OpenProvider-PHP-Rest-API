<?php

namespace Rouda\OpenProvider\Api\Model;

class CustomerCreateCustomerResponseData
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
    protected $handle;
    /**
     * 
     *
     * @return string|null
     */
    public function getHandle() : ?string
    {
        return $this->handle;
    }
    /**
     * 
     *
     * @param string|null $handle
     *
     * @return self
     */
    public function setHandle(?string $handle) : self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;
        return $this;
    }
}