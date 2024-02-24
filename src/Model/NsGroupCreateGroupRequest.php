<?php

namespace Rouda\OpenProviderAPI\Model;

class NsGroupCreateGroupRequest
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
     * @var NsGroupNameServersSet[]
     */
    protected $nameServers;
    /**
     * Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     *
     * @var string
     */
    protected $nsGroup;
    /**
     * 
     *
     * @return NsGroupNameServersSet[]
     */
    public function getNameServers() : array
    {
        return $this->nameServers;
    }
    /**
     * 
     *
     * @param NsGroupNameServersSet[] $nameServers
     *
     * @return self
     */
    public function setNameServers(array $nameServers) : self
    {
        $this->initialized['nameServers'] = true;
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     *
     * @return string
     */
    public function getNsGroup() : string
    {
        return $this->nsGroup;
    }
    /**
     * Plain text name of the nameserver group, which can consist of several nameservers with attached IPs. Once created in Openprovider reseller account, nameserver group can be reused for operations with domains.
     *
     * @param string $nsGroup
     *
     * @return self
     */
    public function setNsGroup(string $nsGroup) : self
    {
        $this->initialized['nsGroup'] = true;
        $this->nsGroup = $nsGroup;
        return $this;
    }
}