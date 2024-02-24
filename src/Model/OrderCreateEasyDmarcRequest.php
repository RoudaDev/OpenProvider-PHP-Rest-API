<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderCreateEasyDmarcRequest
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
     * @var OrderDomain
     */
    protected $domain;
    /**
     * 
     *
     * @var string
     */
    protected $ownerHandle;
    /**
     * 
     *
     * @return OrderDomain
     */
    public function getDomain() : OrderDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param OrderDomain $domain
     *
     * @return self
     */
    public function setDomain(OrderDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOwnerHandle() : string
    {
        return $this->ownerHandle;
    }
    /**
     * 
     *
     * @param string $ownerHandle
     *
     * @return self
     */
    public function setOwnerHandle(string $ownerHandle) : self
    {
        $this->initialized['ownerHandle'] = true;
        $this->ownerHandle = $ownerHandle;
        return $this;
    }
}