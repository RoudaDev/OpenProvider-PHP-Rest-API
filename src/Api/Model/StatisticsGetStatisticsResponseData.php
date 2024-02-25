<?php

namespace Rouda\OpenProvider\Api\Model;

class StatisticsGetStatisticsResponseData
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
     * @var StatisticsCurrencyStatistics|null
     */
    protected $currency;
    /**
     * 
     *
     * @var StatisticsCustomerStatistics|null
     */
    protected $customer;
    /**
     * 
     *
     * @var StatisticsDnsStatistics|null
     */
    protected $dns;
    /**
     * 
     *
     * @var StatisticsDomainStatistics|null
     */
    protected $domain;
    /**
     * 
     *
     * @var StatisticsLicenseStatistics|null
     */
    protected $license;
    /**
     * 
     *
     * @var StatisticsSpamExpertsStatistics|null
     */
    protected $spamExperts;
    /**
     * 
     *
     * @var StatisticsSslStatistics|null
     */
    protected $ssl;
    /**
     * 
     *
     * @return StatisticsCurrencyStatistics|null
     */
    public function getCurrency() : ?StatisticsCurrencyStatistics
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param StatisticsCurrencyStatistics|null $currency
     *
     * @return self
     */
    public function setCurrency(?StatisticsCurrencyStatistics $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsCustomerStatistics|null
     */
    public function getCustomer() : ?StatisticsCustomerStatistics
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param StatisticsCustomerStatistics|null $customer
     *
     * @return self
     */
    public function setCustomer(?StatisticsCustomerStatistics $customer) : self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsDnsStatistics|null
     */
    public function getDns() : ?StatisticsDnsStatistics
    {
        return $this->dns;
    }
    /**
     * 
     *
     * @param StatisticsDnsStatistics|null $dns
     *
     * @return self
     */
    public function setDns(?StatisticsDnsStatistics $dns) : self
    {
        $this->initialized['dns'] = true;
        $this->dns = $dns;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsDomainStatistics|null
     */
    public function getDomain() : ?StatisticsDomainStatistics
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param StatisticsDomainStatistics|null $domain
     *
     * @return self
     */
    public function setDomain(?StatisticsDomainStatistics $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsLicenseStatistics|null
     */
    public function getLicense() : ?StatisticsLicenseStatistics
    {
        return $this->license;
    }
    /**
     * 
     *
     * @param StatisticsLicenseStatistics|null $license
     *
     * @return self
     */
    public function setLicense(?StatisticsLicenseStatistics $license) : self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsSpamExpertsStatistics|null
     */
    public function getSpamExperts() : ?StatisticsSpamExpertsStatistics
    {
        return $this->spamExperts;
    }
    /**
     * 
     *
     * @param StatisticsSpamExpertsStatistics|null $spamExperts
     *
     * @return self
     */
    public function setSpamExperts(?StatisticsSpamExpertsStatistics $spamExperts) : self
    {
        $this->initialized['spamExperts'] = true;
        $this->spamExperts = $spamExperts;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsSslStatistics|null
     */
    public function getSsl() : ?StatisticsSslStatistics
    {
        return $this->ssl;
    }
    /**
     * 
     *
     * @param StatisticsSslStatistics|null $ssl
     *
     * @return self
     */
    public function setSsl(?StatisticsSslStatistics $ssl) : self
    {
        $this->initialized['ssl'] = true;
        $this->ssl = $ssl;
        return $this;
    }
}