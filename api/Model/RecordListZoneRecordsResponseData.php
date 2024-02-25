<?php

namespace Rouda\OpenProvider\Api\Model;

class RecordListZoneRecordsResponseData
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
     * @var RecordRecordInfo[]|null
     */
    protected $results;
    /**
     * 
     *
     * @var int|null
     */
    protected $total;
    /**
     * 
     *
     * @return RecordRecordInfo[]|null
     */
    public function getResults() : ?array
    {
        return $this->results;
    }
    /**
     * 
     *
     * @param RecordRecordInfo[]|null $results
     *
     * @return self
     */
    public function setResults(?array $results) : self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
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