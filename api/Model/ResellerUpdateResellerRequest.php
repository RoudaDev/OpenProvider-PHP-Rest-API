<?php

namespace Rouda\OpenProvider\Api\Model;

class ResellerUpdateResellerRequest
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
     * @var ResellerResellerAdditionalData|null
     */
    protected $additionalData;
    /**
     * 
     *
     * @var ContactAddress|null
     */
    protected $address;
    /**
     * 
     *
     * @var string|null
     */
    protected $comments;
    /**
     * 
     *
     * @var string|null
     */
    protected $companyName;
    /**
    * - UNKNOWN_COMPANY_SIZE: Unknown company size, e.g reseller just created account or didn't specified company size
    - BETWEEN_1_AND_10: Company has from 1 to 10 employees
    - BETWEEN_11_AND_50: Company has from 11 to 50 employees
    - BETWEEN_51_AND_200: Company has from 51 to 200 employees
    - BETWEEN_201_AND_500: Company has from 201 to 500 employees
    - BETWEEN_501_AND_1000: Company has from 501 to 1000 employees
    - MORE_THAN_1000: Company more than 1000 employees
    *
    * @var string|null
    */
    protected $companySize = 'UNKNOWN_COMPANY_SIZE';
    /**
     * 
     *
     * @var CustomerFax|null
     */
    protected $fax;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
    * - UNKNOWN_INDUSTRY: Industry is not specified
    - DOMAIN_REGISTRAR: Reseller's industry is domain registar
    - CLOUD_SERVICES: Reseller's industry is cloud services
    - MARKETING_AGENCIES: Reseller's industry is marketing agencies
    - NETWORKING_SERVICES: Reseller's industry is networking services
    - WEB_HOSTING: Reseller's industry is web hosting
    - SOFTWARE_DEVELOPMENT: Reseller's industry is software development
    - WEBSITE_BUILDERS: Reseller's industry is website builders
    - SECURITY_SERVICES: Reseller's industry is security services
    *
    * @var string|null
    */
    protected $industry = 'UNKNOWN_INDUSTRY';
    /**
     * 
     *
     * @var string|null
     */
    protected $inn;
    /**
     * 
     *
     * @var string|null
     */
    protected $kpp;
    /**
     * 
     *
     * @var string|null
     */
    protected $locale;
    /**
     * 
     *
     * @var ContactName|null
     */
    protected $name;
    /**
     * 
     *
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     * 
     *
     * @var string|null
     */
    protected $vat;
    /**
     * 
     *
     * @return ResellerResellerAdditionalData|null
     */
    public function getAdditionalData() : ?ResellerResellerAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param ResellerResellerAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?ResellerResellerAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return ContactAddress|null
     */
    public function getAddress() : ?ContactAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ContactAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ContactAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string|null $comments
     *
     * @return self
     */
    public function setComments(?string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
    * - UNKNOWN_COMPANY_SIZE: Unknown company size, e.g reseller just created account or didn't specified company size
    - BETWEEN_1_AND_10: Company has from 1 to 10 employees
    - BETWEEN_11_AND_50: Company has from 11 to 50 employees
    - BETWEEN_51_AND_200: Company has from 51 to 200 employees
    - BETWEEN_201_AND_500: Company has from 201 to 500 employees
    - BETWEEN_501_AND_1000: Company has from 501 to 1000 employees
    - MORE_THAN_1000: Company more than 1000 employees
    *
    * @return string|null
    */
    public function getCompanySize() : ?string
    {
        return $this->companySize;
    }
    /**
    * - UNKNOWN_COMPANY_SIZE: Unknown company size, e.g reseller just created account or didn't specified company size
    - BETWEEN_1_AND_10: Company has from 1 to 10 employees
    - BETWEEN_11_AND_50: Company has from 11 to 50 employees
    - BETWEEN_51_AND_200: Company has from 51 to 200 employees
    - BETWEEN_201_AND_500: Company has from 201 to 500 employees
    - BETWEEN_501_AND_1000: Company has from 501 to 1000 employees
    - MORE_THAN_1000: Company more than 1000 employees
    *
    * @param string|null $companySize
    *
    * @return self
    */
    public function setCompanySize(?string $companySize) : self
    {
        $this->initialized['companySize'] = true;
        $this->companySize = $companySize;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerFax|null
     */
    public function getFax() : ?CustomerFax
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param CustomerFax|null $fax
     *
     * @return self
     */
    public function setFax(?CustomerFax $fax) : self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
    * - UNKNOWN_INDUSTRY: Industry is not specified
    - DOMAIN_REGISTRAR: Reseller's industry is domain registar
    - CLOUD_SERVICES: Reseller's industry is cloud services
    - MARKETING_AGENCIES: Reseller's industry is marketing agencies
    - NETWORKING_SERVICES: Reseller's industry is networking services
    - WEB_HOSTING: Reseller's industry is web hosting
    - SOFTWARE_DEVELOPMENT: Reseller's industry is software development
    - WEBSITE_BUILDERS: Reseller's industry is website builders
    - SECURITY_SERVICES: Reseller's industry is security services
    *
    * @return string|null
    */
    public function getIndustry() : ?string
    {
        return $this->industry;
    }
    /**
    * - UNKNOWN_INDUSTRY: Industry is not specified
    - DOMAIN_REGISTRAR: Reseller's industry is domain registar
    - CLOUD_SERVICES: Reseller's industry is cloud services
    - MARKETING_AGENCIES: Reseller's industry is marketing agencies
    - NETWORKING_SERVICES: Reseller's industry is networking services
    - WEB_HOSTING: Reseller's industry is web hosting
    - SOFTWARE_DEVELOPMENT: Reseller's industry is software development
    - WEBSITE_BUILDERS: Reseller's industry is website builders
    - SECURITY_SERVICES: Reseller's industry is security services
    *
    * @param string|null $industry
    *
    * @return self
    */
    public function setIndustry(?string $industry) : self
    {
        $this->initialized['industry'] = true;
        $this->industry = $industry;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->initialized['inn'] = true;
        $this->inn = $inn;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * 
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp) : self
    {
        $this->initialized['kpp'] = true;
        $this->kpp = $kpp;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocale() : ?string
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * 
     *
     * @return ContactName|null
     */
    public function getName() : ?ContactName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ContactName|null $name
     *
     * @return self
     */
    public function setName(?ContactName $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ContactPhone|null
     */
    public function getPhone() : ?ContactPhone
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param ContactPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ContactPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getVat() : ?string
    {
        return $this->vat;
    }
    /**
     * 
     *
     * @param string|null $vat
     *
     * @return self
     */
    public function setVat(?string $vat) : self
    {
        $this->initialized['vat'] = true;
        $this->vat = $vat;
        return $this;
    }
}