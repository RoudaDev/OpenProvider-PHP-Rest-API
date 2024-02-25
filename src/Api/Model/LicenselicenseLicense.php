<?php

namespace Rouda\OpenProvider\Api\Model;

class LicenselicenseLicense
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
     * @var string|null
     */
    protected $activationCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $billingType;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var string|null
     */
    protected $contract;
    /**
     * 
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipAddressBinding;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $items;
    /**
     * 
     *
     * @var int|null
     */
    protected $keyId;
    /**
     * 
     *
     * @var string|null
     */
    protected $keyNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $orderDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $parentKeyId;
    /**
     * 
     *
     * @var int|null
     */
    protected $period;
    /**
     * 
     *
     * @var string|null
     */
    protected $product;
    /**
     * 
     *
     * @var array<string, bool>|null
     */
    protected $skuValues;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $title;
    /**
     * 
     *
     * @return string|null
     */
    public function getActivationCode() : ?string
    {
        return $this->activationCode;
    }
    /**
     * 
     *
     * @param string|null $activationCode
     *
     * @return self
     */
    public function setActivationCode(?string $activationCode) : self
    {
        $this->initialized['activationCode'] = true;
        $this->activationCode = $activationCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBillingType() : ?string
    {
        return $this->billingType;
    }
    /**
     * 
     *
     * @param string|null $billingType
     *
     * @return self
     */
    public function setBillingType(?string $billingType) : self
    {
        $this->initialized['billingType'] = true;
        $this->billingType = $billingType;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->initialized['comment'] = true;
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getContract() : ?string
    {
        return $this->contract;
    }
    /**
     * 
     *
     * @param string|null $contract
     *
     * @return self
     */
    public function setContract(?string $contract) : self
    {
        $this->initialized['contract'] = true;
        $this->contract = $contract;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExpirationDate() : ?string
    {
        return $this->expirationDate;
    }
    /**
     * 
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate) : self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpAddressBinding() : ?string
    {
        return $this->ipAddressBinding;
    }
    /**
     * 
     *
     * @param string|null $ipAddressBinding
     *
     * @return self
     */
    public function setIpAddressBinding(?string $ipAddressBinding) : self
    {
        $this->initialized['ipAddressBinding'] = true;
        $this->ipAddressBinding = $ipAddressBinding;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getItems() : ?array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param string[]|null $items
     *
     * @return self
     */
    public function setItems(?array $items) : self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getKeyId() : ?int
    {
        return $this->keyId;
    }
    /**
     * 
     *
     * @param int|null $keyId
     *
     * @return self
     */
    public function setKeyId(?int $keyId) : self
    {
        $this->initialized['keyId'] = true;
        $this->keyId = $keyId;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getKeyNumber() : ?string
    {
        return $this->keyNumber;
    }
    /**
     * 
     *
     * @param string|null $keyNumber
     *
     * @return self
     */
    public function setKeyNumber(?string $keyNumber) : self
    {
        $this->initialized['keyNumber'] = true;
        $this->keyNumber = $keyNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrderDate() : ?string
    {
        return $this->orderDate;
    }
    /**
     * 
     *
     * @param string|null $orderDate
     *
     * @return self
     */
    public function setOrderDate(?string $orderDate) : self
    {
        $this->initialized['orderDate'] = true;
        $this->orderDate = $orderDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getParentKeyId() : ?int
    {
        return $this->parentKeyId;
    }
    /**
     * 
     *
     * @param int|null $parentKeyId
     *
     * @return self
     */
    public function setParentKeyId(?int $parentKeyId) : self
    {
        $this->initialized['parentKeyId'] = true;
        $this->parentKeyId = $parentKeyId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPeriod() : ?int
    {
        return $this->period;
    }
    /**
     * 
     *
     * @param int|null $period
     *
     * @return self
     */
    public function setPeriod(?int $period) : self
    {
        $this->initialized['period'] = true;
        $this->period = $period;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProduct() : ?string
    {
        return $this->product;
    }
    /**
     * 
     *
     * @param string|null $product
     *
     * @return self
     */
    public function setProduct(?string $product) : self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, bool>|null
     */
    public function getSkuValues() : ?iterable
    {
        return $this->skuValues;
    }
    /**
     * 
     *
     * @param array<string, bool>|null $skuValues
     *
     * @return self
     */
    public function setSkuValues(?iterable $skuValues) : self
    {
        $this->initialized['skuValues'] = true;
        $this->skuValues = $skuValues;
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
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * 
     *
     * @param string|null $title
     *
     * @return self
     */
    public function setTitle(?string $title) : self
    {
        $this->initialized['title'] = true;
        $this->title = $title;
        return $this;
    }
}