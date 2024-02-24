<?php

namespace Rouda\OpenProviderAPI\Model;

class ContactAddress
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
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @var string
     */
    protected $number;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $street;
    /**
     * 
     *
     * @var string
     */
    protected $suffix;
    /**
     * 
     *
     * @var string
     */
    protected $zipcode;
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }
    /**
     * 
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number) : self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStreet() : string
    {
        return $this->street;
    }
    /**
     * 
     *
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street) : self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSuffix() : string
    {
        return $this->suffix;
    }
    /**
     * 
     *
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix(string $suffix) : self
    {
        $this->initialized['suffix'] = true;
        $this->suffix = $suffix;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getZipcode() : string
    {
        return $this->zipcode;
    }
    /**
     * 
     *
     * @param string $zipcode
     *
     * @return self
     */
    public function setZipcode(string $zipcode) : self
    {
        $this->initialized['zipcode'] = true;
        $this->zipcode = $zipcode;
        return $this;
    }
}