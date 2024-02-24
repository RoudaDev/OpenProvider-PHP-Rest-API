<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainRegistryStatuses
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
     * @var DomainRegistryStatus
     */
    protected $clientHold;
    /**
     * 
     *
     * @var DomainRegistryStatus
     */
    protected $clientTransferProhibited;
    /**
     * 
     *
     * @return DomainRegistryStatus
     */
    public function getClientHold() : DomainRegistryStatus
    {
        return $this->clientHold;
    }
    /**
     * 
     *
     * @param DomainRegistryStatus $clientHold
     *
     * @return self
     */
    public function setClientHold(DomainRegistryStatus $clientHold) : self
    {
        $this->initialized['clientHold'] = true;
        $this->clientHold = $clientHold;
        return $this;
    }
    /**
     * 
     *
     * @return DomainRegistryStatus
     */
    public function getClientTransferProhibited() : DomainRegistryStatus
    {
        return $this->clientTransferProhibited;
    }
    /**
     * 
     *
     * @param DomainRegistryStatus $clientTransferProhibited
     *
     * @return self
     */
    public function setClientTransferProhibited(DomainRegistryStatus $clientTransferProhibited) : self
    {
        $this->initialized['clientTransferProhibited'] = true;
        $this->clientTransferProhibited = $clientTransferProhibited;
        return $this;
    }
}