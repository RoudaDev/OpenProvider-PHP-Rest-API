<?php

namespace Rouda\OpenProviderAPI\Model;

class RecordRecordInfo
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
    protected $creationDate;
    /**
     * 
     *
     * @var string
     */
    protected $ip;
    /**
     * 
     *
     * @var string
     */
    protected $modificationDate;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $prio;
    /**
     * 
     *
     * @var int
     */
    protected $ttl;
    /**
     * 
     *
     * @var string
     */
    protected $type;
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
    public function getCreationDate() : string
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate(string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIp() : string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip) : self
    {
        $this->initialized['ip'] = true;
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getModificationDate() : string
    {
        return $this->modificationDate;
    }
    /**
     * 
     *
     * @param string $modificationDate
     *
     * @return self
     */
    public function setModificationDate(string $modificationDate) : self
    {
        $this->initialized['modificationDate'] = true;
        $this->modificationDate = $modificationDate;
        return $this;
    }
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
     * @return int
     */
    public function getPrio() : int
    {
        return $this->prio;
    }
    /**
     * 
     *
     * @param int $prio
     *
     * @return self
     */
    public function setPrio(int $prio) : self
    {
        $this->initialized['prio'] = true;
        $this->prio = $prio;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTtl() : int
    {
        return $this->ttl;
    }
    /**
     * 
     *
     * @param int $ttl
     *
     * @return self
     */
    public function setTtl(int $ttl) : self
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