<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $areaCode;
    /**
     * 
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 
     *
     * @var string
     */
    protected $subscriberNumber;
    /**
     * 
     *
     * @return string
     */
    public function getAreaCode() : string
    {
        return $this->areaCode;
    }
    /**
     * 
     *
     * @param string $areaCode
     *
     * @return self
     */
    public function setAreaCode(string $areaCode) : self
    {
        $this->initialized['areaCode'] = true;
        $this->areaCode = $areaCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->countryCode;
    }
    /**
     * 
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode) : self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubscriberNumber() : string
    {
        return $this->subscriberNumber;
    }
    /**
     * 
     *
     * @param string $subscriberNumber
     *
     * @return self
     */
    public function setSubscriberNumber(string $subscriberNumber) : self
    {
        $this->initialized['subscriberNumber'] = true;
        $this->subscriberNumber = $subscriberNumber;
        return $this;
    }
}