<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var bool|null
     */
    protected $enableDnsAutomation = false;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @return bool|null
     */
    public function getEnableDnsAutomation() : ?bool
    {
        return $this->enableDnsAutomation;
    }
    /**
     * 
     *
     * @param bool|null $enableDnsAutomation
     *
     * @return self
     */
    public function setEnableDnsAutomation(?bool $enableDnsAutomation) : self
    {
        $this->initialized['enableDnsAutomation'] = true;
        $this->enableDnsAutomation = $enableDnsAutomation;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}