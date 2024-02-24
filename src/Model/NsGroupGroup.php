<?php

namespace Rouda\OpenProviderAPI\Model;

class NsGroupGroup
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
     * @var int
     */
    protected $domainCount;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var NsGroupNameServersSet[]
     */
    protected $nameServers;
    /**
     * 
     *
     * @var int
     */
    protected $nsCount;
    /**
     * 
     *
     * @var string
     */
    protected $nsGroup;
    /**
     * 
     *
     * @return int
     */
    public function getDomainCount() : int
    {
        return $this->domainCount;
    }
    /**
     * 
     *
     * @param int $domainCount
     *
     * @return self
     */
    public function setDomainCount(int $domainCount) : self
    {
        $this->initialized['domainCount'] = true;
        $this->domainCount = $domainCount;
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
     * 
     *
     * @return int
     */
    public function getNsCount() : int
    {
        return $this->nsCount;
    }
    /**
     * 
     *
     * @param int $nsCount
     *
     * @return self
     */
    public function setNsCount(int $nsCount) : self
    {
        $this->initialized['nsCount'] = true;
        $this->nsCount = $nsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNsGroup() : string
    {
        return $this->nsGroup;
    }
    /**
     * 
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