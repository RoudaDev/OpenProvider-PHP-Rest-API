<?php

namespace Rouda\OpenProviderAPI\Model;

class ContactCreateContactRequest
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
     * @var ContactAdditionalData
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
     * @var bool
     */
    protected $apiAccessEnabled;
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
     * @var string
     */
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $inn;
    /**
     * 
     *
     * @var bool
     */
    protected $isActive;
    /**
     * 
     *
     * @var string
     */
    protected $kpp;
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
     * @var string
     */
    protected $password;
    /**
     * 
     *
     * @var ContactPhone
     */
    protected $phone;
    /**
     * 
     *
     * @var string
     */
    protected $role;
    /**
     * 
     *
     * @var string
     */
    protected $username;
    /**
     * 
     *
     * @var string
     */
    protected $vat;
    /**
     * 
     *
     * @return ContactAdditionalData
     */
    public function getAdditionalData() : ContactAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param ContactAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(ContactAdditionalData $additionalData) : self
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
     * @return bool
     */
    public function getApiAccessEnabled() : bool
    {
        return $this->apiAccessEnabled;
    }
    /**
     * 
     *
     * @param bool $apiAccessEnabled
     *
     * @return self
     */
    public function setApiAccessEnabled(bool $apiAccessEnabled) : self
    {
        $this->initialized['apiAccessEnabled'] = true;
        $this->apiAccessEnabled = $apiAccessEnabled;
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
     * @return string
     */
    public function getInn() : string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string $inn
     *
     * @return self
     */
    public function setInn(string $inn) : self
    {
        $this->initialized['inn'] = true;
        $this->inn = $inn;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsActive() : bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool $isActive
     *
     * @return self
     */
    public function setIsActive(bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKpp() : string
    {
        return $this->kpp;
    }
    /**
     * 
     *
     * @param string $kpp
     *
     * @return self
     */
    public function setKpp(string $kpp) : self
    {
        $this->initialized['kpp'] = true;
        $this->kpp = $kpp;
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
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
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
     * @return string
     */
    public function getRole() : string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
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
}