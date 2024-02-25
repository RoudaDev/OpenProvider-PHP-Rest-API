<?php

namespace Rouda\OpenProvider\Api\Model;

class PersoncontactContact
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
     * @var ContactClientIpList|null
     */
    protected $apiClientIpList;
    /**
     * 
     *
     * @var string|null
     */
    protected $authType;
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
    protected $hashChangedAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
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
    protected $lastApiCallAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastLoginAt;
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
    protected $passwordChangeDeclinedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $passwordChangedAt;
    /**
     * 
     *
     * @var ContactPhone|null
     */
    protected $phone;
    /**
     * 
     *
     * @var ContactClientIpList|null
     */
    protected $rcpClientIpList;
    /**
     * 
     *
     * @var int|null
     */
    protected $resellerId;
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
    protected $secretKey;
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
     * @return ContactClientIpList|null
     */
    public function getApiClientIpList() : ?ContactClientIpList
    {
        return $this->apiClientIpList;
    }
    /**
     * 
     *
     * @param ContactClientIpList|null $apiClientIpList
     *
     * @return self
     */
    public function setApiClientIpList(?ContactClientIpList $apiClientIpList) : self
    {
        $this->initialized['apiClientIpList'] = true;
        $this->apiClientIpList = $apiClientIpList;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAuthType() : ?string
    {
        return $this->authType;
    }
    /**
     * 
     *
     * @param string|null $authType
     *
     * @return self
     */
    public function setAuthType(?string $authType) : self
    {
        $this->initialized['authType'] = true;
        $this->authType = $authType;
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
    public function getHashChangedAt() : ?string
    {
        return $this->hashChangedAt;
    }
    /**
     * 
     *
     * @param string|null $hashChangedAt
     *
     * @return self
     */
    public function setHashChangedAt(?string $hashChangedAt) : self
    {
        $this->initialized['hashChangedAt'] = true;
        $this->hashChangedAt = $hashChangedAt;
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
    public function getLastApiCallAt() : ?string
    {
        return $this->lastApiCallAt;
    }
    /**
     * 
     *
     * @param string|null $lastApiCallAt
     *
     * @return self
     */
    public function setLastApiCallAt(?string $lastApiCallAt) : self
    {
        $this->initialized['lastApiCallAt'] = true;
        $this->lastApiCallAt = $lastApiCallAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastLoginAt() : ?string
    {
        return $this->lastLoginAt;
    }
    /**
     * 
     *
     * @param string|null $lastLoginAt
     *
     * @return self
     */
    public function setLastLoginAt(?string $lastLoginAt) : self
    {
        $this->initialized['lastLoginAt'] = true;
        $this->lastLoginAt = $lastLoginAt;
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
    public function getPasswordChangeDeclinedAt() : ?string
    {
        return $this->passwordChangeDeclinedAt;
    }
    /**
     * 
     *
     * @param string|null $passwordChangeDeclinedAt
     *
     * @return self
     */
    public function setPasswordChangeDeclinedAt(?string $passwordChangeDeclinedAt) : self
    {
        $this->initialized['passwordChangeDeclinedAt'] = true;
        $this->passwordChangeDeclinedAt = $passwordChangeDeclinedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPasswordChangedAt() : ?string
    {
        return $this->passwordChangedAt;
    }
    /**
     * 
     *
     * @param string|null $passwordChangedAt
     *
     * @return self
     */
    public function setPasswordChangedAt(?string $passwordChangedAt) : self
    {
        $this->initialized['passwordChangedAt'] = true;
        $this->passwordChangedAt = $passwordChangedAt;
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
     * @return ContactClientIpList|null
     */
    public function getRcpClientIpList() : ?ContactClientIpList
    {
        return $this->rcpClientIpList;
    }
    /**
     * 
     *
     * @param ContactClientIpList|null $rcpClientIpList
     *
     * @return self
     */
    public function setRcpClientIpList(?ContactClientIpList $rcpClientIpList) : self
    {
        $this->initialized['rcpClientIpList'] = true;
        $this->rcpClientIpList = $rcpClientIpList;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getResellerId() : ?int
    {
        return $this->resellerId;
    }
    /**
     * 
     *
     * @param int|null $resellerId
     *
     * @return self
     */
    public function setResellerId(?int $resellerId) : self
    {
        $this->initialized['resellerId'] = true;
        $this->resellerId = $resellerId;
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
    public function getSecretKey() : ?string
    {
        return $this->secretKey;
    }
    /**
     * 
     *
     * @param string|null $secretKey
     *
     * @return self
     */
    public function setSecretKey(?string $secretKey) : self
    {
        $this->initialized['secretKey'] = true;
        $this->secretKey = $secretKey;
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