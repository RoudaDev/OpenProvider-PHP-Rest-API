<?php

namespace Rouda\OpenProviderAPI\Model;

class OrderRetryEasyDmarcResponse
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
     * @var OrderEasyDmarcOrder
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
     * @return OrderEasyDmarcOrder
     */
    public function getData() : OrderEasyDmarcOrder
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param OrderEasyDmarcOrder $data
     *
     * @return self
     */
    public function setData(OrderEasyDmarcOrder $data) : self
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