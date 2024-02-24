<?php

namespace Rouda\OpenProviderAPI\Model;

class ResellerStatistics
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
     * @var StatisticsCurrencyStatistics
     */
    protected $currency;
    /**
     * 
     *
     * @var StatisticsCustomerStatistics
     */
    protected $customer;
    /**
     * 
     *
     * @var StatisticsDnsStatistics
     */
    protected $dns;
    /**
     * 
     *
     * @var StatisticsDomainStatistics
     */
    protected $domain;
    /**
     * 
     *
     * @var int
     */
    protected $level;
    /**
     * 
     *
     * @var StatisticsLicenseStatistics
     */
    protected $license;
    /**
     * 
     *
     * @var StatisticsSpamExpertsStatistics
     */
    protected $spamExperts;
    /**
     * 
     *
     * @var StatisticsSslStatistics
     */
    protected $ssl;
    /**
     * 
     *
     * @return StatisticsCurrencyStatistics
     */
    public function getCurrency() : StatisticsCurrencyStatistics
    {
        return $this->currency;
    }
    /**
     * 
     *
     * @param StatisticsCurrencyStatistics $currency
     *
     * @return self
     */
    public function setCurrency(StatisticsCurrencyStatistics $currency) : self
    {
        $this->initialized['currency'] = true;
        $this->currency = $currency;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsCustomerStatistics
     */
    public function getCustomer() : StatisticsCustomerStatistics
    {
        return $this->customer;
    }
    /**
     * 
     *
     * @param StatisticsCustomerStatistics $customer
     *
     * @return self
     */
    public function setCustomer(StatisticsCustomerStatistics $customer) : self
    {
        $this->initialized['customer'] = true;
        $this->customer = $customer;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsDnsStatistics
     */
    public function getDns() : StatisticsDnsStatistics
    {
        return $this->dns;
    }
    /**
     * 
     *
     * @param StatisticsDnsStatistics $dns
     *
     * @return self
     */
    public function setDns(StatisticsDnsStatistics $dns) : self
    {
        $this->initialized['dns'] = true;
        $this->dns = $dns;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsDomainStatistics
     */
    public function getDomain() : StatisticsDomainStatistics
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param StatisticsDomainStatistics $domain
     *
     * @return self
     */
    public function setDomain(StatisticsDomainStatistics $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }
    /**
     * 
     *
     * @param int $level
     *
     * @return self
     */
    public function setLevel(int $level) : self
    {
        $this->initialized['level'] = true;
        $this->level = $level;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsLicenseStatistics
     */
    public function getLicense() : StatisticsLicenseStatistics
    {
        return $this->license;
    }
    /**
     * 
     *
     * @param StatisticsLicenseStatistics $license
     *
     * @return self
     */
    public function setLicense(StatisticsLicenseStatistics $license) : self
    {
        $this->initialized['license'] = true;
        $this->license = $license;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsSpamExpertsStatistics
     */
    public function getSpamExperts() : StatisticsSpamExpertsStatistics
    {
        return $this->spamExperts;
    }
    /**
     * 
     *
     * @param StatisticsSpamExpertsStatistics $spamExperts
     *
     * @return self
     */
    public function setSpamExperts(StatisticsSpamExpertsStatistics $spamExperts) : self
    {
        $this->initialized['spamExperts'] = true;
        $this->spamExperts = $spamExperts;
        return $this;
    }
    /**
     * 
     *
     * @return StatisticsSslStatistics
     */
    public function getSsl() : StatisticsSslStatistics
    {
        return $this->ssl;
    }
    /**
     * 
     *
     * @param StatisticsSslStatistics $ssl
     *
     * @return self
     */
    public function setSsl(StatisticsSslStatistics $ssl) : self
    {
        $this->initialized['ssl'] = true;
        $this->ssl = $ssl;
        return $this;
    }
}