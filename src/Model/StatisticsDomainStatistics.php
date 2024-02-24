<?php

namespace Rouda\OpenProviderAPI\Model;

class StatisticsDomainStatistics
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
     * @var StatisticsDomainStatisticsByStatus
     */
    protected $byStatus;
    /**
     * 
     *
     * @var int
     */
    protected $total;
    /**
     * 
     *
     * @return StatisticsDomainStatisticsByStatus
     */
    public function getByStatus() : StatisticsDomainStatisticsByStatus
    {
        return $this->byStatus;
    }
    /**
     * 
     *
     * @param StatisticsDomainStatisticsByStatus $byStatus
     *
     * @return self
     */
    public function setByStatus(StatisticsDomainStatisticsByStatus $byStatus) : self
    {
        $this->initialized['byStatus'] = true;
        $this->byStatus = $byStatus;
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