<?php

namespace Rouda\OpenProviderAPI\Model;

class StatisticsSslStatistics
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
     * @var StatisticsSslStatisticsByStatus
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
     * @return StatisticsSslStatisticsByStatus
     */
    public function getByStatus() : StatisticsSslStatisticsByStatus
    {
        return $this->byStatus;
    }
    /**
     * 
     *
     * @param StatisticsSslStatisticsByStatus $byStatus
     *
     * @return self
     */
    public function setByStatus(StatisticsSslStatisticsByStatus $byStatus) : self
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