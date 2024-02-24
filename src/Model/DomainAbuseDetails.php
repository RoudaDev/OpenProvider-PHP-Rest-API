<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainAbuseDetails
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
    protected $abuseId;
    /**
     * 
     *
     * @var bool
     */
    protected $isDomainHeld;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @return int
     */
    public function getAbuseId() : int
    {
        return $this->abuseId;
    }
    /**
     * 
     *
     * @param int $abuseId
     *
     * @return self
     */
    public function setAbuseId(int $abuseId) : self
    {
        $this->initialized['abuseId'] = true;
        $this->abuseId = $abuseId;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsDomainHeld() : bool
    {
        return $this->isDomainHeld;
    }
    /**
     * 
     *
     * @param bool $isDomainHeld
     *
     * @return self
     */
    public function setIsDomainHeld(bool $isDomainHeld) : self
    {
        $this->initialized['isDomainHeld'] = true;
        $this->isDomainHeld = $isDomainHeld;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}