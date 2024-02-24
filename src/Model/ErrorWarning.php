<?php

namespace Rouda\OpenProviderAPI\Model;

class ErrorWarning
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
     * @var string
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
     * @return string
     */
    public function getData() : string
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param string $data
     *
     * @return self
     */
    public function setData(string $data) : self
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
}