<?php

namespace Rouda\OpenProviderAPI\Model;

class AuthcodeResetAuthCodeResponseData
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
     * @var AuthcodeAuthInfo
     */
    protected $authInfo;
    /**
     * 
     *
     * @var string
     */
    protected $domainRoid;
    /**
     * 
     *
     * @var string[]
     */
    protected $eppStatuses;
    /**
     * 
     *
     * @var AuthcodeRgpStatuses
     */
    protected $rgpStatuses;
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
     * @return AuthcodeAuthInfo
     */
    public function getAuthInfo() : AuthcodeAuthInfo
    {
        return $this->authInfo;
    }
    /**
     * 
     *
     * @param AuthcodeAuthInfo $authInfo
     *
     * @return self
     */
    public function setAuthInfo(AuthcodeAuthInfo $authInfo) : self
    {
        $this->initialized['authInfo'] = true;
        $this->authInfo = $authInfo;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomainRoid() : string
    {
        return $this->domainRoid;
    }
    /**
     * 
     *
     * @param string $domainRoid
     *
     * @return self
     */
    public function setDomainRoid(string $domainRoid) : self
    {
        $this->initialized['domainRoid'] = true;
        $this->domainRoid = $domainRoid;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getEppStatuses() : array
    {
        return $this->eppStatuses;
    }
    /**
     * 
     *
     * @param string[] $eppStatuses
     *
     * @return self
     */
    public function setEppStatuses(array $eppStatuses) : self
    {
        $this->initialized['eppStatuses'] = true;
        $this->eppStatuses = $eppStatuses;
        return $this;
    }
    /**
     * 
     *
     * @return AuthcodeRgpStatuses
     */
    public function getRgpStatuses() : AuthcodeRgpStatuses
    {
        return $this->rgpStatuses;
    }
    /**
     * 
     *
     * @param AuthcodeRgpStatuses $rgpStatuses
     *
     * @return self
     */
    public function setRgpStatuses(AuthcodeRgpStatuses $rgpStatuses) : self
    {
        $this->initialized['rgpStatuses'] = true;
        $this->rgpStatuses = $rgpStatuses;
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