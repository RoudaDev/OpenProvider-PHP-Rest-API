<?php

namespace Rouda\OpenProvider\Api\Model;

class OrderSslOrderDomainValidationMethods
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
    protected $hostName;
    /**
     * 
     *
     * @var string|null
     */
    protected $method;
    /**
     * 
     *
     * @return string|null
     */
    public function getHostName() : ?string
    {
        return $this->hostName;
    }
    /**
     * 
     *
     * @param string|null $hostName
     *
     * @return self
     */
    public function setHostName(?string $hostName) : self
    {
        $this->initialized['hostName'] = true;
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * 
     *
     * @param string|null $method
     *
     * @return self
     */
    public function setMethod(?string $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}