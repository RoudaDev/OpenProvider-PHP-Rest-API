<?php

namespace Rouda\OpenProviderAPI\Model;

class RecordListZoneRecordsOrderBy
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
     * @var string
     */
    protected $name = 'asc';
    /**
     * 
     *
     * @var string
     */
    protected $prio;
    /**
     * 
     *
     * @var string
     */
    protected $ttl;
    /**
     * 
     *
     * @var string
     */
    protected $type = 'asc';
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPrio() : string
    {
        return $this->prio;
    }
    /**
     * 
     *
     * @param string $prio
     *
     * @return self
     */
    public function setPrio(string $prio) : self
    {
        $this->initialized['prio'] = true;
        $this->prio = $prio;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTtl() : string
    {
        return $this->ttl;
    }
    /**
     * 
     *
     * @param string $ttl
     *
     * @return self
     */
    public function setTtl(string $ttl) : self
    {
        $this->initialized['ttl'] = true;
        $this->ttl = $ttl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value) : self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}