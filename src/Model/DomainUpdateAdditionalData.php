<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainUpdateAdditionalData
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
    protected $abogadoAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $adminSingPassId;
    /**
     * 
     *
     * @var string
     */
    protected $authCode;
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
    protected $customerUin;
    /**
     * 
     *
     * @var DomainUINDocumentType
     */
    protected $customerUinDocType;
    /**
     * 
     *
     * @var string[]
     */
    protected $domainNameVariants;
    /**
     * 
     *
     * @var string
     */
    protected $intendedUse;
    /**
     * 
     *
     * @var string
     */
    protected $lawAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $maintainer;
    /**
     * 
     *
     * @var string
     */
    protected $membershipId;
    /**
     * 
     *
     * @var string
     */
    protected $mobilePhoneNumberVerification;
    /**
     * 
     *
     * @var string
     */
    protected $ngoOngEligibilityAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $ngoOngPolicyAcceptance;
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
    protected $vat;
    /**
     * 
     *
     * @var string
     */
    protected $verificationCode;
    /**
     * 
     *
     * @return string
     */
    public function getAbogadoAcceptance() : string
    {
        return $this->abogadoAcceptance;
    }
    /**
     * 
     *
     * @param string $abogadoAcceptance
     *
     * @return self
     */
    public function setAbogadoAcceptance(string $abogadoAcceptance) : self
    {
        $this->initialized['abogadoAcceptance'] = true;
        $this->abogadoAcceptance = $abogadoAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAdminSingPassId() : string
    {
        return $this->adminSingPassId;
    }
    /**
     * 
     *
     * @param string $adminSingPassId
     *
     * @return self
     */
    public function setAdminSingPassId(string $adminSingPassId) : self
    {
        $this->initialized['adminSingPassId'] = true;
        $this->adminSingPassId = $adminSingPassId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string $authCode
     *
     * @return self
     */
    public function setAuthCode(string $authCode) : self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;
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
     * @return DomainUINDocumentType
     */
    public function getCustomerUinDocType() : DomainUINDocumentType
    {
        return $this->customerUinDocType;
    }
    /**
     * 
     *
     * @param DomainUINDocumentType $customerUinDocType
     *
     * @return self
     */
    public function setCustomerUinDocType(DomainUINDocumentType $customerUinDocType) : self
    {
        $this->initialized['customerUinDocType'] = true;
        $this->customerUinDocType = $customerUinDocType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getDomainNameVariants() : array
    {
        return $this->domainNameVariants;
    }
    /**
     * 
     *
     * @param string[] $domainNameVariants
     *
     * @return self
     */
    public function setDomainNameVariants(array $domainNameVariants) : self
    {
        $this->initialized['domainNameVariants'] = true;
        $this->domainNameVariants = $domainNameVariants;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIntendedUse() : string
    {
        return $this->intendedUse;
    }
    /**
     * 
     *
     * @param string $intendedUse
     *
     * @return self
     */
    public function setIntendedUse(string $intendedUse) : self
    {
        $this->initialized['intendedUse'] = true;
        $this->intendedUse = $intendedUse;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLawAcceptance() : string
    {
        return $this->lawAcceptance;
    }
    /**
     * 
     *
     * @param string $lawAcceptance
     *
     * @return self
     */
    public function setLawAcceptance(string $lawAcceptance) : self
    {
        $this->initialized['lawAcceptance'] = true;
        $this->lawAcceptance = $lawAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMaintainer() : string
    {
        return $this->maintainer;
    }
    /**
     * 
     *
     * @param string $maintainer
     *
     * @return self
     */
    public function setMaintainer(string $maintainer) : self
    {
        $this->initialized['maintainer'] = true;
        $this->maintainer = $maintainer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMembershipId() : string
    {
        return $this->membershipId;
    }
    /**
     * 
     *
     * @param string $membershipId
     *
     * @return self
     */
    public function setMembershipId(string $membershipId) : self
    {
        $this->initialized['membershipId'] = true;
        $this->membershipId = $membershipId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMobilePhoneNumberVerification() : string
    {
        return $this->mobilePhoneNumberVerification;
    }
    /**
     * 
     *
     * @param string $mobilePhoneNumberVerification
     *
     * @return self
     */
    public function setMobilePhoneNumberVerification(string $mobilePhoneNumberVerification) : self
    {
        $this->initialized['mobilePhoneNumberVerification'] = true;
        $this->mobilePhoneNumberVerification = $mobilePhoneNumberVerification;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNgoOngEligibilityAcceptance() : string
    {
        return $this->ngoOngEligibilityAcceptance;
    }
    /**
     * 
     *
     * @param string $ngoOngEligibilityAcceptance
     *
     * @return self
     */
    public function setNgoOngEligibilityAcceptance(string $ngoOngEligibilityAcceptance) : self
    {
        $this->initialized['ngoOngEligibilityAcceptance'] = true;
        $this->ngoOngEligibilityAcceptance = $ngoOngEligibilityAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNgoOngPolicyAcceptance() : string
    {
        return $this->ngoOngPolicyAcceptance;
    }
    /**
     * 
     *
     * @param string $ngoOngPolicyAcceptance
     *
     * @return self
     */
    public function setNgoOngPolicyAcceptance(string $ngoOngPolicyAcceptance) : self
    {
        $this->initialized['ngoOngPolicyAcceptance'] = true;
        $this->ngoOngPolicyAcceptance = $ngoOngPolicyAcceptance;
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
    public function getVerificationCode() : string
    {
        return $this->verificationCode;
    }
    /**
     * 
     *
     * @param string $verificationCode
     *
     * @return self
     */
    public function setVerificationCode(string $verificationCode) : self
    {
        $this->initialized['verificationCode'] = true;
        $this->verificationCode = $verificationCode;
        return $this;
    }
}