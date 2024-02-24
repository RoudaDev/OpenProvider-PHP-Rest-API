<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainGetDomainResponse
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
     * @var int
     */
    protected $code;
    /**
     * 
     *
     * @var DomainGetDomainResponseData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $desc;
    /**
     * 
     *
     * @var bool
     */
    protected $maintenance;
    /**
     * 
     *
     * @var ErrorWarning[]
     */
    protected $warnings;
    /**
     * 
     *
     * @return int
     */
    public function getCode() : int
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int $code
     *
     * @return self
     */
    public function setCode(int $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return DomainGetDomainResponseData
     */
    public function getData() : DomainGetDomainResponseData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param DomainGetDomainResponseData $data
     *
     * @return self
     */
    public function setData(DomainGetDomainResponseData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDesc() : string
    {
        return $this->desc;
    }
    /**
     * 
     *
     * @param string $desc
     *
     * @return self
     */
    public function setDesc(string $desc) : self
    {
        $this->initialized['desc'] = true;
        $this->desc = $desc;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getMaintenance() : bool
    {
        return $this->maintenance;
    }
    /**
     * 
     *
     * @param bool $maintenance
     *
     * @return self
     */
    public function setMaintenance(bool $maintenance) : self
    {
        $this->initialized['maintenance'] = true;
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     * 
     *
     * @return ErrorWarning[]
     */
    public function getWarnings() : array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param ErrorWarning[] $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings) : self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}