<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainRegistryStatus
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
     * @var bool
     */
    protected $isChangeable;
    /**
     * 
     *
     * @var int
     */
    protected $value;
    /**
     * 
     *
     * @return bool
     */
    public function getIsChangeable() : bool
    {
        return $this->isChangeable;
    }
    /**
     * 
     *
     * @param bool $isChangeable
     *
     * @return self
     */
    public function setIsChangeable(bool $isChangeable) : self
    {
        $this->initialized['isChangeable'] = true;
        $this->isChangeable = $isChangeable;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getValue() : int
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}