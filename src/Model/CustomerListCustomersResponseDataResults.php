<?php

namespace Rouda\OpenProviderAPI\Model;

class CustomerListCustomersResponseDataResults
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
     * @var CustomerCustomerAdditionalData
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
     * @var string
     */
    protected $comments;
    /**
     * 
     *
     * @var string
     */
    protected $commentsLastChangedAt;
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
    protected $deletedAt;
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
    protected $emailVerificationStatus;
    /**
     * 
     *
     * @var CustomerExtensionAdditionalData[]
     */
    protected $extensionAdditionalData;
    /**
     * 
     *
     * @var string
     */
    protected $handle;
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
    protected $isDeleted;
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
     * @var int
     */
    protected $resellerId;
    /**
     * 
     *
     * @var CustomerTags[]
     */
    protected $tags;
    /**
     * 
     *
     * @return CustomerCustomerAdditionalData
     */
    public function getAdditionalData() : CustomerCustomerAdditionalData
    {
        return $this->additionalData;
    }
    /**
     * 
     *
     * @param CustomerCustomerAdditionalData $additionalData
     *
     * @return self
     */
    public function setAdditionalData(CustomerCustomerAdditionalData $additionalData) : self
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
    public function getCommentsLastChangedAt() : string
    {
        return $this->commentsLastChangedAt;
    }
    /**
     * 
     *
     * @param string $commentsLastChangedAt
     *
     * @return self
     */
    public function setCommentsLastChangedAt(string $commentsLastChangedAt) : self
    {
        $this->initialized['commentsLastChangedAt'] = true;
        $this->commentsLastChangedAt = $commentsLastChangedAt;
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
    public function getDeletedAt() : string
    {
        return $this->deletedAt;
    }
    /**
     * 
     *
     * @param string $deletedAt
     *
     * @return self
     */
    public function setDeletedAt(string $deletedAt) : self
    {
        $this->initialized['deletedAt'] = true;
        $this->deletedAt = $deletedAt;
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
    public function getEmailVerificationStatus() : string
    {
        return $this->emailVerificationStatus;
    }
    /**
     * 
     *
     * @param string $emailVerificationStatus
     *
     * @return self
     */
    public function setEmailVerificationStatus(string $emailVerificationStatus) : self
    {
        $this->initialized['emailVerificationStatus'] = true;
        $this->emailVerificationStatus = $emailVerificationStatus;
        return $this;
    }
    /**
     * 
     *
     * @return CustomerExtensionAdditionalData[]
     */
    public function getExtensionAdditionalData() : array
    {
        return $this->extensionAdditionalData;
    }
    /**
     * 
     *
     * @param CustomerExtensionAdditionalData[] $extensionAdditionalData
     *
     * @return self
     */
    public function setExtensionAdditionalData(array $extensionAdditionalData) : self
    {
        $this->initialized['extensionAdditionalData'] = true;
        $this->extensionAdditionalData = $extensionAdditionalData;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getHandle() : string
    {
        return $this->handle;
    }
    /**
     * 
     *
     * @param string $handle
     *
     * @return self
     */
    public function setHandle(string $handle) : self
    {
        $this->initialized['handle'] = true;
        $this->handle = $handle;
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
    public function getIsDeleted() : bool
    {
        return $this->isDeleted;
    }
    /**
     * 
     *
     * @param bool $isDeleted
     *
     * @return self
     */
    public function setIsDeleted(bool $isDeleted) : self
    {
        $this->initialized['isDeleted'] = true;
        $this->isDeleted = $isDeleted;
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
     * @return CustomerTags[]
     */
    public function getTags() : array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param CustomerTags[] $tags
     *
     * @return self
     */
    public function setTags(array $tags) : self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}