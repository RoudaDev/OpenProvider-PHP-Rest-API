<?php

namespace Rouda\OpenProviderAPI\Model;

class SeDomainAliasUpdates
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
     * @var string[]
     */
    protected $add;
    /**
     * 
     *
     * @var string[]
     */
    protected $remove;
    /**
     * 
     *
     * @return string[]
     */
    public function getAdd() : array
    {
        return $this->add;
    }
    /**
     * 
     *
     * @param string[] $add
     *
     * @return self
     */
    public function setAdd(array $add) : self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRemove() : array
    {
        return $this->remove;
    }
    /**
     * 
     *
     * @param string[] $remove
     *
     * @return self
     */
    public function setRemove(array $remove) : self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}