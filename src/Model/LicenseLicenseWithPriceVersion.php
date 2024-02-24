<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseLicenseWithPriceVersion
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
    protected $activationCode;
    /**
     * 
     *
     * @var string
     */
    protected $billingType;
    /**
     * 
     *
     * @var string
     */
    protected $comment;
    /**
     * 
     *
     * @var string
     */
    protected $contract;
    /**
     * 
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string[]
     */
    protected $items;
    /**
     * 
     *
     * @var int
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
    protected $orderDate;
    /**
     * 
     *
     * @var int
     */
    protected $parentKeyId;
    /**
     * 
     *
     * @var int
     */
    protected $period;
    /**
     * 
     *
     * @var string
     */
    protected $product;
    /**
     * 
     *
     * @var array<string, bool>
     */
    protected $skuValues;
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
    public function getActivationCode() : string
    {
        return $this->activationCode;
    }
    /**
     * 
     *
     * @param string $activationCode
     *
     * @return self
     */
    public function setActivationCode(string $activationCode) : self
    {
        $this->initialized['activationCode'] = true;
        $this->activationCode = $activationCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBillingType() : string
    {
        return $this->billingType;
    }
    /**
     * 
     *
     * @param string $billingType
     *
     * @return self
     */
    public function setBillingType(string $billingType) : self
    {
        $this->initialized['billingType'] = true;
        $this->billingType = $billingType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getComment() : string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContract() : string
    {
        return $this->contract;
    }
    /**
     * 
     *
     * @param string $contract
     *
     * @return self
     */
    public function setContract(string $contract) : self
    {
        $this->initialized['contract'] = true;
        $this->contract = $contract;
        return $this;
    }
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
     * @return string[]
     */
    public function getItems() : array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param string[] $items
     *
     * @return self
     */
    public function setItems(array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getKeyId() : int
    {
        return $this->keyId;
    }
    /**
     * 
     *
     * @param int $keyId
     *
     * @return self
     */
    public function setKeyId(int $keyId) : self
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
    public function getOrderDate() : string
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param string $orderDate
     *
     * @return self
     */
    public function setOrderDate(string $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getParentKeyId() : int
    {
        return $this->parentKeyId;
    }
    /**
     * 
     *
     * @param int $parentKeyId
     *
     * @return self
     */
    public function setParentKeyId(int $parentKeyId) : self
    {
        $this->initialized['parentKeyId'] = true;
        $this->parentKeyId = $parentKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPeriod() : int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int $period
     *
     * @return self
     */
    public function setPeriod(int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
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
     * @return array<string, bool>
     */
    public function getSkuValues() : iterable
    {
        return $this->skuValues;
    }
    /**
     * 
     *
     * @param array<string, bool> $skuValues
     *
     * @return self
     */
    public function setSkuValues(iterable $skuValues) : self
    {
        $this->initialized['skuValues'] = true;
        $this->skuValues = $skuValues;
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