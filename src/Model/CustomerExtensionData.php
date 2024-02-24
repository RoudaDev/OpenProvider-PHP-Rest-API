<?php

namespace Rouda\OpenProviderAPI\Model;

class CustomerExtensionData
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
    protected $adminType;
    /**
     * 
     *
     * @var string
     */
    protected $applicantPurpose;
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
    protected $companyNameCyrillic;
    /**
     * 
     *
     * @var string
     */
    protected $companyNameLatin;
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
    protected $contactTitle;
    /**
     * 
     *
     * @var string
     */
    protected $countryOfCitizenship;
    /**
     * 
     *
     * @var string
     */
    protected $customerUin;
    /**
     * 
     *
     * @var string
     */
    protected $ensAuthId;
    /**
     * 
     *
     * @var string
     */
    protected $ensKey;
    /**
     * 
     *
     * @var string
     */
    protected $firstNameCyrillic;
    /**
     * 
     *
     * @var string
     */
    protected $firstNameLatin;
    /**
     * 
     *
     * @var string
     */
    protected $hrMember;
    /**
     * 
     *
     * @var string
     */
    protected $industryClass;
    /**
     * 
     *
     * @var string
     */
    protected $isPrivateEnterpreneur;
    /**
     * 
     *
     * @var string
     */
    protected $lastNameCyrillic;
    /**
     * 
     *
     * @var string
     */
    protected $lastNameLatin;
    /**
     * 
     *
     * @var string
     */
    protected $legalAddressCyrillic;
    /**
     * 
     *
     * @var string
     */
    protected $legalType;
    /**
     * 
     *
     * @var string
     */
    protected $middleNameCyrillic;
    /**
     * 
     *
     * @var string
     */
    protected $middleNameLatin;
    /**
     * 
     *
     * @var string
     */
    protected $mobilePhoneNumber;
    /**
     * 
     *
     * @var string
     */
    protected $nexusCategory;
    /**
     * 
     *
     * @var string
     */
    protected $orgType;
    /**
     * 
     *
     * @var string
     */
    protected $passportIssueDate;
    /**
     * 
     *
     * @var string
     */
    protected $passportIssuer;
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
    protected $passportSeries;
    /**
     * 
     *
     * @var string
     */
    protected $postalAddressCyrillic;
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
    protected $taxPayerNumber;
    /**
     * 
     *
     * @var string
     */
    protected $uin;
    /**
     * 
     *
     * @var string
     */
    protected $userType;
    /**
     * 
     *
     * @var string
     */
    protected $vat;
    /**
     * 
     *
     * @var string
     */
    protected $website;
    /**
     * 
     *
     * @var string
     */
    protected $whoisEmail;
    /**
     * 
     *
     * @return string
     */
    public function getAdminType() : string
    {
        return $this->adminType;
    }
    /**
     * 
     *
     * @param string $adminType
     *
     * @return self
     */
    public function setAdminType(string $adminType) : self
    {
        $this->initialized['adminType'] = true;
        $this->adminType = $adminType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getApplicantPurpose() : string
    {
        return $this->applicantPurpose;
    }
    /**
     * 
     *
     * @param string $applicantPurpose
     *
     * @return self
     */
    public function setApplicantPurpose(string $applicantPurpose) : self
    {
        $this->initialized['applicantPurpose'] = true;
        $this->applicantPurpose = $applicantPurpose;
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
    public function getCompanyNameCyrillic() : string
    {
        return $this->companyNameCyrillic;
    }
    /**
     * 
     *
     * @param string $companyNameCyrillic
     *
     * @return self
     */
    public function setCompanyNameCyrillic(string $companyNameCyrillic) : self
    {
        $this->initialized['companyNameCyrillic'] = true;
        $this->companyNameCyrillic = $companyNameCyrillic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyNameLatin() : string
    {
        return $this->companyNameLatin;
    }
    /**
     * 
     *
     * @param string $companyNameLatin
     *
     * @return self
     */
    public function setCompanyNameLatin(string $companyNameLatin) : self
    {
        $this->initialized['companyNameLatin'] = true;
        $this->companyNameLatin = $companyNameLatin;
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
    public function getContactTitle() : string
    {
        return $this->contactTitle;
    }
    /**
     * 
     *
     * @param string $contactTitle
     *
     * @return self
     */
    public function setContactTitle(string $contactTitle) : self
    {
        $this->initialized['contactTitle'] = true;
        $this->contactTitle = $contactTitle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountryOfCitizenship() : string
    {
        return $this->countryOfCitizenship;
    }
    /**
     * 
     *
     * @param string $countryOfCitizenship
     *
     * @return self
     */
    public function setCountryOfCitizenship(string $countryOfCitizenship) : self
    {
        $this->initialized['countryOfCitizenship'] = true;
        $this->countryOfCitizenship = $countryOfCitizenship;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCustomerUin() : string
    {
        return $this->customerUin;
    }
    /**
     * 
     *
     * @param string $customerUin
     *
     * @return self
     */
    public function setCustomerUin(string $customerUin) : self
    {
        $this->initialized['customerUin'] = true;
        $this->customerUin = $customerUin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnsAuthId() : string
    {
        return $this->ensAuthId;
    }
    /**
     * 
     *
     * @param string $ensAuthId
     *
     * @return self
     */
    public function setEnsAuthId(string $ensAuthId) : self
    {
        $this->initialized['ensAuthId'] = true;
        $this->ensAuthId = $ensAuthId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEnsKey() : string
    {
        return $this->ensKey;
    }
    /**
     * 
     *
     * @param string $ensKey
     *
     * @return self
     */
    public function setEnsKey(string $ensKey) : self
    {
        $this->initialized['ensKey'] = true;
        $this->ensKey = $ensKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstNameCyrillic() : string
    {
        return $this->firstNameCyrillic;
    }
    /**
     * 
     *
     * @param string $firstNameCyrillic
     *
     * @return self
     */
    public function setFirstNameCyrillic(string $firstNameCyrillic) : self
    {
        $this->initialized['firstNameCyrillic'] = true;
        $this->firstNameCyrillic = $firstNameCyrillic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstNameLatin() : string
    {
        return $this->firstNameLatin;
    }
    /**
     * 
     *
     * @param string $firstNameLatin
     *
     * @return self
     */
    public function setFirstNameLatin(string $firstNameLatin) : self
    {
        $this->initialized['firstNameLatin'] = true;
        $this->firstNameLatin = $firstNameLatin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHrMember() : string
    {
        return $this->hrMember;
    }
    /**
     * 
     *
     * @param string $hrMember
     *
     * @return self
     */
    public function setHrMember(string $hrMember) : self
    {
        $this->initialized['hrMember'] = true;
        $this->hrMember = $hrMember;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIndustryClass() : string
    {
        return $this->industryClass;
    }
    /**
     * 
     *
     * @param string $industryClass
     *
     * @return self
     */
    public function setIndustryClass(string $industryClass) : self
    {
        $this->initialized['industryClass'] = true;
        $this->industryClass = $industryClass;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIsPrivateEnterpreneur() : string
    {
        return $this->isPrivateEnterpreneur;
    }
    /**
     * 
     *
     * @param string $isPrivateEnterpreneur
     *
     * @return self
     */
    public function setIsPrivateEnterpreneur(string $isPrivateEnterpreneur) : self
    {
        $this->initialized['isPrivateEnterpreneur'] = true;
        $this->isPrivateEnterpreneur = $isPrivateEnterpreneur;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastNameCyrillic() : string
    {
        return $this->lastNameCyrillic;
    }
    /**
     * 
     *
     * @param string $lastNameCyrillic
     *
     * @return self
     */
    public function setLastNameCyrillic(string $lastNameCyrillic) : self
    {
        $this->initialized['lastNameCyrillic'] = true;
        $this->lastNameCyrillic = $lastNameCyrillic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastNameLatin() : string
    {
        return $this->lastNameLatin;
    }
    /**
     * 
     *
     * @param string $lastNameLatin
     *
     * @return self
     */
    public function setLastNameLatin(string $lastNameLatin) : self
    {
        $this->initialized['lastNameLatin'] = true;
        $this->lastNameLatin = $lastNameLatin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLegalAddressCyrillic() : string
    {
        return $this->legalAddressCyrillic;
    }
    /**
     * 
     *
     * @param string $legalAddressCyrillic
     *
     * @return self
     */
    public function setLegalAddressCyrillic(string $legalAddressCyrillic) : self
    {
        $this->initialized['legalAddressCyrillic'] = true;
        $this->legalAddressCyrillic = $legalAddressCyrillic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLegalType() : string
    {
        return $this->legalType;
    }
    /**
     * 
     *
     * @param string $legalType
     *
     * @return self
     */
    public function setLegalType(string $legalType) : self
    {
        $this->initialized['legalType'] = true;
        $this->legalType = $legalType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMiddleNameCyrillic() : string
    {
        return $this->middleNameCyrillic;
    }
    /**
     * 
     *
     * @param string $middleNameCyrillic
     *
     * @return self
     */
    public function setMiddleNameCyrillic(string $middleNameCyrillic) : self
    {
        $this->initialized['middleNameCyrillic'] = true;
        $this->middleNameCyrillic = $middleNameCyrillic;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMiddleNameLatin() : string
    {
        return $this->middleNameLatin;
    }
    /**
     * 
     *
     * @param string $middleNameLatin
     *
     * @return self
     */
    public function setMiddleNameLatin(string $middleNameLatin) : self
    {
        $this->initialized['middleNameLatin'] = true;
        $this->middleNameLatin = $middleNameLatin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobilePhoneNumber() : string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     * 
     *
     * @param string $mobilePhoneNumber
     *
     * @return self
     */
    public function setMobilePhoneNumber(string $mobilePhoneNumber) : self
    {
        $this->initialized['mobilePhoneNumber'] = true;
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNexusCategory() : string
    {
        return $this->nexusCategory;
    }
    /**
     * 
     *
     * @param string $nexusCategory
     *
     * @return self
     */
    public function setNexusCategory(string $nexusCategory) : self
    {
        $this->initialized['nexusCategory'] = true;
        $this->nexusCategory = $nexusCategory;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOrgType() : string
    {
        return $this->orgType;
    }
    /**
     * 
     *
     * @param string $orgType
     *
     * @return self
     */
    public function setOrgType(string $orgType) : self
    {
        $this->initialized['orgType'] = true;
        $this->orgType = $orgType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassportIssueDate() : string
    {
        return $this->passportIssueDate;
    }
    /**
     * 
     *
     * @param string $passportIssueDate
     *
     * @return self
     */
    public function setPassportIssueDate(string $passportIssueDate) : self
    {
        $this->initialized['passportIssueDate'] = true;
        $this->passportIssueDate = $passportIssueDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPassportIssuer() : string
    {
        return $this->passportIssuer;
    }
    /**
     * 
     *
     * @param string $passportIssuer
     *
     * @return self
     */
    public function setPassportIssuer(string $passportIssuer) : self
    {
        $this->initialized['passportIssuer'] = true;
        $this->passportIssuer = $passportIssuer;
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
    public function getPassportSeries() : string
    {
        return $this->passportSeries;
    }
    /**
     * 
     *
     * @param string $passportSeries
     *
     * @return self
     */
    public function setPassportSeries(string $passportSeries) : self
    {
        $this->initialized['passportSeries'] = true;
        $this->passportSeries = $passportSeries;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostalAddressCyrillic() : string
    {
        return $this->postalAddressCyrillic;
    }
    /**
     * 
     *
     * @param string $postalAddressCyrillic
     *
     * @return self
     */
    public function setPostalAddressCyrillic(string $postalAddressCyrillic) : self
    {
        $this->initialized['postalAddressCyrillic'] = true;
        $this->postalAddressCyrillic = $postalAddressCyrillic;
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
    public function getTaxPayerNumber() : string
    {
        return $this->taxPayerNumber;
    }
    /**
     * 
     *
     * @param string $taxPayerNumber
     *
     * @return self
     */
    public function setTaxPayerNumber(string $taxPayerNumber) : self
    {
        $this->initialized['taxPayerNumber'] = true;
        $this->taxPayerNumber = $taxPayerNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUin() : string
    {
        return $this->uin;
    }
    /**
     * 
     *
     * @param string $uin
     *
     * @return self
     */
    public function setUin(string $uin) : self
    {
        $this->initialized['uin'] = true;
        $this->uin = $uin;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserType() : string
    {
        return $this->userType;
    }
    /**
     * 
     *
     * @param string $userType
     *
     * @return self
     */
    public function setUserType(string $userType) : self
    {
        $this->initialized['userType'] = true;
        $this->userType = $userType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVat() : string
    {
        return $this->vat;
    }
    /**
     * 
     *
     * @param string $vat
     *
     * @return self
     */
    public function setVat(string $vat) : self
    {
        $this->initialized['vat'] = true;
        $this->vat = $vat;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWebsite() : string
    {
        return $this->website;
    }
    /**
     * 
     *
     * @param string $website
     *
     * @return self
     */
    public function setWebsite(string $website) : self
    {
        $this->initialized['website'] = true;
        $this->website = $website;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWhoisEmail() : string
    {
        return $this->whoisEmail;
    }
    /**
     * 
     *
     * @param string $whoisEmail
     *
     * @return self
     */
    public function setWhoisEmail(string $whoisEmail) : self
    {
        $this->initialized['whoisEmail'] = true;
        $this->whoisEmail = $whoisEmail;
        return $this;
    }
}