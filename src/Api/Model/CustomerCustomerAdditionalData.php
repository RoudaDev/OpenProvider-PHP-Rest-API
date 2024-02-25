<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var CustomerFile[]|null
     */
    protected $attachedFiles;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthCountry;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthState;
    /**
     * 
     *
     * @var string|null
     */
    protected $birthZipcode;
    /**
     * 
     *
     * @var string|null
     */
    protected $companyRegistrationCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $companyRegistrationNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $companyRegistrationSubscriptionDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $companyUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $headquartersAddress;
    /**
     * 
     *
     * @var string|null
     */
    protected $headquartersCity;
    /**
     * 
     *
     * @var string|null
     */
    protected $headquartersCountry;
    /**
     * 
     *
     * @var string|null
     */
    protected $headquartersState;
    /**
     * 
     *
     * @var string|null
     */
    protected $headquartersZipcode;
    /**
     * 
     *
     * @var string|null
     */
    protected $passportNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $socialSecurityNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $tradingName;
    /**
     * 
     *
     * @return CustomerFile[]|null
     */
    public function getAttachedFiles() : ?array
    {
        return $this->attachedFiles;
    }
    /**
     * 
     *
     * @param CustomerFile[]|null $attachedFiles
     *
     * @return self
     */
    public function setAttachedFiles(?array $attachedFiles) : self
    {
        $this->initialized['attachedFiles'] = true;
        $this->attachedFiles = $attachedFiles;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthAddress() : ?string
    {
        return $this->birthAddress;
    }
    /**
     * 
     *
     * @param string|null $birthAddress
     *
     * @return self
     */
    public function setBirthAddress(?string $birthAddress) : self
    {
        $this->initialized['birthAddress'] = true;
        $this->birthAddress = $birthAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthCity() : ?string
    {
        return $this->birthCity;
    }
    /**
     * 
     *
     * @param string|null $birthCity
     *
     * @return self
     */
    public function setBirthCity(?string $birthCity) : self
    {
        $this->initialized['birthCity'] = true;
        $this->birthCity = $birthCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthCountry() : ?string
    {
        return $this->birthCountry;
    }
    /**
     * 
     *
     * @param string|null $birthCountry
     *
     * @return self
     */
    public function setBirthCountry(?string $birthCountry) : self
    {
        $this->initialized['birthCountry'] = true;
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthDate() : ?string
    {
        return $this->birthDate;
    }
    /**
     * 
     *
     * @param string|null $birthDate
     *
     * @return self
     */
    public function setBirthDate(?string $birthDate) : self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthState() : ?string
    {
        return $this->birthState;
    }
    /**
     * 
     *
     * @param string|null $birthState
     *
     * @return self
     */
    public function setBirthState(?string $birthState) : self
    {
        $this->initialized['birthState'] = true;
        $this->birthState = $birthState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBirthZipcode() : ?string
    {
        return $this->birthZipcode;
    }
    /**
     * 
     *
     * @param string|null $birthZipcode
     *
     * @return self
     */
    public function setBirthZipcode(?string $birthZipcode) : self
    {
        $this->initialized['birthZipcode'] = true;
        $this->birthZipcode = $birthZipcode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanyRegistrationCity() : ?string
    {
        return $this->companyRegistrationCity;
    }
    /**
     * 
     *
     * @param string|null $companyRegistrationCity
     *
     * @return self
     */
    public function setCompanyRegistrationCity(?string $companyRegistrationCity) : self
    {
        $this->initialized['companyRegistrationCity'] = true;
        $this->companyRegistrationCity = $companyRegistrationCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanyRegistrationNumber() : ?string
    {
        return $this->companyRegistrationNumber;
    }
    /**
     * 
     *
     * @param string|null $companyRegistrationNumber
     *
     * @return self
     */
    public function setCompanyRegistrationNumber(?string $companyRegistrationNumber) : self
    {
        $this->initialized['companyRegistrationNumber'] = true;
        $this->companyRegistrationNumber = $companyRegistrationNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanyRegistrationSubscriptionDate() : ?string
    {
        return $this->companyRegistrationSubscriptionDate;
    }
    /**
     * 
     *
     * @param string|null $companyRegistrationSubscriptionDate
     *
     * @return self
     */
    public function setCompanyRegistrationSubscriptionDate(?string $companyRegistrationSubscriptionDate) : self
    {
        $this->initialized['companyRegistrationSubscriptionDate'] = true;
        $this->companyRegistrationSubscriptionDate = $companyRegistrationSubscriptionDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanyUrl() : ?string
    {
        return $this->companyUrl;
    }
    /**
     * 
     *
     * @param string|null $companyUrl
     *
     * @return self
     */
    public function setCompanyUrl(?string $companyUrl) : self
    {
        $this->initialized['companyUrl'] = true;
        $this->companyUrl = $companyUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeadquartersAddress() : ?string
    {
        return $this->headquartersAddress;
    }
    /**
     * 
     *
     * @param string|null $headquartersAddress
     *
     * @return self
     */
    public function setHeadquartersAddress(?string $headquartersAddress) : self
    {
        $this->initialized['headquartersAddress'] = true;
        $this->headquartersAddress = $headquartersAddress;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeadquartersCity() : ?string
    {
        return $this->headquartersCity;
    }
    /**
     * 
     *
     * @param string|null $headquartersCity
     *
     * @return self
     */
    public function setHeadquartersCity(?string $headquartersCity) : self
    {
        $this->initialized['headquartersCity'] = true;
        $this->headquartersCity = $headquartersCity;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeadquartersCountry() : ?string
    {
        return $this->headquartersCountry;
    }
    /**
     * 
     *
     * @param string|null $headquartersCountry
     *
     * @return self
     */
    public function setHeadquartersCountry(?string $headquartersCountry) : self
    {
        $this->initialized['headquartersCountry'] = true;
        $this->headquartersCountry = $headquartersCountry;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeadquartersState() : ?string
    {
        return $this->headquartersState;
    }
    /**
     * 
     *
     * @param string|null $headquartersState
     *
     * @return self
     */
    public function setHeadquartersState(?string $headquartersState) : self
    {
        $this->initialized['headquartersState'] = true;
        $this->headquartersState = $headquartersState;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getHeadquartersZipcode() : ?string
    {
        return $this->headquartersZipcode;
    }
    /**
     * 
     *
     * @param string|null $headquartersZipcode
     *
     * @return self
     */
    public function setHeadquartersZipcode(?string $headquartersZipcode) : self
    {
        $this->initialized['headquartersZipcode'] = true;
        $this->headquartersZipcode = $headquartersZipcode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPassportNumber() : ?string
    {
        return $this->passportNumber;
    }
    /**
     * 
     *
     * @param string|null $passportNumber
     *
     * @return self
     */
    public function setPassportNumber(?string $passportNumber) : self
    {
        $this->initialized['passportNumber'] = true;
        $this->passportNumber = $passportNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSocialSecurityNumber() : ?string
    {
        return $this->socialSecurityNumber;
    }
    /**
     * 
     *
     * @param string|null $socialSecurityNumber
     *
     * @return self
     */
    public function setSocialSecurityNumber(?string $socialSecurityNumber) : self
    {
        $this->initialized['socialSecurityNumber'] = true;
        $this->socialSecurityNumber = $socialSecurityNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTradingName() : ?string
    {
        return $this->tradingName;
    }
    /**
     * 
     *
     * @param string|null $tradingName
     *
     * @return self
     */
    public function setTradingName(?string $tradingName) : self
    {
        $this->initialized['tradingName'] = true;
        $this->tradingName = $tradingName;
        return $this;
    }
}