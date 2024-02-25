<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var bool|null
     */
    protected $isChangeable;
    /**
     * 
     *
     * @var int|null
     */
    protected $value;
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsChangeable() : ?bool
    {
        return $this->isChangeable;
    }
    /**
     * 
     *
     * @param bool|null $isChangeable
     *
     * @return self
     */
    public function setIsChangeable(?bool $isChangeable) : self
    {
        $this->initialized['isChangeable'] = true;
        $this->isChangeable = $isChangeable;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getValue() : ?int
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param int|null $value
     *
     * @return self
     */
    public function setValue(?int $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}