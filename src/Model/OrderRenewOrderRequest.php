<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderRenewOrderRequest
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
     * @var bool
     */
    protected $enableDnsAutomation = false;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @return bool
     */
    public function getEnableDnsAutomation() : bool
    {
        return $this->enableDnsAutomation;
    }
    /**
     * 
     *
     * @param bool $enableDnsAutomation
     *
     * @return self
     */
    public function setEnableDnsAutomation(bool $enableDnsAutomation) : self
    {
        $this->initialized['enableDnsAutomation'] = true;
        $this->enableDnsAutomation = $enableDnsAutomation;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}