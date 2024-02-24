<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $hostName;
    /**
     * 
     *
     * @var string
     */
    protected $method;
    /**
     * 
     *
     * @return string
     */
    public function getHostName() : string
    {
        return $this->hostName;
    }
    /**
     * 
     *
     * @param string $hostName
     *
     * @return self
     */
    public function setHostName(string $hostName) : self
    {
        $this->initialized['hostName'] = true;
        $this->hostName = $hostName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * 
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}