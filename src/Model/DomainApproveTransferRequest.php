<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var int
     */
    protected $approve;
    /**
     * 
     *
     * @var string
     */
    protected $authCode;
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
    protected $registrarTag;
    /**
     * 
     *
     * @return int
     */
    public function getApprove() : int
    {
        return $this->approve;
    }
    /**
     * 
     *
     * @param int $approve
     *
     * @return self
     */
    public function setApprove(int $approve) : self
    {
        $this->initialized['approve'] = true;
        $this->approve = $approve;
        return $this;
    }
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
    public function getRegistrarTag() : string
    {
        return $this->registrarTag;
    }
    /**
     * 
     *
     * @param string $registrarTag
     *
     * @return self
     */
    public function setRegistrarTag(string $registrarTag) : self
    {
        $this->initialized['registrarTag'] = true;
        $this->registrarTag = $registrarTag;
        return $this;
    }
}