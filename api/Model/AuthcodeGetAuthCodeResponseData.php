<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $authCode;
    /**
     * 
     *
     * @var bool|null
     */
    protected $success;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthCode() : ?string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string|null $authCode
     *
     * @return self
     */
    public function setAuthCode(?string $authCode) : self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSuccess() : ?bool
    {
        return $this->success;
    }
    /**
     * 
     *
     * @param bool|null $success
     *
     * @return self
     */
    public function setSuccess(?bool $success) : self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}