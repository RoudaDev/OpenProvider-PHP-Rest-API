<?php

namespace Rouda\OpenProvider\Api\Model;

class DomainTryAgainLastOperationRequest
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
}