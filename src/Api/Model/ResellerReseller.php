<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var ResellerResellerAdditionalData|null
     */
    protected $additionalData;
    /**
     * 
     *
     * @var ContactAddress|null
     */
    protected $address;
    /**
     * 
     *
     * @var float|null
     */
    protected $balance;
    /**
     * 
     *
     * @var string|null
     */
    protected $comments;
    /**
     * 
     *
     * @var string|null
     */
    protected $companyName;
    /**
     * 
     *
     * @var PersoncontactContact[]|null
     */
    protected $contacts;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var CustomerFax|null
     */
    protected $fax;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $locale;
    /**
     * 
     *
     * @var ContactName|null
     */
    protected $name;
    /**
     * 
     *
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     * 
     *
     * @var float|null
     */
    protected $reservedBalance;
    /**
     * 
     *
     * @var ResellerSettings|null
     */
    protected $settings;
    /**
     * 
     *
     * @var ResellerStatistics|null
     */
    protected $statistics;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int|null
     */
    protected $tier;
    /**
     * 
     *
     * @var string|null
     */
    protected $vat;
    /**
     * 
     *
     * @var float|null
     */
    protected $vatperc;
    /**
     * 
     *
     * @return ResellerResellerAdditionalData|null
     */
    public function getAdditionalData() : ?ResellerResellerAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param ResellerResellerAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?ResellerResellerAdditionalData $additionalData) : self
    {
        $this->initialized['additionalData'] = true;
        $this->additionalData = $additionalData;
        return $this;
    }
    /**
     * 
     *
     * @return ContactAddress|null
     */
    public function getAddress() : ?ContactAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param ContactAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ContactAddress $address) : self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getBalance() : ?float
    {
        return $this->balance;
    }
    /**
     * 
     *
     * @param float|null $balance
     *
     * @return self
     */
    public function setBalance(?float $balance) : self
    {
        $this->initialized['balance'] = true;
        $this->balance = $balance;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComments() : ?string
    {
        return $this->comments;
    }
    /**
     * 
     *
     * @param string|null $comments
     *
     * @return self
     */
    public function setComments(?string $comments) : self
    {
        $this->initialized['comments'] = true;
        $this->comments = $comments;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCompanyName() : ?string
    {
        return $this->companyName;
    }
    /**
     * 
     *
     * @param string|null $companyName
     *
     * @return self
     */
    public function setCompanyName(?string $companyName) : self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * 
     *
     * @return PersoncontactContact[]|null
     */
    public function getContacts() : ?array
    {
        return $this->contacts;
    }
    /**
     * 
     *
     * @param PersoncontactContact[]|null $contacts
     *
     * @return self
     */
    public function setContacts(?array $contacts) : self
    {
        $this->initialized['contacts'] = true;
        $this->contacts = $contacts;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerFax|null
     */
    public function getFax() : ?CustomerFax
    {
        return $this->fax;
    }
    /**
     * 
     *
     * @param CustomerFax|null $fax
     *
     * @return self
     */
    public function setFax(?CustomerFax $fax) : self
    {
        $this->initialized['fax'] = true;
        $this->fax = $fax;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocale() : ?string
    {
        return $this->locale;
    }
    /**
     * 
     *
     * @param string|null $locale
     *
     * @return self
     */
    public function setLocale(?string $locale) : self
    {
        $this->initialized['locale'] = true;
        $this->locale = $locale;
        return $this;
    }
    /**
     * 
     *
     * @return ContactName|null
     */
    public function getName() : ?ContactName
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param ContactName|null $name
     *
     * @return self
     */
    public function setName(?ContactName $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return ContactPhone|null
     */
    public function getPhone() : ?ContactPhone
    {
        return $this->phone;
    }
    /**
     * 
     *
     * @param ContactPhone|null $phone
     *
     * @return self
     */
    public function setPhone(?ContactPhone $phone) : self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getReservedBalance() : ?float
    {
        return $this->reservedBalance;
    }
    /**
     * 
     *
     * @param float|null $reservedBalance
     *
     * @return self
     */
    public function setReservedBalance(?float $reservedBalance) : self
    {
        $this->initialized['reservedBalance'] = true;
        $this->reservedBalance = $reservedBalance;
        return $this;
    }
    /**
     * 
     *
     * @return ResellerSettings|null
     */
    public function getSettings() : ?ResellerSettings
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param ResellerSettings|null $settings
     *
     * @return self
     */
    public function setSettings(?ResellerSettings $settings) : self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * 
     *
     * @return ResellerStatistics|null
     */
    public function getStatistics() : ?ResellerStatistics
    {
        return $this->statistics;
    }
    /**
     * 
     *
     * @param ResellerStatistics|null $statistics
     *
     * @return self
     */
    public function setStatistics(?ResellerStatistics $statistics) : self
    {
        $this->initialized['statistics'] = true;
        $this->statistics = $statistics;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getTier() : ?int
    {
        return $this->tier;
    }
    /**
     * 
     *
     * @param int|null $tier
     *
     * @return self
     */
    public function setTier(?int $tier) : self
    {
        $this->initialized['tier'] = true;
        $this->tier = $tier;
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
     * @return float|null
     */
    public function getVatperc() : ?float
    {
        return $this->vatperc;
    }
    /**
     * 
     *
     * @param float|null $vatperc
     *
     * @return self
     */
    public function setVatperc(?float $vatperc) : self
    {
        $this->initialized['vatperc'] = true;
        $this->vatperc = $vatperc;
        return $this;
    }
}