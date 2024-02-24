<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainOperationPrice
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
     * @var float
     */
    protected $create;
    /**
     * 
     *
     * @return float
     */
    public function getCreate() : float
    {
        return $this->create;
    }
    /**
     * 
     *
     * @param float $create
     *
     * @return self
     */
    public function setCreate(float $create) : self
    {
        $this->initialized['create'] = true;
        $this->create = $create;
        return $this;
    }
}