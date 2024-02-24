<?php

namespace Rouda\OpenProviderAPI\Model;

class ContactAdditionalData
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
    protected $birthCity;
    /**
     * 
     *
     * @var string
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string
     */
    protected $socialSecurityNumber;
    /**
     * 
     *
     * @return string
     */
    public function getBirthCity() : string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string $birthCity
     *
     * @return self
     */
    public function setBirthCity(string $birthCity) : self
    {
        $this->initialized['birthCity'] = true;
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthDate() : string
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param string $birthDate
     *
     * @return self
     */
    public function setBirthDate(string $birthDate) : self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSocialSecurityNumber() : string
    {
        return $this->socialSecurityNumber;
    }
    /**
     * 
     *
     * @param string $socialSecurityNumber
     *
     * @return self
     */
    public function setSocialSecurityNumber(string $socialSecurityNumber) : self
    {
        $this->initialized['socialSecurityNumber'] = true;
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }
}