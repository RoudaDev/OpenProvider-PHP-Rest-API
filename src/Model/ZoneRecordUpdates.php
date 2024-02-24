<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var ZoneRecord[]
     */
    protected $add;
    /**
     * 
     *
     * @var ZoneRecord[]
     */
    protected $remove;
    /**
     * 
     *
     * @var ZoneRecord[]
     */
    protected $replace;
    /**
     * 
     *
     * @var ZoneRecordWithOriginal[]
     */
    protected $update;
    /**
     * 
     *
     * @return ZoneRecord[]
     */
    public function getAdd() : array
    {
        return $this->add;
    }
    /**
     * 
     *
     * @param ZoneRecord[] $add
     *
     * @return self
     */
    public function setAdd(array $add) : self
    {
        $this->initialized['add'] = true;
        $this->add = $add;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecord[]
     */
    public function getRemove() : array
    {
        return $this->remove;
    }
    /**
     * 
     *
     * @param ZoneRecord[] $remove
     *
     * @return self
     */
    public function setRemove(array $remove) : self
    {
        $this->initialized['remove'] = true;
        $this->remove = $remove;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecord[]
     */
    public function getReplace() : array
    {
        return $this->replace;
    }
    /**
     * 
     *
     * @param ZoneRecord[] $replace
     *
     * @return self
     */
    public function setReplace(array $replace) : self
    {
        $this->initialized['replace'] = true;
        $this->replace = $replace;
        return $this;
    }
    /**
     * 
     *
     * @return ZoneRecordWithOriginal[]
     */
    public function getUpdate() : array
    {
        return $this->update;
    }
    /**
     * 
     *
     * @param ZoneRecordWithOriginal[] $update
     *
     * @return self
     */
    public function setUpdate(array $update) : self
    {
        $this->initialized['update'] = true;
        $this->update = $update;
        return $this;
    }
}