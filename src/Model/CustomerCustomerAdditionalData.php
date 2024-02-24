<?php

namespace Rouda\OpenProviderAPI\Model;

class CustomerCustomerAdditionalData
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
     * @var CustomerFile[]
     */
    protected $attachedFiles;
    /**
     * 
     *
     * @var string
     */
    protected $birthAddress;
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
    protected $birthCountry;
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
    protected $birthState;
    /**
     * 
     *
     * @var string
     */
    protected $birthZipcode;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationCity;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationNumber;
    /**
     * 
     *
     * @var string
     */
    protected $companyRegistrationSubscriptionDate;
    /**
     * 
     *
     * @var string
     */
    protected $companyUrl;
    /**
     * 
     *
     * @var string
     */
    protected $headquartersAddress;
    /**
     * 
     *
     * @var string
     */
    protected $headquartersCity;
    /**
     * 
     *
     * @var string
     */
    protected $headquartersCountry;
    /**
     * 
     *
     * @var string
     */
    protected $headquartersState;
    /**
     * 
     *
     * @var string
     */
    protected $headquartersZipcode;
    /**
     * 
     *
     * @var string
     */
    protected $passportNumber;
    /**
     * 
     *
     * @var string
     */
    protected $socialSecurityNumber;
    /**
     * 
     *
     * @var string
     */
    protected $tradingName;
    /**
     * 
     *
     * @return CustomerFile[]
     */
    public function getAttachedFiles() : array
    {
        return $this->attachedFiles;
    }
    /**
     * 
     *
     * @param CustomerFile[] $attachedFiles
     *
     * @return self
     */
    public function setAttachedFiles(array $attachedFiles) : self
    {
        $this->initialized['attachedFiles'] = true;
        $this->attachedFiles = $attachedFiles;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthAddress() : string
    {
        return $this->birthAddress;
    }
    /**
     * 
     *
     * @param string $birthAddress
     *
     * @return self
     */
    public function setBirthAddress(string $birthAddress) : self
    {
        $this->initialized['birthAddress'] = true;
        $this->birthAddress = $birthAddress;
        return $this;
    }
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
    public function getBirthCountry() : string
    {
        return $this->birthCountry;
    }
    /**
     * 
     *
     * @param string $birthCountry
     *
     * @return self
     */
    public function setBirthCountry(string $birthCountry) : self
    {
        $this->initialized['birthCountry'] = true;
        $this->birthCountry = $birthCountry;
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
    public function getBirthState() : string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string $birthState
     *
     * @return self
     */
    public function setBirthState(string $birthState) : self
    {
        $this->initialized['birthState'] = true;
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBirthZipcode() : string
    {
        return $this->birthZipcode;
    }
    /**
     * 
     *
     * @param string $birthZipcode
     *
     * @return self
     */
    public function setBirthZipcode(string $birthZipcode) : self
    {
        $this->initialized['birthZipcode'] = true;
        $this->birthZipcode = $birthZipcode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyRegistrationCity() : string
    {
        return $this->companyRegistrationCity;
    }
    /**
     * 
     *
     * @param string $companyRegistrationCity
     *
     * @return self
     */
    public function setCompanyRegistrationCity(string $companyRegistrationCity) : self
    {
        $this->initialized['companyRegistrationCity'] = true;
        $this->companyRegistrationCity = $companyRegistrationCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyRegistrationNumber() : string
    {
        return $this->companyRegistrationNumber;
    }
    /**
     * 
     *
     * @param string $companyRegistrationNumber
     *
     * @return self
     */
    public function setCompanyRegistrationNumber(string $companyRegistrationNumber) : self
    {
        $this->initialized['companyRegistrationNumber'] = true;
        $this->companyRegistrationNumber = $companyRegistrationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyRegistrationSubscriptionDate() : string
    {
        return $this->companyRegistrationSubscriptionDate;
    }
    /**
     * 
     *
     * @param string $companyRegistrationSubscriptionDate
     *
     * @return self
     */
    public function setCompanyRegistrationSubscriptionDate(string $companyRegistrationSubscriptionDate) : self
    {
        $this->initialized['companyRegistrationSubscriptionDate'] = true;
        $this->companyRegistrationSubscriptionDate = $companyRegistrationSubscriptionDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyUrl() : string
    {
        return $this->companyUrl;
    }
    /**
     * 
     *
     * @param string $companyUrl
     *
     * @return self
     */
    public function setCompanyUrl(string $companyUrl) : self
    {
        $this->initialized['companyUrl'] = true;
        $this->companyUrl = $companyUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeadquartersAddress() : string
    {
        return $this->headquartersAddress;
    }
    /**
     * 
     *
     * @param string $headquartersAddress
     *
     * @return self
     */
    public function setHeadquartersAddress(string $headquartersAddress) : self
    {
        $this->initialized['headquartersAddress'] = true;
        $this->headquartersAddress = $headquartersAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeadquartersCity() : string
    {
        return $this->headquartersCity;
    }
    /**
     * 
     *
     * @param string $headquartersCity
     *
     * @return self
     */
    public function setHeadquartersCity(string $headquartersCity) : self
    {
        $this->initialized['headquartersCity'] = true;
        $this->headquartersCity = $headquartersCity;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeadquartersCountry() : string
    {
        return $this->headquartersCountry;
    }
    /**
     * 
     *
     * @param string $headquartersCountry
     *
     * @return self
     */
    public function setHeadquartersCountry(string $headquartersCountry) : self
    {
        $this->initialized['headquartersCountry'] = true;
        $this->headquartersCountry = $headquartersCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeadquartersState() : string
    {
        return $this->headquartersState;
    }
    /**
     * 
     *
     * @param string $headquartersState
     *
     * @return self
     */
    public function setHeadquartersState(string $headquartersState) : self
    {
        $this->initialized['headquartersState'] = true;
        $this->headquartersState = $headquartersState;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHeadquartersZipcode() : string
    {
        return $this->headquartersZipcode;
    }
    /**
     * 
     *
     * @param string $headquartersZipcode
     *
     * @return self
     */
    public function setHeadquartersZipcode(string $headquartersZipcode) : self
    {
        $this->initialized['headquartersZipcode'] = true;
        $this->headquartersZipcode = $headquartersZipcode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassportNumber() : string
    {
        return $this->passportNumber;
    }
    /**
     * 
     *
     * @param string $passportNumber
     *
     * @return self
     */
    public function setPassportNumber(string $passportNumber) : self
    {
        $this->initialized['passportNumber'] = true;
        $this->passportNumber = $passportNumber;
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
    /**
     * 
     *
     * @return string
     */
    public function getTradingName() : string
    {
        return $this->tradingName;
    }
    /**
     * 
     *
     * @param string $tradingName
     *
     * @return self
     */
    public function setTradingName(string $tradingName) : self
    {
        $this->initialized['tradingName'] = true;
        $this->tradingName = $tradingName;
        return $this;
    }
}