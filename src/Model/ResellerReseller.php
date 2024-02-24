<?php

namespace Rouda\OpenProviderAPI\Model;

class ResellerReseller
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
     * @var ResellerResellerAdditionalData
     */
    protected $additionalData;
    /**
     * 
     *
     * @var ContactAddress
     */
    protected $address;
    /**
     * 
     *
     * @var float
     */
    protected $balance;
    /**
     * 
     *
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var string
     */
    protected $companyName;
    /**
     * 
     *
     * @var PersoncontactContact[]
     */
    protected $contacts;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var CustomerFax
     */
    protected $fax;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $locale;
    /**
     * 
     *
     * @var ContactName
     */
    protected $name;
    /**
     * 
     *
     * @var ContactPhone
     */
    protected $phone;
    /**
     * 
     *
     * @var float
     */
    protected $reservedBalance;
    /**
     * 
     *
     * @var ResellerSettings
     */
    protected $settings;
    /**
     * 
     *
     * @var ResellerStatistics
     */
    protected $statistics;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $tier;
    /**
     * 
     *
     * @var string
     */
    protected $vat;
    /**
     * 
     *
     * @var float
     */
    protected $vatperc;
    /**
     * 
     *
     * @return ResellerResellerAdditionalData
     */
    public function getAdditionalData() : ResellerResellerAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param ResellerResellerAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(ResellerResellerAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return ContactAddress
     */
    public function getAddress() : ContactAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ContactAddress $address
     *
     * @return self
     */
    public function setAddress(ContactAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getBalance() : float
    {
        return $this->balance;
    }
    /**
     * 
     *
     * @param float $balance
     *
     * @return self
     */
    public function setBalance(float $balance) : self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComments() : string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string $comments
     *
     * @return self
     */
    public function setComments(string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCompanyName() : string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return PersoncontactContact[]
     */
    public function getContacts() : array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param PersoncontactContact[] $contacts
     *
     * @return self
     */
    public function setContacts(array $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerFax
     */
    public function getFax() : CustomerFax
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param CustomerFax $fax
     *
     * @return self
     */
    public function setFax(CustomerFax $fax) : self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLocale() : string
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string $locale
     *
     * @return self
     */
    public function setLocale(string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * 
     *
     * @return ContactName
     */
    public function getName() : ContactName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ContactName $name
     *
     * @return self
     */
    public function setName(ContactName $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ContactPhone
     */
    public function getPhone() : ContactPhone
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param ContactPhone $phone
     *
     * @return self
     */
    public function setPhone(ContactPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getReservedBalance() : float
    {
        return $this->reservedBalance;
    }
    /**
     * 
     *
     * @param float $reservedBalance
     *
     * @return self
     */
    public function setReservedBalance(float $reservedBalance) : self
    {
        $this->initialized['reservedBalance'] = true;
        $this->reservedBalance = $reservedBalance;
        return $this;
    }
    /**
     * 
     *
     * @return ResellerSettings
     */
    public function getSettings() : ResellerSettings
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param ResellerSettings $settings
     *
     * @return self
     */
    public function setSettings(ResellerSettings $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * 
     *
     * @return ResellerStatistics
     */
    public function getStatistics() : ResellerStatistics
    {
        return $this->statistics;
    }
    /**
     * 
     *
     * @param ResellerStatistics $statistics
     *
     * @return self
     */
    public function setStatistics(ResellerStatistics $statistics) : self
    {
        $this->initialized['statistics'] = true;
        $this->statistics = $statistics;
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
     * @return int
     */
    public function getTier() : int
    {
        return $this->tier;
    }
    /**
     * 
     *
     * @param int $tier
     *
     * @return self
     */
    public function setTier(int $tier) : self
    {
        $this->initialized['tier'] = true;
        $this->tier = $tier;
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
     * @return float
     */
    public function getVatperc() : float
    {
        return $this->vatperc;
    }
    /**
     * 
     *
     * @param float $vatperc
     *
     * @return self
     */
    public function setVatperc(float $vatperc) : self
    {
        $this->initialized['vatperc'] = true;
        $this->vatperc = $vatperc;
        return $this;
    }
}