<?php

namespace Rouda\OpenProvider\Api\Model;

class StatisticsCustomerStatistics
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
     * @var int|null
     */
    protected $total;
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
    /**
     * 
     *
     * @return int|null
     */
    public function getTotal() : ?int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int|null $total
     *
     * @return self
     */
    public function setTotal(?int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}