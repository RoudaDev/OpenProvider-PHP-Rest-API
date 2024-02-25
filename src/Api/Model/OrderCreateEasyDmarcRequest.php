<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var OrderDomain|null
     */
    protected $domain;
    /**
     * 
     *
     * @var string|null
     */
    protected $ownerHandle;
    /**
     * 
     *
     * @return OrderDomain|null
     */
    public function getDomain() : ?OrderDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param OrderDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?OrderDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOwnerHandle() : ?string
    {
        return $this->ownerHandle;
    }
    /**
     * 
     *
     * @param string|null $ownerHandle
     *
     * @return self
     */
    public function setOwnerHandle(?string $ownerHandle) : self
    {
        $this->initialized['ownerHandle'] = true;
        $this->ownerHandle = $ownerHandle;
        return $this;
    }
}