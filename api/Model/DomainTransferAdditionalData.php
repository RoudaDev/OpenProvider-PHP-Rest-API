<?php

namespace Rouda\OpenProvider\Api\Model;

class DomainTransferAdditionalData
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
    protected $ftldToken;
    /**
     * 
     *
     * @var string|null
     */
    protected $gayDonationAcceptance;
    /**
     * 
     *
     * @var string|null
     */
    protected $gayRightsProtectionAcceptance;
    /**
     * 
     *
     * @var string|null
     */
    protected $idnScript;
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
    protected $legalType;
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
    protected $passportNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $selfService;
    /**
     * 
     *
     * @var string|null
     */
    protected $trademark;
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
    public function getFtldToken() : ?string
    {
        return $this->ftldToken;
    }
    /**
     * 
     *
     * @param string|null $ftldToken
     *
     * @return self
     */
    public function setFtldToken(?string $ftldToken) : self
    {
        $this->initialized['ftldToken'] = true;
        $this->ftldToken = $ftldToken;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGayDonationAcceptance() : ?string
    {
        return $this->gayDonationAcceptance;
    }
    /**
     * 
     *
     * @param string|null $gayDonationAcceptance
     *
     * @return self
     */
    public function setGayDonationAcceptance(?string $gayDonationAcceptance) : self
    {
        $this->initialized['gayDonationAcceptance'] = true;
        $this->gayDonationAcceptance = $gayDonationAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getGayRightsProtectionAcceptance() : ?string
    {
        return $this->gayRightsProtectionAcceptance;
    }
    /**
     * 
     *
     * @param string|null $gayRightsProtectionAcceptance
     *
     * @return self
     */
    public function setGayRightsProtectionAcceptance(?string $gayRightsProtectionAcceptance) : self
    {
        $this->initialized['gayRightsProtectionAcceptance'] = true;
        $this->gayRightsProtectionAcceptance = $gayRightsProtectionAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIdnScript() : ?string
    {
        return $this->idnScript;
    }
    /**
     * 
     *
     * @param string|null $idnScript
     *
     * @return self
     */
    public function setIdnScript(?string $idnScript) : self
    {
        $this->initialized['idnScript'] = true;
        $this->idnScript = $idnScript;
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
    public function getLegalType() : ?string
    {
        return $this->legalType;
    }
    /**
     * 
     *
     * @param string|null $legalType
     *
     * @return self
     */
    public function setLegalType(?string $legalType) : self
    {
        $this->initialized['legalType'] = true;
        $this->legalType = $legalType;
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
    public function getSelfService() : ?string
    {
        return $this->selfService;
    }
    /**
     * 
     *
     * @param string|null $selfService
     *
     * @return self
     */
    public function setSelfService(?string $selfService) : self
    {
        $this->initialized['selfService'] = true;
        $this->selfService = $selfService;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getTrademark() : ?string
    {
        return $this->trademark;
    }
    /**
     * 
     *
     * @param string|null $trademark
     *
     * @return self
     */
    public function setTrademark(?string $trademark) : self
    {
        $this->initialized['trademark'] = true;
        $this->trademark = $trademark;
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