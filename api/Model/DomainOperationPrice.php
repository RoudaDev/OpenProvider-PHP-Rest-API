<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var float|null
     */
    protected $create;
    /**
     * 
     *
     * @return float|null
     */
    public function getCreate() : ?float
    {
        return $this->create;
    }
    /**
     * 
     *
     * @param float|null $create
     *
     * @return self
     */
    public function setCreate(?float $create) : self
    {
        $this->initialized['create'] = true;
        $this->create = $create;
        return $this;
    }
}