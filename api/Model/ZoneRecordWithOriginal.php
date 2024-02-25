<?php

namespace Rouda\OpenProvider\Api\Model;

class ZoneRecordWithOriginal
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
     * @var ZoneRecord|null
     */
    protected $originalRecord;
    /**
     * 
     *
     * @var ZoneRecord|null
     */
    protected $record;
    /**
     * 
     *
     * @return ZoneRecord|null
     */
    public function getOriginalRecord() : ?ZoneRecord
    {
        return $this->originalRecord;
    }
    /**
     * 
     *
     * @param ZoneRecord|null $originalRecord
     *
     * @return self
     */
    public function setOriginalRecord(?ZoneRecord $originalRecord) : self
    {
        $this->initialized['originalRecord'] = true;
        $this->originalRecord = $originalRecord;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecord|null
     */
    public function getRecord() : ?ZoneRecord
    {
        return $this->record;
    }
    /**
     * 
     *
     * @param ZoneRecord|null $record
     *
     * @return self
     */
    public function setRecord(?ZoneRecord $record) : self
    {
        $this->initialized['record'] = true;
        $this->record = $record;
        return $this;
    }
}