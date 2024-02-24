<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainAdditionalData
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
    protected $aeAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $allocationToken;
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
    protected $bankAcceptance;
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
    protected $coopAcceptance;
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
    protected $eligibilityType;
    /**
     * 
     *
     * @var string
     */
    protected $eligibilityTypeRelationship;
    /**
     * 
     *
     * @var string
     */
    protected $esAnnexAcceptance;
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
    protected $idNumber;
    /**
     * 
     *
     * @var string
     */
    protected $idType;
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
    protected $insuranceAcceptance;
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
    protected $rurfBlockedDomains;
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
    protected $trademarkId;
    /**
     * 
     *
     * @var string
     */
    protected $travelAcceptance;
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
     * @var string
     */
    protected $voteAcceptance;
    /**
     * 
     *
     * @var string
     */
    protected $votoAcceptance;
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
    public function getAeAcceptance() : string
    {
        return $this->aeAcceptance;
    }
    /**
     * 
     *
     * @param string $aeAcceptance
     *
     * @return self
     */
    public function setAeAcceptance(string $aeAcceptance) : self
    {
        $this->initialized['aeAcceptance'] = true;
        $this->aeAcceptance = $aeAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAllocationToken() : string
    {
        return $this->allocationToken;
    }
    /**
     * 
     *
     * @param string $allocationToken
     *
     * @return self
     */
    public function setAllocationToken(string $allocationToken) : self
    {
        $this->initialized['allocationToken'] = true;
        $this->allocationToken = $allocationToken;
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
    public function getBankAcceptance() : string
    {
        return $this->bankAcceptance;
    }
    /**
     * 
     *
     * @param string $bankAcceptance
     *
     * @return self
     */
    public function setBankAcceptance(string $bankAcceptance) : self
    {
        $this->initialized['bankAcceptance'] = true;
        $this->bankAcceptance = $bankAcceptance;
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
    public function getCoopAcceptance() : string
    {
        return $this->coopAcceptance;
    }
    /**
     * 
     *
     * @param string $coopAcceptance
     *
     * @return self
     */
    public function setCoopAcceptance(string $coopAcceptance) : self
    {
        $this->initialized['coopAcceptance'] = true;
        $this->coopAcceptance = $coopAcceptance;
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
    public function getEligibilityType() : string
    {
        return $this->eligibilityType;
    }
    /**
     * 
     *
     * @param string $eligibilityType
     *
     * @return self
     */
    public function setEligibilityType(string $eligibilityType) : self
    {
        $this->initialized['eligibilityType'] = true;
        $this->eligibilityType = $eligibilityType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEligibilityTypeRelationship() : string
    {
        return $this->eligibilityTypeRelationship;
    }
    /**
     * 
     *
     * @param string $eligibilityTypeRelationship
     *
     * @return self
     */
    public function setEligibilityTypeRelationship(string $eligibilityTypeRelationship) : self
    {
        $this->initialized['eligibilityTypeRelationship'] = true;
        $this->eligibilityTypeRelationship = $eligibilityTypeRelationship;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEsAnnexAcceptance() : string
    {
        return $this->esAnnexAcceptance;
    }
    /**
     * 
     *
     * @param string $esAnnexAcceptance
     *
     * @return self
     */
    public function setEsAnnexAcceptance(string $esAnnexAcceptance) : self
    {
        $this->initialized['esAnnexAcceptance'] = true;
        $this->esAnnexAcceptance = $esAnnexAcceptance;
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
    public function getIdNumber() : string
    {
        return $this->idNumber;
    }
    /**
     * 
     *
     * @param string $idNumber
     *
     * @return self
     */
    public function setIdNumber(string $idNumber) : self
    {
        $this->initialized['idNumber'] = true;
        $this->idNumber = $idNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIdType() : string
    {
        return $this->idType;
    }
    /**
     * 
     *
     * @param string $idType
     *
     * @return self
     */
    public function setIdType(string $idType) : self
    {
        $this->initialized['idType'] = true;
        $this->idType = $idType;
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
    public function getInsuranceAcceptance() : string
    {
        return $this->insuranceAcceptance;
    }
    /**
     * 
     *
     * @param string $insuranceAcceptance
     *
     * @return self
     */
    public function setInsuranceAcceptance(string $insuranceAcceptance) : self
    {
        $this->initialized['insuranceAcceptance'] = true;
        $this->insuranceAcceptance = $insuranceAcceptance;
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
    public function getRurfBlockedDomains() : string
    {
        return $this->rurfBlockedDomains;
    }
    /**
     * 
     *
     * @param string $rurfBlockedDomains
     *
     * @return self
     */
    public function setRurfBlockedDomains(string $rurfBlockedDomains) : self
    {
        $this->initialized['rurfBlockedDomains'] = true;
        $this->rurfBlockedDomains = $rurfBlockedDomains;
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
    public function getTrademarkId() : string
    {
        return $this->trademarkId;
    }
    /**
     * 
     *
     * @param string $trademarkId
     *
     * @return self
     */
    public function setTrademarkId(string $trademarkId) : self
    {
        $this->initialized['trademarkId'] = true;
        $this->trademarkId = $trademarkId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTravelAcceptance() : string
    {
        return $this->travelAcceptance;
    }
    /**
     * 
     *
     * @param string $travelAcceptance
     *
     * @return self
     */
    public function setTravelAcceptance(string $travelAcceptance) : self
    {
        $this->initialized['travelAcceptance'] = true;
        $this->travelAcceptance = $travelAcceptance;
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
    /**
     * 
     *
     * @return string
     */
    public function getVoteAcceptance() : string
    {
        return $this->voteAcceptance;
    }
    /**
     * 
     *
     * @param string $voteAcceptance
     *
     * @return self
     */
    public function setVoteAcceptance(string $voteAcceptance) : self
    {
        $this->initialized['voteAcceptance'] = true;
        $this->voteAcceptance = $voteAcceptance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVotoAcceptance() : string
    {
        return $this->votoAcceptance;
    }
    /**
     * 
     *
     * @param string $votoAcceptance
     *
     * @return self
     */
    public function setVotoAcceptance(string $votoAcceptance) : self
    {
        $this->initialized['votoAcceptance'] = true;
        $this->votoAcceptance = $votoAcceptance;
        return $this;
    }
}