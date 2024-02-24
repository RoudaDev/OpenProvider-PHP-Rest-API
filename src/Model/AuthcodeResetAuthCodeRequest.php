<?php

namespace Rouda\OpenProviderAPI\Model;

class AuthcodeResetAuthCodeRequest
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
    protected $authCodeType;
    /**
     * 
     *
     * @var DomainDomain
     */
    protected $domain;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $sendingType;
    /**
     * 
     *
     * @return string
     */
    public function getAuthCodeType() : string
    {
        return $this->authCodeType;
    }
    /**
     * 
     *
     * @param string $authCodeType
     *
     * @return self
     */
    public function setAuthCodeType(string $authCodeType) : self
    {
        $this->initialized['authCodeType'] = true;
        $this->authCodeType = $authCodeType;
        return $this;
    }
    /**
     * 
     *
     * @return DomainDomain
     */
    public function getDomain() : DomainDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param DomainDomain $domain
     *
     * @return self
     */
    public function setDomain(DomainDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSendingType() : string
    {
        return $this->sendingType;
    }
    /**
     * 
     *
     * @param string $sendingType
     *
     * @return self
     */
    public function setSendingType(string $sendingType) : self
    {
        $this->initialized['sendingType'] = true;
        $this->sendingType = $sendingType;
        return $this;
    }
}