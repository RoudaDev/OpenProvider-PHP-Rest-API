<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var string|null
     */
    protected $abogadoAcceptance;
    /**
     * 
     *
     * @var string|null
     */
    protected $adminSingPassId;
    /**
     * 
     *
     * @var string|null
     */
    protected $authCode;
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
    protected $customerUin;
    /**
     * 
     *
     * @var DomainUINDocumentType|null
     */
    protected $customerUinDocType;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $domainNameVariants;
    /**
     * 
     *
     * @var string|null
     */
    protected $intendedUse;
    /**
     * 
     *
     * @var string|null
     */
    protected $lawAcceptance;
    /**
     * 
     *
     * @var string|null
     */
    protected $maintainer;
    /**
     * 
     *
     * @var string|null
     */
    protected $membershipId;
    /**
     * 
     *
     * @var string|null
     */
    protected $mobilePhoneNumberVerification;
    /**
     * 
     *
     * @var string|null
     */
    protected $ngoOngEligibilityAcceptance;
    /**
     * 
     *
     * @var string|null
     */
    protected $ngoOngPolicyAcceptance;
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
    protected $vat;
    /**
     * 
     *
     * @var string|null
     */
    protected $verificationCode;
    /**
     * 
     *
     * @return string|null
     */
    public function getAbogadoAcceptance() : ?string
    {
        return $this->abogadoAcceptance;
    }
    /**
     * 
     *
     * @param string|null $abogadoAcceptance
     *
     * @return self
     */
    public function setAbogadoAcceptance(?string $abogadoAcceptance) : self
    {
        $this->initialized['abogadoAcceptance'] = true;
        $this->abogadoAcceptance = $abogadoAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAdminSingPassId() : ?string
    {
        return $this->adminSingPassId;
    }
    /**
     * 
     *
     * @param string|null $adminSingPassId
     *
     * @return self
     */
    public function setAdminSingPassId(?string $adminSingPassId) : self
    {
        $this->initialized['adminSingPassId'] = true;
        $this->adminSingPassId = $adminSingPassId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthCode() : ?string
    {
        return $this->authCode;
    }
    /**
     * 
     *
     * @param string|null $authCode
     *
     * @return self
     */
    public function setAuthCode(?string $authCode) : self
    {
        $this->initialized['authCode'] = true;
        $this->authCode = $authCode;
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
    public function getCustomerUin() : ?string
    {
        return $this->customerUin;
    }
    /**
     * 
     *
     * @param string|null $customerUin
     *
     * @return self
     */
    public function setCustomerUin(?string $customerUin) : self
    {
        $this->initialized['customerUin'] = true;
        $this->customerUin = $customerUin;
        return $this;
    }
    /**
     * 
     *
     * @return DomainUINDocumentType|null
     */
    public function getCustomerUinDocType() : ?DomainUINDocumentType
    {
        return $this->customerUinDocType;
    }
    /**
     * 
     *
     * @param DomainUINDocumentType|null $customerUinDocType
     *
     * @return self
     */
    public function setCustomerUinDocType(?DomainUINDocumentType $customerUinDocType) : self
    {
        $this->initialized['customerUinDocType'] = true;
        $this->customerUinDocType = $customerUinDocType;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getDomainNameVariants() : ?array
    {
        return $this->domainNameVariants;
    }
    /**
     * 
     *
     * @param string[]|null $domainNameVariants
     *
     * @return self
     */
    public function setDomainNameVariants(?array $domainNameVariants) : self
    {
        $this->initialized['domainNameVariants'] = true;
        $this->domainNameVariants = $domainNameVariants;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIntendedUse() : ?string
    {
        return $this->intendedUse;
    }
    /**
     * 
     *
     * @param string|null $intendedUse
     *
     * @return self
     */
    public function setIntendedUse(?string $intendedUse) : self
    {
        $this->initialized['intendedUse'] = true;
        $this->intendedUse = $intendedUse;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLawAcceptance() : ?string
    {
        return $this->lawAcceptance;
    }
    /**
     * 
     *
     * @param string|null $lawAcceptance
     *
     * @return self
     */
    public function setLawAcceptance(?string $lawAcceptance) : self
    {
        $this->initialized['lawAcceptance'] = true;
        $this->lawAcceptance = $lawAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMaintainer() : ?string
    {
        return $this->maintainer;
    }
    /**
     * 
     *
     * @param string|null $maintainer
     *
     * @return self
     */
    public function setMaintainer(?string $maintainer) : self
    {
        $this->initialized['maintainer'] = true;
        $this->maintainer = $maintainer;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMembershipId() : ?string
    {
        return $this->membershipId;
    }
    /**
     * 
     *
     * @param string|null $membershipId
     *
     * @return self
     */
    public function setMembershipId(?string $membershipId) : self
    {
        $this->initialized['membershipId'] = true;
        $this->membershipId = $membershipId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMobilePhoneNumberVerification() : ?string
    {
        return $this->mobilePhoneNumberVerification;
    }
    /**
     * 
     *
     * @param string|null $mobilePhoneNumberVerification
     *
     * @return self
     */
    public function setMobilePhoneNumberVerification(?string $mobilePhoneNumberVerification) : self
    {
        $this->initialized['mobilePhoneNumberVerification'] = true;
        $this->mobilePhoneNumberVerification = $mobilePhoneNumberVerification;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNgoOngEligibilityAcceptance() : ?string
    {
        return $this->ngoOngEligibilityAcceptance;
    }
    /**
     * 
     *
     * @param string|null $ngoOngEligibilityAcceptance
     *
     * @return self
     */
    public function setNgoOngEligibilityAcceptance(?string $ngoOngEligibilityAcceptance) : self
    {
        $this->initialized['ngoOngEligibilityAcceptance'] = true;
        $this->ngoOngEligibilityAcceptance = $ngoOngEligibilityAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNgoOngPolicyAcceptance() : ?string
    {
        return $this->ngoOngPolicyAcceptance;
    }
    /**
     * 
     *
     * @param string|null $ngoOngPolicyAcceptance
     *
     * @return self
     */
    public function setNgoOngPolicyAcceptance(?string $ngoOngPolicyAcceptance) : self
    {
        $this->initialized['ngoOngPolicyAcceptance'] = true;
        $this->ngoOngPolicyAcceptance = $ngoOngPolicyAcceptance;
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
    /**
     * 
     *
     * @return string|null
     */
    public function getVerificationCode() : ?string
    {
        return $this->verificationCode;
    }
    /**
     * 
     *
     * @param string|null $verificationCode
     *
     * @return self
     */
    public function setVerificationCode(?string $verificationCode) : self
    {
        $this->initialized['verificationCode'] = true;
        $this->verificationCode = $verificationCode;
        return $this;
    }
}