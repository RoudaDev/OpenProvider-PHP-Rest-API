<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseListLicensesOrderBy
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
    protected $expirationDate;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $keyId;
    /**
     * 
     *
     * @var string
     */
    protected $keyNumber;
    /**
     * 
     *
     * @var string
     */
    protected $product;
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
    protected $title;
    /**
     * 
     *
     * @return string
     */
    public function getExpirationDate() : string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
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
    public function getKeyId() : string
    {
        return $this->keyId;
    }
    /**
     * 
     *
     * @param string $keyId
     *
     * @return self
     */
    public function setKeyId(string $keyId) : self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getKeyNumber() : string
    {
        return $this->keyNumber;
    }
    /**
     * 
     *
     * @param string $keyNumber
     *
     * @return self
     */
    public function setKeyNumber(string $keyNumber) : self
    {
        $this->initialized['keyNumber'] = true;
        $this->keyNumber = $keyNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProduct() : string
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
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
    public function getTitle() : string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}