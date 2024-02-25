<?php

namespace Rouda\OpenProvider\Api\Model;

class DomainApproveTransferRequest
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
    protected $approve;
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
     * @var string|null
     */
    protected $registrarTag;
    /**
     * 
     *
     * @return int|null
     */
    public function getApprove() : ?int
    {
        return $this->approve;
    }
    /**
     * 
     *
     * @param int|null $approve
     *
     * @return self
     */
    public function setApprove(?int $approve) : self
    {
        $this->initialized['approve'] = true;
        $this->approve = $approve;
        return $this;
    }
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
    /**
     * 
     *
     * @return string|null
     */
    public function getRegistrarTag() : ?string
    {
        return $this->registrarTag;
    }
    /**
     * 
     *
     * @param string|null $registrarTag
     *
     * @return self
     */
    public function setRegistrarTag(?string $registrarTag) : self
    {
        $this->initialized['registrarTag'] = true;
        $this->registrarTag = $registrarTag;
        return $this;
    }
}