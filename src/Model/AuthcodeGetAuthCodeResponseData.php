<?php

namespace Rouda\OpenProviderAPI\Model;

class AuthcodeGetAuthCodeResponseData
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
    protected $authCode;
    /**
     * 
     *
     * @var bool
     */
    protected $success;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string $authCode
     *
     * @return self
     */
    public function setAuthCode(string $authCode) : self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getSuccess() : bool
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success) : self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
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
}