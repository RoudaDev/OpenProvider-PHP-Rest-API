<?php

namespace Rouda\OpenProviderAPI\Model;

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
    protected $ftldToken;
    /**
     * 
     *
     * @var string
     */
    protected $gayDonationAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $gayRightsProtectionAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $idnScript;
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
    protected $legalType;
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
    protected $passportNumber;
    /**
     * 
     *
     * @var string
     */
    protected $selfService;
    /**
     * 
     *
     * @var string
     */
    protected $trademark;
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
    public function getFtldToken() : string
    {
        return $this->ftldToken;
    }
    /**
     * 
     *
     * @param string $ftldToken
     *
     * @return self
     */
    public function setFtldToken(string $ftldToken) : self
    {
        $this->initialized['ftldToken'] = true;
        $this->ftldToken = $ftldToken;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGayDonationAcceptance() : string
    {
        return $this->gayDonationAcceptance;
    }
    /**
     * 
     *
     * @param string $gayDonationAcceptance
     *
     * @return self
     */
    public function setGayDonationAcceptance(string $gayDonationAcceptance) : self
    {
        $this->initialized['gayDonationAcceptance'] = true;
        $this->gayDonationAcceptance = $gayDonationAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGayRightsProtectionAcceptance() : string
    {
        return $this->gayRightsProtectionAcceptance;
    }
    /**
     * 
     *
     * @param string $gayRightsProtectionAcceptance
     *
     * @return self
     */
    public function setGayRightsProtectionAcceptance(string $gayRightsProtectionAcceptance) : self
    {
        $this->initialized['gayRightsProtectionAcceptance'] = true;
        $this->gayRightsProtectionAcceptance = $gayRightsProtectionAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIdnScript() : string
    {
        return $this->idnScript;
    }
    /**
     * 
     *
     * @param string $idnScript
     *
     * @return self
     */
    public function setIdnScript(string $idnScript) : self
    {
        $this->initialized['idnScript'] = true;
        $this->idnScript = $idnScript;
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
    public function getSelfService() : string
    {
        return $this->selfService;
    }
    /**
     * 
     *
     * @param string $selfService
     *
     * @return self
     */
    public function setSelfService(string $selfService) : self
    {
        $this->initialized['selfService'] = true;
        $this->selfService = $selfService;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrademark() : string
    {
        return $this->trademark;
    }
    /**
     * 
     *
     * @param string $trademark
     *
     * @return self
     */
    public function setTrademark(string $trademark) : self
    {
        $this->initialized['trademark'] = true;
        $this->trademark = $trademark;
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