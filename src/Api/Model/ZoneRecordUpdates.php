<?php

namespace Rouda\OpenProvider\Api\Model;

class ZoneRecordUpdates
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
     * @var ZoneRecord[]|null
     */
    protected $add;
    /**
     * 
     *
     * @var ZoneRecord[]|null
     */
    protected $remove;
    /**
     * 
     *
     * @var ZoneRecord[]|null
     */
    protected $replace;
    /**
     * 
     *
     * @var ZoneRecordWithOriginal[]|null
     */
    protected $update;
    /**
     * 
     *
     * @return ZoneRecord[]|null
     */
    public function getAdd() : ?array
    {
        return $this->add;
    }
    /**
     * 
     *
     * @param ZoneRecord[]|null $add
     *
     * @return self
     */
    public function setAdd(?array $add) : self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecord[]|null
     */
    public function getRemove() : ?array
    {
        return $this->remove;
    }
    /**
     * 
     *
     * @param ZoneRecord[]|null $remove
     *
     * @return self
     */
    public function setRemove(?array $remove) : self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecord[]|null
     */
    public function getReplace() : ?array
    {
        return $this->replace;
    }
    /**
     * 
     *
     * @param ZoneRecord[]|null $replace
     *
     * @return self
     */
    public function setReplace(?array $replace) : self
    {
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecordWithOriginal[]|null
     */
    public function getUpdate() : ?array
    {
        return $this->update;
    }
    /**
     * 
     *
     * @param ZoneRecordWithOriginal[]|null $update
     *
     * @return self
     */
    public function setUpdate(?array $update) : self
    {
        $this->initialized['update'] = true;
        $this->update = $update;
        return $this;
    }
}