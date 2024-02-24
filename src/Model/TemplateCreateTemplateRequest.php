<?php

namespace Rouda\OpenProviderAPI\Model;

class TemplateCreateTemplateRequest
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
     * @var bool
     */
    protected $isSpamexpertsEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var TemplateRecord[]
     */
    protected $records;
    /**
     * 
     *
     * @return bool
     */
    public function getIsSpamexpertsEnabled() : bool
    {
        return $this->isSpamexpertsEnabled;
    }
    /**
     * 
     *
     * @param bool $isSpamexpertsEnabled
     *
     * @return self
     */
    public function setIsSpamexpertsEnabled(bool $isSpamexpertsEnabled) : self
    {
        $this->initialized['isSpamexpertsEnabled'] = true;
        $this->isSpamexpertsEnabled = $isSpamexpertsEnabled;
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
     * @return TemplateRecord[]
     */
    public function getRecords() : array
    {
        return $this->records;
    }
    /**
     * 
     *
     * @param TemplateRecord[] $records
     *
     * @return self
     */
    public function setRecords(array $records) : self
    {
        $this->initialized['records'] = true;
        $this->records = $records;
        return $this;
    }
}