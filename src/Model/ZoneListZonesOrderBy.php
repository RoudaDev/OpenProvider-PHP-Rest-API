<?php

namespace Rouda\OpenProviderAPI\Model;

class ZoneListZonesOrderBy
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
    protected $creationDate = 'desc';
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
}