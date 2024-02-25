<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var int|null
     */
    protected $abuseId;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isDomainHeld;
    /**
     * 
     *
     * @var string|null
     */
    protected $message;
    /**
     * 
     *
     * @return int|null
     */
    public function getAbuseId() : ?int
    {
        return $this->abuseId;
    }
    /**
     * 
     *
     * @param int|null $abuseId
     *
     * @return self
     */
    public function setAbuseId(?int $abuseId) : self
    {
        $this->initialized['abuseId'] = true;
        $this->abuseId = $abuseId;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsDomainHeld() : ?bool
    {
        return $this->isDomainHeld;
    }
    /**
     * 
     *
     * @param bool|null $isDomainHeld
     *
     * @return self
     */
    public function setIsDomainHeld(?bool $isDomainHeld) : self
    {
        $this->initialized['isDomainHeld'] = true;
        $this->isDomainHeld = $isDomainHeld;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string|null $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}