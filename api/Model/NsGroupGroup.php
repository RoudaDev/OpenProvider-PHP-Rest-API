<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var int|null
     */
    protected $domainCount;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var NsGroupNameServersSet[]|null
     */
    protected $nameServers;
    /**
     * 
     *
     * @var int|null
     */
    protected $nsCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $nsGroup;
    /**
     * 
     *
     * @return int|null
     */
    public function getDomainCount() : ?int
    {
        return $this->domainCount;
    }
    /**
     * 
     *
     * @param int|null $domainCount
     *
     * @return self
     */
    public function setDomainCount(?int $domainCount) : self
    {
        $this->initialized['domainCount'] = true;
        $this->domainCount = $domainCount;
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
    /**
     * 
     *
     * @return NsGroupNameServersSet[]|null
     */
    public function getNameServers() : ?array
    {
        return $this->nameServers;
    }
    /**
     * 
     *
     * @param NsGroupNameServersSet[]|null $nameServers
     *
     * @return self
     */
    public function setNameServers(?array $nameServers) : self
    {
        $this->initialized['nameServers'] = true;
        $this->nameServers = $nameServers;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getNsCount() : ?int
    {
        return $this->nsCount;
    }
    /**
     * 
     *
     * @param int|null $nsCount
     *
     * @return self
     */
    public function setNsCount(?int $nsCount) : self
    {
        $this->initialized['nsCount'] = true;
        $this->nsCount = $nsCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNsGroup() : ?string
    {
        return $this->nsGroup;
    }
    /**
     * 
     *
     * @param string|null $nsGroup
     *
     * @return self
     */
    public function setNsGroup(?string $nsGroup) : self
    {
        $this->initialized['nsGroup'] = true;
        $this->nsGroup = $nsGroup;
        return $this;
    }
}