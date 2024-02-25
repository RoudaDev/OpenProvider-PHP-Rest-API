<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var StatisticsSslStatisticsByStatus|null
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
     * @return StatisticsSslStatisticsByStatus|null
     */
    public function getByStatus() : ?StatisticsSslStatisticsByStatus
    {
        return $this->byStatus;
    }
    /**
     * 
     *
     * @param StatisticsSslStatisticsByStatus|null $byStatus
     *
     * @return self
     */
    public function setByStatus(?StatisticsSslStatisticsByStatus $byStatus) : self
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