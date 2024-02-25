<?php

namespace Rouda\OpenProvider\Api\Model;

class TemplateGetTemplateResponse
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
     * @var int|null
     */
    protected $code;
    /**
     * 
     *
     * @var TemplateTemplate|null
     */
    protected $data;
    /**
     * 
     *
     * @var string|null
     */
    protected $desc;
    /**
     * 
     *
     * @var bool|null
     */
    protected $maintenance;
    /**
     * 
     *
     * @var ErrorWarning[]|null
     */
    protected $warnings;
    /**
     * 
     *
     * @return int|null
     */
    public function getCode() : ?int
    {
        return $this->code;
    }
    /**
     * 
     *
     * @param int|null $code
     *
     * @return self
     */
    public function setCode(?int $code) : self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * 
     *
     * @return TemplateTemplate|null
     */
    public function getData() : ?TemplateTemplate
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param TemplateTemplate|null $data
     *
     * @return self
     */
    public function setData(?TemplateTemplate $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDesc() : ?string
    {
        return $this->desc;
    }
    /**
     * 
     *
     * @param string|null $desc
     *
     * @return self
     */
    public function setDesc(?string $desc) : self
    {
        $this->initialized['desc'] = true;
        $this->desc = $desc;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getMaintenance() : ?bool
    {
        return $this->maintenance;
    }
    /**
     * 
     *
     * @param bool|null $maintenance
     *
     * @return self
     */
    public function setMaintenance(?bool $maintenance) : self
    {
        $this->initialized['maintenance'] = true;
        $this->maintenance = $maintenance;
        return $this;
    }
    /**
     * 
     *
     * @return ErrorWarning[]|null
     */
    public function getWarnings() : ?array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param ErrorWarning[]|null $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
        return $this;
    }
}