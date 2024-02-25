<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var DomainRegistryStatus|null
     */
    protected $clientHold;
    /**
     * 
     *
     * @var DomainRegistryStatus|null
     */
    protected $clientTransferProhibited;
    /**
     * 
     *
     * @return DomainRegistryStatus|null
     */
    public function getClientHold() : ?DomainRegistryStatus
    {
        return $this->clientHold;
    }
    /**
     * 
     *
     * @param DomainRegistryStatus|null $clientHold
     *
     * @return self
     */
    public function setClientHold(?DomainRegistryStatus $clientHold) : self
    {
        $this->initialized['clientHold'] = true;
        $this->clientHold = $clientHold;
        return $this;
    }
    /**
     * 
     *
     * @return DomainRegistryStatus|null
     */
    public function getClientTransferProhibited() : ?DomainRegistryStatus
    {
        return $this->clientTransferProhibited;
    }
    /**
     * 
     *
     * @param DomainRegistryStatus|null $clientTransferProhibited
     *
     * @return self
     */
    public function setClientTransferProhibited(?DomainRegistryStatus $clientTransferProhibited) : self
    {
        $this->initialized['clientTransferProhibited'] = true;
        $this->clientTransferProhibited = $clientTransferProhibited;
        return $this;
    }
}