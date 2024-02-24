<?php

namespace Rouda\OpenProviderAPI\Model;

class StatisticsDnsStatistics
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
     * @var int
     */
    protected $total;
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