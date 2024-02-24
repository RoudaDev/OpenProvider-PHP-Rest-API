<?php

namespace Rouda\OpenProviderAPI\Model;

class SettingsGetSettingsResponseData
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
    protected $avHandle;
    /**
     * 
     *
     * @var string
     */
    protected $claimsConfirmUrl;
    /**
     * 
     *
     * @var string
     */
    protected $claimsEmailSubject;
    /**
     * 
     *
     * @var string
     */
    protected $claimsResellerName;
    /**
     * 
     *
     * @var string
     */
    protected $claimsSenderEmail;
    /**
     * 
     *
     * @var string
     */
    protected $currency;
    /**
     * 
     *
     * @var string
     */
    protected $defaultDomainBillingHandle;
    /**
     * 
     *
     * @var string
     */
    protected $defaultDomainResellerHandle;
    /**
     * 
     *
     * @var string
     */
    protected $foaConfirmUrl;
    /**
     * 
     *
     * @var string
     */
    protected $foaEmailSubject;
    /**
     * 
     *
     * @var string
     */
    protected $foaResellerName;
    /**
     * 
     *
     * @var string
     */
    protected $foaSenderEmail;
    /**
     * 
     *
     * @var string
     */
    protected $foaTermsConditionsUrl;
    /**
     * 
     *
     * @var bool
     */
    protected $isAutoRenewEnabled;
    /**
     * 
     *
     * @var bool
     */
    protected $isCustomNsesEnabled;
    /**
     * 
     *
     * @var string
     */
    protected $ive2CustomizedBody;
    /**
     * 
     *
     * @var string
     */
    protected $ive2EmailSubject;
    /**
     * 
     *
     * @var string
     */
    protected $iveConfirmUrl;
    /**
     * 
     *
     * @var string
     */
    protected $iveCustomizedBody;
    /**
     * 
     *
     * @var string
     */
    protected $iveEmailSubject;
    /**
     * 
     *
     * @var string
     */
    protected $iveResellerName;
    /**
     * 
     *
     * @var string
     */
    protected $iveSenderEmail;
    /**
     * 
     *
     * @var string
     */
    protected $jurisdiction;
    /**
     * 
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var float
     */
    protected $maximumCredit;
    /**
     * 
     *
     * @var float
     */
    protected $maximumCreditCardPayment;
    /**
     * 
     *
     * @var float
     */
    protected $maximumIDealPayment;
    /**
     * 
     *
     * @var float
     */
    protected $maximumWesternUnionPayment;
    /**
     * 
     *
     * @var float
     */
    protected $minimumPayment;
    /**
     * 
     *
     * @var float
     */
    protected $minimumWesternUnionPayment;
    /**
     * 
     *
     * @var string[]
     */
    protected $payMethods;
    /**
     * 
     *
     * @var SettingsPaymentMethods[]
     */
    protected $paymentMethods;
    /**
     * 
     *
     * @var string
     */
    protected $preregisteredDomainPriorities;
    /**
     * 
     *
     * @var SettingsPaymentMethods[]
     */
    protected $recurringPaymentMethods;
    /**
     * 
     *
     * @var int[]
     */
    protected $renewNotificationDays;
    /**
     * 
     *
     * @var bool
     */
    protected $renewNotificationEveryWeek;
    /**
     * 
     *
     * @var SettingsSignedContracts[]
     */
    protected $signedContracts;
    /**
     * 
     *
     * @var SettingsTacContract
     */
    protected $tacContract;
    /**
     * 
     *
     * @var string[]
     */
    protected $tags;
    /**
     * 
     *
     * @var SettingsTransactionFee
     */
    protected $transactionFee;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return string
     */
    public function getAvHandle() : string
    {
        return $this->avHandle;
    }
    /**
     * 
     *
     * @param string $avHandle
     *
     * @return self
     */
    public function setAvHandle(string $avHandle) : self
    {
        $this->initialized['avHandle'] = true;
        $this->avHandle = $avHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClaimsConfirmUrl() : string
    {
        return $this->claimsConfirmUrl;
    }
    /**
     * 
     *
     * @param string $claimsConfirmUrl
     *
     * @return self
     */
    public function setClaimsConfirmUrl(string $claimsConfirmUrl) : self
    {
        $this->initialized['claimsConfirmUrl'] = true;
        $this->claimsConfirmUrl = $claimsConfirmUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClaimsEmailSubject() : string
    {
        return $this->claimsEmailSubject;
    }
    /**
     * 
     *
     * @param string $claimsEmailSubject
     *
     * @return self
     */
    public function setClaimsEmailSubject(string $claimsEmailSubject) : self
    {
        $this->initialized['claimsEmailSubject'] = true;
        $this->claimsEmailSubject = $claimsEmailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClaimsResellerName() : string
    {
        return $this->claimsResellerName;
    }
    /**
     * 
     *
     * @param string $claimsResellerName
     *
     * @return self
     */
    public function setClaimsResellerName(string $claimsResellerName) : self
    {
        $this->initialized['claimsResellerName'] = true;
        $this->claimsResellerName = $claimsResellerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getClaimsSenderEmail() : string
    {
        return $this->claimsSenderEmail;
    }
    /**
     * 
     *
     * @param string $claimsSenderEmail
     *
     * @return self
     */
    public function setClaimsSenderEmail(string $claimsSenderEmail) : self
    {
        $this->initialized['claimsSenderEmail'] = true;
        $this->claimsSenderEmail = $claimsSenderEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCurrency() : string
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultDomainBillingHandle() : string
    {
        return $this->defaultDomainBillingHandle;
    }
    /**
     * 
     *
     * @param string $defaultDomainBillingHandle
     *
     * @return self
     */
    public function setDefaultDomainBillingHandle(string $defaultDomainBillingHandle) : self
    {
        $this->initialized['defaultDomainBillingHandle'] = true;
        $this->defaultDomainBillingHandle = $defaultDomainBillingHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultDomainResellerHandle() : string
    {
        return $this->defaultDomainResellerHandle;
    }
    /**
     * 
     *
     * @param string $defaultDomainResellerHandle
     *
     * @return self
     */
    public function setDefaultDomainResellerHandle(string $defaultDomainResellerHandle) : self
    {
        $this->initialized['defaultDomainResellerHandle'] = true;
        $this->defaultDomainResellerHandle = $defaultDomainResellerHandle;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoaConfirmUrl() : string
    {
        return $this->foaConfirmUrl;
    }
    /**
     * 
     *
     * @param string $foaConfirmUrl
     *
     * @return self
     */
    public function setFoaConfirmUrl(string $foaConfirmUrl) : self
    {
        $this->initialized['foaConfirmUrl'] = true;
        $this->foaConfirmUrl = $foaConfirmUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoaEmailSubject() : string
    {
        return $this->foaEmailSubject;
    }
    /**
     * 
     *
     * @param string $foaEmailSubject
     *
     * @return self
     */
    public function setFoaEmailSubject(string $foaEmailSubject) : self
    {
        $this->initialized['foaEmailSubject'] = true;
        $this->foaEmailSubject = $foaEmailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoaResellerName() : string
    {
        return $this->foaResellerName;
    }
    /**
     * 
     *
     * @param string $foaResellerName
     *
     * @return self
     */
    public function setFoaResellerName(string $foaResellerName) : self
    {
        $this->initialized['foaResellerName'] = true;
        $this->foaResellerName = $foaResellerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoaSenderEmail() : string
    {
        return $this->foaSenderEmail;
    }
    /**
     * 
     *
     * @param string $foaSenderEmail
     *
     * @return self
     */
    public function setFoaSenderEmail(string $foaSenderEmail) : self
    {
        $this->initialized['foaSenderEmail'] = true;
        $this->foaSenderEmail = $foaSenderEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFoaTermsConditionsUrl() : string
    {
        return $this->foaTermsConditionsUrl;
    }
    /**
     * 
     *
     * @param string $foaTermsConditionsUrl
     *
     * @return self
     */
    public function setFoaTermsConditionsUrl(string $foaTermsConditionsUrl) : self
    {
        $this->initialized['foaTermsConditionsUrl'] = true;
        $this->foaTermsConditionsUrl = $foaTermsConditionsUrl;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsAutoRenewEnabled() : bool
    {
        return $this->isAutoRenewEnabled;
    }
    /**
     * 
     *
     * @param bool $isAutoRenewEnabled
     *
     * @return self
     */
    public function setIsAutoRenewEnabled(bool $isAutoRenewEnabled) : self
    {
        $this->initialized['isAutoRenewEnabled'] = true;
        $this->isAutoRenewEnabled = $isAutoRenewEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsCustomNsesEnabled() : bool
    {
        return $this->isCustomNsesEnabled;
    }
    /**
     * 
     *
     * @param bool $isCustomNsesEnabled
     *
     * @return self
     */
    public function setIsCustomNsesEnabled(bool $isCustomNsesEnabled) : self
    {
        $this->initialized['isCustomNsesEnabled'] = true;
        $this->isCustomNsesEnabled = $isCustomNsesEnabled;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIve2CustomizedBody() : string
    {
        return $this->ive2CustomizedBody;
    }
    /**
     * 
     *
     * @param string $ive2CustomizedBody
     *
     * @return self
     */
    public function setIve2CustomizedBody(string $ive2CustomizedBody) : self
    {
        $this->initialized['ive2CustomizedBody'] = true;
        $this->ive2CustomizedBody = $ive2CustomizedBody;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIve2EmailSubject() : string
    {
        return $this->ive2EmailSubject;
    }
    /**
     * 
     *
     * @param string $ive2EmailSubject
     *
     * @return self
     */
    public function setIve2EmailSubject(string $ive2EmailSubject) : self
    {
        $this->initialized['ive2EmailSubject'] = true;
        $this->ive2EmailSubject = $ive2EmailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIveConfirmUrl() : string
    {
        return $this->iveConfirmUrl;
    }
    /**
     * 
     *
     * @param string $iveConfirmUrl
     *
     * @return self
     */
    public function setIveConfirmUrl(string $iveConfirmUrl) : self
    {
        $this->initialized['iveConfirmUrl'] = true;
        $this->iveConfirmUrl = $iveConfirmUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIveCustomizedBody() : string
    {
        return $this->iveCustomizedBody;
    }
    /**
     * 
     *
     * @param string $iveCustomizedBody
     *
     * @return self
     */
    public function setIveCustomizedBody(string $iveCustomizedBody) : self
    {
        $this->initialized['iveCustomizedBody'] = true;
        $this->iveCustomizedBody = $iveCustomizedBody;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIveEmailSubject() : string
    {
        return $this->iveEmailSubject;
    }
    /**
     * 
     *
     * @param string $iveEmailSubject
     *
     * @return self
     */
    public function setIveEmailSubject(string $iveEmailSubject) : self
    {
        $this->initialized['iveEmailSubject'] = true;
        $this->iveEmailSubject = $iveEmailSubject;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIveResellerName() : string
    {
        return $this->iveResellerName;
    }
    /**
     * 
     *
     * @param string $iveResellerName
     *
     * @return self
     */
    public function setIveResellerName(string $iveResellerName) : self
    {
        $this->initialized['iveResellerName'] = true;
        $this->iveResellerName = $iveResellerName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIveSenderEmail() : string
    {
        return $this->iveSenderEmail;
    }
    /**
     * 
     *
     * @param string $iveSenderEmail
     *
     * @return self
     */
    public function setIveSenderEmail(string $iveSenderEmail) : self
    {
        $this->initialized['iveSenderEmail'] = true;
        $this->iveSenderEmail = $iveSenderEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJurisdiction() : string
    {
        return $this->jurisdiction;
    }
    /**
     * 
     *
     * @param string $jurisdiction
     *
     * @return self
     */
    public function setJurisdiction(string $jurisdiction) : self
    {
        $this->initialized['jurisdiction'] = true;
        $this->jurisdiction = $jurisdiction;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLanguage() : string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language) : self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaximumCredit() : float
    {
        return $this->maximumCredit;
    }
    /**
     * 
     *
     * @param float $maximumCredit
     *
     * @return self
     */
    public function setMaximumCredit(float $maximumCredit) : self
    {
        $this->initialized['maximumCredit'] = true;
        $this->maximumCredit = $maximumCredit;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaximumCreditCardPayment() : float
    {
        return $this->maximumCreditCardPayment;
    }
    /**
     * 
     *
     * @param float $maximumCreditCardPayment
     *
     * @return self
     */
    public function setMaximumCreditCardPayment(float $maximumCreditCardPayment) : self
    {
        $this->initialized['maximumCreditCardPayment'] = true;
        $this->maximumCreditCardPayment = $maximumCreditCardPayment;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaximumIDealPayment() : float
    {
        return $this->maximumIDealPayment;
    }
    /**
     * 
     *
     * @param float $maximumIDealPayment
     *
     * @return self
     */
    public function setMaximumIDealPayment(float $maximumIDealPayment) : self
    {
        $this->initialized['maximumIDealPayment'] = true;
        $this->maximumIDealPayment = $maximumIDealPayment;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaximumWesternUnionPayment() : float
    {
        return $this->maximumWesternUnionPayment;
    }
    /**
     * 
     *
     * @param float $maximumWesternUnionPayment
     *
     * @return self
     */
    public function setMaximumWesternUnionPayment(float $maximumWesternUnionPayment) : self
    {
        $this->initialized['maximumWesternUnionPayment'] = true;
        $this->maximumWesternUnionPayment = $maximumWesternUnionPayment;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMinimumPayment() : float
    {
        return $this->minimumPayment;
    }
    /**
     * 
     *
     * @param float $minimumPayment
     *
     * @return self
     */
    public function setMinimumPayment(float $minimumPayment) : self
    {
        $this->initialized['minimumPayment'] = true;
        $this->minimumPayment = $minimumPayment;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMinimumWesternUnionPayment() : float
    {
        return $this->minimumWesternUnionPayment;
    }
    /**
     * 
     *
     * @param float $minimumWesternUnionPayment
     *
     * @return self
     */
    public function setMinimumWesternUnionPayment(float $minimumWesternUnionPayment) : self
    {
        $this->initialized['minimumWesternUnionPayment'] = true;
        $this->minimumWesternUnionPayment = $minimumWesternUnionPayment;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getPayMethods() : array
    {
        return $this->payMethods;
    }
    /**
     * 
     *
     * @param string[] $payMethods
     *
     * @return self
     */
    public function setPayMethods(array $payMethods) : self
    {
        $this->initialized['payMethods'] = true;
        $this->payMethods = $payMethods;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsPaymentMethods[]
     */
    public function getPaymentMethods() : array
    {
        return $this->paymentMethods;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethods[] $paymentMethods
     *
     * @return self
     */
    public function setPaymentMethods(array $paymentMethods) : self
    {
        $this->initialized['paymentMethods'] = true;
        $this->paymentMethods = $paymentMethods;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPreregisteredDomainPriorities() : string
    {
        return $this->preregisteredDomainPriorities;
    }
    /**
     * 
     *
     * @param string $preregisteredDomainPriorities
     *
     * @return self
     */
    public function setPreregisteredDomainPriorities(string $preregisteredDomainPriorities) : self
    {
        $this->initialized['preregisteredDomainPriorities'] = true;
        $this->preregisteredDomainPriorities = $preregisteredDomainPriorities;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsPaymentMethods[]
     */
    public function getRecurringPaymentMethods() : array
    {
        return $this->recurringPaymentMethods;
    }
    /**
     * 
     *
     * @param SettingsPaymentMethods[] $recurringPaymentMethods
     *
     * @return self
     */
    public function setRecurringPaymentMethods(array $recurringPaymentMethods) : self
    {
        $this->initialized['recurringPaymentMethods'] = true;
        $this->recurringPaymentMethods = $recurringPaymentMethods;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getRenewNotificationDays() : array
    {
        return $this->renewNotificationDays;
    }
    /**
     * 
     *
     * @param int[] $renewNotificationDays
     *
     * @return self
     */
    public function setRenewNotificationDays(array $renewNotificationDays) : self
    {
        $this->initialized['renewNotificationDays'] = true;
        $this->renewNotificationDays = $renewNotificationDays;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRenewNotificationEveryWeek() : bool
    {
        return $this->renewNotificationEveryWeek;
    }
    /**
     * 
     *
     * @param bool $renewNotificationEveryWeek
     *
     * @return self
     */
    public function setRenewNotificationEveryWeek(bool $renewNotificationEveryWeek) : self
    {
        $this->initialized['renewNotificationEveryWeek'] = true;
        $this->renewNotificationEveryWeek = $renewNotificationEveryWeek;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsSignedContracts[]
     */
    public function getSignedContracts() : array
    {
        return $this->signedContracts;
    }
    /**
     * 
     *
     * @param SettingsSignedContracts[] $signedContracts
     *
     * @return self
     */
    public function setSignedContracts(array $signedContracts) : self
    {
        $this->initialized['signedContracts'] = true;
        $this->signedContracts = $signedContracts;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsTacContract
     */
    public function getTacContract() : SettingsTacContract
    {
        return $this->tacContract;
    }
    /**
     * 
     *
     * @param SettingsTacContract $tacContract
     *
     * @return self
     */
    public function setTacContract(SettingsTacContract $tacContract) : self
    {
        $this->initialized['tacContract'] = true;
        $this->tacContract = $tacContract;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param string[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
    /**
     * 
     *
     * @return SettingsTransactionFee
     */
    public function getTransactionFee() : SettingsTransactionFee
    {
        return $this->transactionFee;
    }
    /**
     * 
     *
     * @param SettingsTransactionFee $transactionFee
     *
     * @return self
     */
    public function setTransactionFee(SettingsTransactionFee $transactionFee) : self
    {
        $this->initialized['transactionFee'] = true;
        $this->transactionFee = $transactionFee;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}