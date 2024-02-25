<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var ContactAdditionalData|null
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
     * @var bool|null
     */
    protected $apiAccessEnabled;
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
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var string|null
     */
    protected $inn;
    /**
     * 
     *
     * @var bool|null
     */
    protected $isActive;
    /**
     * 
     *
     * @var string|null
     */
    protected $kpp;
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
     * @var string|null
     */
    protected $password;
    /**
     * 
     *
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     * 
     *
     * @var string|null
     */
    protected $role;
    /**
     * 
     *
     * @var string|null
     */
    protected $username;
    /**
     * 
     *
     * @var string|null
     */
    protected $vat;
    /**
     * 
     *
     * @return ContactAdditionalData|null
     */
    public function getAdditionalData() : ?ContactAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param ContactAdditionalData|null $additionalData
     *
     * @return self
     */
    public function setAdditionalData(?ContactAdditionalData $additionalData) : self
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
     * @return bool|null
     */
    public function getApiAccessEnabled() : ?bool
    {
        return $this->apiAccessEnabled;
    }
    /**
     * 
     *
     * @param bool|null $apiAccessEnabled
     *
     * @return self
     */
    public function setApiAccessEnabled(?bool $apiAccessEnabled) : self
    {
        $this->initialized['apiAccessEnabled'] = true;
        $this->apiAccessEnabled = $apiAccessEnabled;
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
     * @return string|null
     */
    public function getInn() : ?string
    {
        return $this->inn;
    }
    /**
     * 
     *
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn) : self
    {
        $this->initialized['inn'] = true;
        $this->inn = $inn;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getIsActive() : ?bool
    {
        return $this->isActive;
    }
    /**
     * 
     *
     * @param bool|null $isActive
     *
     * @return self
     */
    public function setIsActive(?bool $isActive) : self
    {
        $this->initialized['isActive'] = true;
        $this->isActive = $isActive;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKpp() : ?string
    {
        return $this->kpp;
    }
    /**
     * 
     *
     * @param string|null $kpp
     *
     * @return self
     */
    public function setKpp(?string $kpp) : self
    {
        $this->initialized['kpp'] = true;
        $this->kpp = $kpp;
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
     * @return string|null
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }
    /**
     * 
     *
     * @param string|null $password
     *
     * @return self
     */
    public function setPassword(?string $password) : self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
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
     * @return string|null
     */
    public function getRole() : ?string
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param string|null $role
     *
     * @return self
     */
    public function setRole(?string $role) : self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }
    /**
     * 
     *
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username) : self
    {
        $this->initialized['username'] = true;
        $this->username = $username;
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
}