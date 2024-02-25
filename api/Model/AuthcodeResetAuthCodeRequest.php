<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $authCodeType;
    /**
     * 
     *
     * @var DomainDomain|null
     */
    protected $domain;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $sendingType;
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthCodeType() : ?string
    {
        return $this->authCodeType;
    }
    /**
     * 
     *
     * @param string|null $authCodeType
     *
     * @return self
     */
    public function setAuthCodeType(?string $authCodeType) : self
    {
        $this->initialized['authCodeType'] = true;
        $this->authCodeType = $authCodeType;
        return $this;
    }
    /**
     * 
     *
     * @return DomainDomain|null
     */
    public function getDomain() : ?DomainDomain
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param DomainDomain|null $domain
     *
     * @return self
     */
    public function setDomain(?DomainDomain $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSendingType() : ?string
    {
        return $this->sendingType;
    }
    /**
     * 
     *
     * @param string|null $sendingType
     *
     * @return self
     */
    public function setSendingType(?string $sendingType) : self
    {
        $this->initialized['sendingType'] = true;
        $this->sendingType = $sendingType;
        return $this;
    }
}