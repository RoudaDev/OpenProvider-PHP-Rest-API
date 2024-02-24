<?php

namespace Rouda\OpenProviderAPI\Model;

class EmailDomainEmailVerification
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
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $handle;
    /**
     * 
     *
     * @var bool
     */
    protected $isSuspended;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHandle() : string
    {
        return $this->handle;
    }
    /**
     * 
     *
     * @param string $handle
     *
     * @return self
     */
    public function setHandle(string $handle) : self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsSuspended() : bool
    {
        return $this->isSuspended;
    }
    /**
     * 
     *
     * @param bool $isSuspended
     *
     * @return self
     */
    public function setIsSuspended(bool $isSuspended) : self
    {
        $this->initialized['isSuspended'] = true;
        $this->isSuspended = $isSuspended;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}