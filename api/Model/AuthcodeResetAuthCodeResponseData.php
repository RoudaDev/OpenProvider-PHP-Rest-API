<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $authCode;
    /**
     * 
     *
     * @var AuthcodeAuthInfo|null
     */
    protected $authInfo;
    /**
     * 
     *
     * @var string|null
     */
    protected $domainRoid;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $eppStatuses;
    /**
     * 
     *
     * @var AuthcodeRgpStatuses|null
     */
    protected $rgpStatuses;
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
     * @return AuthcodeAuthInfo|null
     */
    public function getAuthInfo() : ?AuthcodeAuthInfo
    {
        return $this->authInfo;
    }
    /**
     * 
     *
     * @param AuthcodeAuthInfo|null $authInfo
     *
     * @return self
     */
    public function setAuthInfo(?AuthcodeAuthInfo $authInfo) : self
    {
        $this->initialized['authInfo'] = true;
        $this->authInfo = $authInfo;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDomainRoid() : ?string
    {
        return $this->domainRoid;
    }
    /**
     * 
     *
     * @param string|null $domainRoid
     *
     * @return self
     */
    public function setDomainRoid(?string $domainRoid) : self
    {
        $this->initialized['domainRoid'] = true;
        $this->domainRoid = $domainRoid;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getEppStatuses() : ?array
    {
        return $this->eppStatuses;
    }
    /**
     * 
     *
     * @param string[]|null $eppStatuses
     *
     * @return self
     */
    public function setEppStatuses(?array $eppStatuses) : self
    {
        $this->initialized['eppStatuses'] = true;
        $this->eppStatuses = $eppStatuses;
        return $this;
    }
    /**
     * 
     *
     * @return AuthcodeRgpStatuses|null
     */
    public function getRgpStatuses() : ?AuthcodeRgpStatuses
    {
        return $this->rgpStatuses;
    }
    /**
     * 
     *
     * @param AuthcodeRgpStatuses|null $rgpStatuses
     *
     * @return self
     */
    public function setRgpStatuses(?AuthcodeRgpStatuses $rgpStatuses) : self
    {
        $this->initialized['rgpStatuses'] = true;
        $this->rgpStatuses = $rgpStatuses;
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