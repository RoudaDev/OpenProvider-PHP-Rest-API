<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var ZoneRecord
     */
    protected $originalRecord;
    /**
     * 
     *
     * @var ZoneRecord
     */
    protected $record;
    /**
     * 
     *
     * @return ZoneRecord
     */
    public function getOriginalRecord() : ZoneRecord
    {
        return $this->originalRecord;
    }
    /**
     * 
     *
     * @param ZoneRecord $originalRecord
     *
     * @return self
     */
    public function setOriginalRecord(ZoneRecord $originalRecord) : self
    {
        $this->initialized['originalRecord'] = true;
        $this->originalRecord = $originalRecord;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecord
     */
    public function getRecord() : ZoneRecord
    {
        return $this->record;
    }
    /**
     * 
     *
     * @param ZoneRecord $record
     *
     * @return self
     */
    public function setRecord(ZoneRecord $record) : self
    {
        $this->initialized['record'] = true;
        $this->record = $record;
        return $this;
    }
}