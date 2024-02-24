<?php

namespace Rouda\OpenProviderAPI\Model;

class NsGroupListGroupsOrderBy
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
    protected $domainCount;
    /**
     * 
     *
     * @var string
     */
    protected $nsCount;
    /**
     * 
     *
     * @var string
     */
    protected $nsGroup = 'asc';
    /**
     * 
     *
     * @return string
     */
    public function getDomainCount() : string
    {
        return $this->domainCount;
    }
    /**
     * 
     *
     * @param string $domainCount
     *
     * @return self
     */
    public function setDomainCount(string $domainCount) : self
    {
        $this->initialized['domainCount'] = true;
        $this->domainCount = $domainCount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNsCount() : string
    {
        return $this->nsCount;
    }
    /**
     * 
     *
     * @param string $nsCount
     *
     * @return self
     */
    public function setNsCount(string $nsCount) : self
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