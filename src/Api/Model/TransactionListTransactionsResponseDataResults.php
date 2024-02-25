<?php

namespace Rouda\OpenProvider\Api\Model;

class TransactionListTransactionsResponseDataResults
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
    protected $action;
    /**
     * 
     *
     * @var string|null
     */
    protected $creationDate;
    /**
     * 
     *
     * @var float|null
     */
    protected $discount;
    /**
     * 
     *
     * @var float|null
     */
    protected $exchangeRate;
    /**
     * 
     *
     * @var string|null
     */
    protected $objectType;
    /**
     * 
     *
     * @var TransactionPrices|null
     */
    protected $price;
    /**
     * 
     *
     * @var int|null
     */
    protected $quantity;
    /**
     * 
     *
     * @var int|null
     */
    protected $referenceId;
    /**
     * 
     *
     * @var TransactionPrices|null
     */
    protected $setup;
    /**
     * 
     *
     * @var string|null
     */
    protected $subject;
    /**
     * 
     *
     * @var TransactionPrices|null
     */
    protected $total;
    /**
     * 
     *
     * @var string|null
     */
    protected $type;
    /**
     * 
     *
     * @var int|null
     */
    protected $vat;
    /**
     * 
     *
     * @return string|null
     */
    public function getAction() : ?string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string|null $action
     *
     * @return self
     */
    public function setAction(?string $action) : self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCreationDate() : ?string
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param string|null $creationDate
     *
     * @return self
     */
    public function setCreationDate(?string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getDiscount() : ?float
    {
        return $this->discount;
    }
    /**
     * 
     *
     * @param float|null $discount
     *
     * @return self
     */
    public function setDiscount(?float $discount) : self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
    /**
     * 
     *
     * @return float|null
     */
    public function getExchangeRate() : ?float
    {
        return $this->exchangeRate;
    }
    /**
     * 
     *
     * @param float|null $exchangeRate
     *
     * @return self
     */
    public function setExchangeRate(?float $exchangeRate) : self
    {
        $this->initialized['exchangeRate'] = true;
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getObjectType() : ?string
    {
        return $this->objectType;
    }
    /**
     * 
     *
     * @param string|null $objectType
     *
     * @return self
     */
    public function setObjectType(?string $objectType) : self
    {
        $this->initialized['objectType'] = true;
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrices|null
     */
    public function getPrice() : ?TransactionPrices
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param TransactionPrices|null $price
     *
     * @return self
     */
    public function setPrice(?TransactionPrices $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getReferenceId() : ?int
    {
        return $this->referenceId;
    }
    /**
     * 
     *
     * @param int|null $referenceId
     *
     * @return self
     */
    public function setReferenceId(?int $referenceId) : self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrices|null
     */
    public function getSetup() : ?TransactionPrices
    {
        return $this->setup;
    }
    /**
     * 
     *
     * @param TransactionPrices|null $setup
     *
     * @return self
     */
    public function setSetup(?TransactionPrices $setup) : self
    {
        $this->initialized['setup'] = true;
        $this->setup = $setup;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubject() : ?string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrices|null
     */
    public function getTotal() : ?TransactionPrices
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param TransactionPrices|null $total
     *
     * @return self
     */
    public function setTotal(?TransactionPrices $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getVat() : ?int
    {
        return $this->vat;
    }
    /**
     * 
     *
     * @param int|null $vat
     *
     * @return self
     */
    public function setVat(?int $vat) : self
    {
        $this->initialized['vat'] = true;
        $this->vat = $vat;
        return $this;
    }
}