<?php

namespace Rouda\OpenProviderAPI\Model;

class CustomerCreateCustomerRequest
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
     * @var CustomerExtensionAdditionalData[]
     */
    protected $extensionAdditionalData;
    /**
     * 
     *
     * @var CustomerFax
     */
    protected $fax;
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
     * @var CustomerTags[]
     */
    protected $tags;
    /**
     * 
     *
     * @var string
     */
    protected $vat;
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