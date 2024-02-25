<?php

namespace Rouda\OpenProvider\Api\Model;

class StatisticsCurrencyStatistics
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
    protected $modified;
    /**
     * 
     *
     * @return string|null
     */
    public function getModified() : ?string
    {
        return $this->modified;
    }
    /**
     * 
     *
     * @param string|null $modified
     *
     * @return self
     */
    public function setModified(?string $modified) : self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;
        return $this;
    }
}