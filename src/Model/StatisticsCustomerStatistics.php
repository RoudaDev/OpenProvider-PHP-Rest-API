<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $modified;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return string
     */
    public function getModified() : string
    {
        return $this->modified;
    }
    /**
     * 
     *
     * @param string $modified
     *
     * @return self
     */
    public function setModified(string $modified) : self
    {
        $this->initialized['modified'] = true;
        $this->modified = $modified;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param int $total
     *
     * @return self
     */
    public function setTotal(int $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
}