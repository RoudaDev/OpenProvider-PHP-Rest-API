<?php

namespace Rouda\OpenProviderAPI\Model;

class DomainCheckDomainResult
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
    protected $claimKey;
    /**
     * 
     *
     * @var string
     */
    protected $domain;
    /**
     * 
     *
     * @var bool
     */
    protected $isPremium;
    /**
     * 
     *
     * @var DomainPremiumPrice
     */
    protected $premium;
    /**
     * 
     *
     * @var DomainPriceGroup
     */
    protected $price;
    /**
     * 
     *
     * @var string
     */
    protected $reason;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string
     */
    protected $whois;
    /**
     * 
     *
     * @return string
     */
    public function getClaimKey() : string
    {
        return $this->claimKey;
    }
    /**
     * 
     *
     * @param string $claimKey
     *
     * @return self
     */
    public function setClaimKey(string $claimKey) : self
    {
        $this->initialized['claimKey'] = true;
        $this->claimKey = $claimKey;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDomain() : string
    {
        return $this->domain;
    }
    /**
     * 
     *
     * @param string $domain
     *
     * @return self
     */
    public function setDomain(string $domain) : self
    {
        $this->initialized['domain'] = true;
        $this->domain = $domain;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsPremium() : bool
    {
        return $this->isPremium;
    }
    /**
     * 
     *
     * @param bool $isPremium
     *
     * @return self
     */
    public function setIsPremium(bool $isPremium) : self
    {
        $this->initialized['isPremium'] = true;
        $this->isPremium = $isPremium;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPremiumPrice
     */
    public function getPremium() : DomainPremiumPrice
    {
        return $this->premium;
    }
    /**
     * 
     *
     * @param DomainPremiumPrice $premium
     *
     * @return self
     */
    public function setPremium(DomainPremiumPrice $premium) : self
    {
        $this->initialized['premium'] = true;
        $this->premium = $premium;
        return $this;
    }
    /**
     * 
     *
     * @return DomainPriceGroup
     */
    public function getPrice() : DomainPriceGroup
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param DomainPriceGroup $price
     *
     * @return self
     */
    public function setPrice(DomainPriceGroup $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReason() : string
    {
        return $this->reason;
    }
    /**
     * 
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason) : self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getWhois() : string
    {
        return $this->whois;
    }
    /**
     * 
     *
     * @param string $whois
     *
     * @return self
     */
    public function setWhois(string $whois) : self
    {
        $this->initialized['whois'] = true;
        $this->whois = $whois;
        return $this;
    }
}