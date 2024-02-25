<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string[]|null
     */
    protected $add;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $remove;
    /**
     * 
     *
     * @return string[]|null
     */
    public function getAdd() : ?array
    {
        return $this->add;
    }
    /**
     * 
     *
     * @param string[]|null $add
     *
     * @return self
     */
    public function setAdd(?array $add) : self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRemove() : ?array
    {
        return $this->remove;
    }
    /**
     * 
     *
     * @param string[]|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove) : self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
}