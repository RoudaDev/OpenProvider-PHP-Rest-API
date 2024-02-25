<?php

namespace Rouda\OpenProvider\Api\Model;

class ContactPhone
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
    protected $areaCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $subscriberNumber;
    /**
     * 
     *
     * @return string|null
     */
    public function getAreaCode() : ?string
    {
        return $this->areaCode;
    }
    /**
     * 
     *
     * @param string|null $areaCode
     *
     * @return self
     */
    public function setAreaCode(?string $areaCode) : self
    {
        $this->initialized['areaCode'] = true;
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubscriberNumber() : ?string
    {
        return $this->subscriberNumber;
    }
    /**
     * 
     *
     * @param string|null $subscriberNumber
     *
     * @return self
     */
    public function setSubscriberNumber(?string $subscriberNumber) : self
    {
        $this->initialized['subscriberNumber'] = true;
        $this->subscriberNumber = $subscriberNumber;
        return $this;
    }
}