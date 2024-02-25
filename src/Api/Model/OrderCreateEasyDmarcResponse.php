<?php

namespace Rouda\OpenProvider\Api\Model;

class OrderCreateEasyDmarcResponse
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
     * @var OrderEasyDmarcOrder|null
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
     * @return OrderEasyDmarcOrder|null
     */
    public function getData() : ?OrderEasyDmarcOrder
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderEasyDmarcOrder|null $data
     *
     * @return self
     */
    public function setData(?OrderEasyDmarcOrder $data) : self
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