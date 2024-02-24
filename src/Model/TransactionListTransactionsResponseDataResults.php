<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $action;
    /**
     * 
     *
     * @var string
     */
    protected $creationDate;
    /**
     * 
     *
     * @var float
     */
    protected $discount;
    /**
     * 
     *
     * @var float
     */
    protected $exchangeRate;
    /**
     * 
     *
     * @var string
     */
    protected $objectType;
    /**
     * 
     *
     * @var TransactionPrices
     */
    protected $price;
    /**
     * 
     *
     * @var int
     */
    protected $quantity;
    /**
     * 
     *
     * @var int
     */
    protected $referenceId;
    /**
     * 
     *
     * @var TransactionPrices
     */
    protected $setup;
    /**
     * 
     *
     * @var string
     */
    protected $subject;
    /**
     * 
     *
     * @var TransactionPrices
     */
    protected $total;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int
     */
    protected $vat;
    /**
     * 
     *
     * @return string
     */
    public function getAction() : string
    {
        return $this->action;
    }
    /**
     * 
     *
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action) : self
    {
        $this->initialized['action'] = true;
        $this->action = $action;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCreationDate() : string
    {
        return $this->creationDate;
    }
    /**
     * 
     *
     * @param string $creationDate
     *
     * @return self
     */
    public function setCreationDate(string $creationDate) : self
    {
        $this->initialized['creationDate'] = true;
        $this->creationDate = $creationDate;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getDiscount() : float
    {
        return $this->discount;
    }
    /**
     * 
     *
     * @param float $discount
     *
     * @return self
     */
    public function setDiscount(float $discount) : self
    {
        $this->initialized['discount'] = true;
        $this->discount = $discount;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getExchangeRate() : float
    {
        return $this->exchangeRate;
    }
    /**
     * 
     *
     * @param float $exchangeRate
     *
     * @return self
     */
    public function setExchangeRate(float $exchangeRate) : self
    {
        $this->initialized['exchangeRate'] = true;
        $this->exchangeRate = $exchangeRate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getObjectType() : string
    {
        return $this->objectType;
    }
    /**
     * 
     *
     * @param string $objectType
     *
     * @return self
     */
    public function setObjectType(string $objectType) : self
    {
        $this->initialized['objectType'] = true;
        $this->objectType = $objectType;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrices
     */
    public function getPrice() : TransactionPrices
    {
        return $this->price;
    }
    /**
     * 
     *
     * @param TransactionPrices $price
     *
     * @return self
     */
    public function setPrice(TransactionPrices $price) : self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getQuantity() : int
    {
        return $this->quantity;
    }
    /**
     * 
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity) : self
    {
        $this->initialized['quantity'] = true;
        $this->quantity = $quantity;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReferenceId() : int
    {
        return $this->referenceId;
    }
    /**
     * 
     *
     * @param int $referenceId
     *
     * @return self
     */
    public function setReferenceId(int $referenceId) : self
    {
        $this->initialized['referenceId'] = true;
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrices
     */
    public function getSetup() : TransactionPrices
    {
        return $this->setup;
    }
    /**
     * 
     *
     * @param TransactionPrices $setup
     *
     * @return self
     */
    public function setSetup(TransactionPrices $setup) : self
    {
        $this->initialized['setup'] = true;
        $this->setup = $setup;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubject() : string
    {
        return $this->subject;
    }
    /**
     * 
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject(string $subject) : self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * 
     *
     * @return TransactionPrices
     */
    public function getTotal() : TransactionPrices
    {
        return $this->total;
    }
    /**
     * 
     *
     * @param TransactionPrices $total
     *
     * @return self
     */
    public function setTotal(TransactionPrices $total) : self
    {
        $this->initialized['total'] = true;
        $this->total = $total;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVat() : int
    {
        return $this->vat;
    }
    /**
     * 
     *
     * @param int $vat
     *
     * @return self
     */
    public function setVat(int $vat) : self
    {
        $this->initialized['vat'] = true;
        $this->vat = $vat;
        return $this;
    }
}