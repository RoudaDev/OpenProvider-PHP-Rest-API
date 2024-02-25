<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $domainCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $nsCount;
    /**
     * 
     *
     * @var string|null
     */
    protected $nsGroup = 'asc';
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainCount() : ?string
    {
        return $this->domainCount;
    }
    /**
     * 
     *
     * @param string|null $domainCount
     *
     * @return self
     */
    public function setDomainCount(?string $domainCount) : self
    {
        $this->initialized['domainCount'] = true;
        $this->domainCount = $domainCount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNsCount() : ?string
    {
        return $this->nsCount;
    }
    /**
     * 
     *
     * @param string|null $nsCount
     *
     * @return self
     */
    public function setNsCount(?string $nsCount) : self
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