<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var ContactClientIpList
     */
    protected $apiClientIpList;
    /**
     * 
     *
     * @var string
     */
    protected $authType;
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
    protected $hashChangedAt;
    /**
     * 
     *
     * @var int
     */
    protected $id;
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
    protected $lastApiCallAt;
    /**
     * 
     *
     * @var string
     */
    protected $lastLoginAt;
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
    protected $passwordChangeDeclinedAt;
    /**
     * 
     *
     * @var string
     */
    protected $passwordChangedAt;
    /**
     * 
     *
     * @var ContactPhone
     */
    protected $phone;
    /**
     * 
     *
     * @var ContactClientIpList
     */
    protected $rcpClientIpList;
    /**
     * 
     *
     * @var int
     */
    protected $resellerId;
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
    protected $secretKey;
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
     * @return ContactClientIpList
     */
    public function getApiClientIpList() : ContactClientIpList
    {
        return $this->apiClientIpList;
    }
    /**
     * 
     *
     * @param ContactClientIpList $apiClientIpList
     *
     * @return self
     */
    public function setApiClientIpList(ContactClientIpList $apiClientIpList) : self
    {
        $this->initialized['apiClientIpList'] = true;
        $this->apiClientIpList = $apiClientIpList;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthType() : string
    {
        return $this->authType;
    }
    /**
     * 
     *
     * @param string $authType
     *
     * @return self
     */
    public function setAuthType(string $authType) : self
    {
        $this->initialized['authType'] = true;
        $this->authType = $authType;
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
    public function getHashChangedAt() : string
    {
        return $this->hashChangedAt;
    }
    /**
     * 
     *
     * @param string $hashChangedAt
     *
     * @return self
     */
    public function setHashChangedAt(string $hashChangedAt) : self
    {
        $this->initialized['hashChangedAt'] = true;
        $this->hashChangedAt = $hashChangedAt;
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
    public function getLastApiCallAt() : string
    {
        return $this->lastApiCallAt;
    }
    /**
     * 
     *
     * @param string $lastApiCallAt
     *
     * @return self
     */
    public function setLastApiCallAt(string $lastApiCallAt) : self
    {
        $this->initialized['lastApiCallAt'] = true;
        $this->lastApiCallAt = $lastApiCallAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastLoginAt() : string
    {
        return $this->lastLoginAt;
    }
    /**
     * 
     *
     * @param string $lastLoginAt
     *
     * @return self
     */
    public function setLastLoginAt(string $lastLoginAt) : self
    {
        $this->initialized['lastLoginAt'] = true;
        $this->lastLoginAt = $lastLoginAt;
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
    public function getPasswordChangeDeclinedAt() : string
    {
        return $this->passwordChangeDeclinedAt;
    }
    /**
     * 
     *
     * @param string $passwordChangeDeclinedAt
     *
     * @return self
     */
    public function setPasswordChangeDeclinedAt(string $passwordChangeDeclinedAt) : self
    {
        $this->initialized['passwordChangeDeclinedAt'] = true;
        $this->passwordChangeDeclinedAt = $passwordChangeDeclinedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPasswordChangedAt() : string
    {
        return $this->passwordChangedAt;
    }
    /**
     * 
     *
     * @param string $passwordChangedAt
     *
     * @return self
     */
    public function setPasswordChangedAt(string $passwordChangedAt) : self
    {
        $this->initialized['passwordChangedAt'] = true;
        $this->passwordChangedAt = $passwordChangedAt;
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
     * @return ContactClientIpList
     */
    public function getRcpClientIpList() : ContactClientIpList
    {
        return $this->rcpClientIpList;
    }
    /**
     * 
     *
     * @param ContactClientIpList $rcpClientIpList
     *
     * @return self
     */
    public function setRcpClientIpList(ContactClientIpList $rcpClientIpList) : self
    {
        $this->initialized['rcpClientIpList'] = true;
        $this->rcpClientIpList = $rcpClientIpList;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getResellerId() : int
    {
        return $this->resellerId;
    }
    /**
     * 
     *
     * @param int $resellerId
     *
     * @return self
     */
    public function setResellerId(int $resellerId) : self
    {
        $this->initialized['resellerId'] = true;
        $this->resellerId = $resellerId;
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
    public function getSecretKey() : string
    {
        return $this->secretKey;
    }
    /**
     * 
     *
     * @param string $secretKey
     *
     * @return self
     */
    public function setSecretKey(string $secretKey) : self
    {
        $this->initialized['secretKey'] = true;
        $this->secretKey = $secretKey;
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