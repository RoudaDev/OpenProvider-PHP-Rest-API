<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var StatisticsDomainStatisticsByStatus|null
     */
    protected $byStatus;
    /**
     * 
     *
     * @var int|null
     */
    protected $total;
    /**
     * 
     *
     * @return StatisticsDomainStatisticsByStatus|null
     */
    public function getByStatus() : ?StatisticsDomainStatisticsByStatus
    {
        return $this->byStatus;
    }
    /**
     * 
     *
     * @param StatisticsDomainStatisticsByStatus|null $byStatus
     *
     * @return self
     */
    public function setByStatus(?StatisticsDomainStatisticsByStatus $byStatus) : self
    {
        $this->initialized['byStatus'] = true;
        $this->byStatus = $byStatus;
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