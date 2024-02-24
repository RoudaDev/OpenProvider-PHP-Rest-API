<?php

namespace Rouda\OpenProviderAPI\Model;

class PaymentListPaymentsResponseDataResults
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
     * @var PaymentPrices
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $confirmationDate;
    /**
     * 
     *
     * @var string
     */
    protected $creationDate;
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
    protected $isProcessed;
    /**
     * 
     *
     * @var string
     */
    protected $method;
    /**
     * 
     *
     * @var string
     */
    protected $paymentDate;
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
    protected $type;
    /**
     * 
     *
     * @return PaymentPrices
     */
    public function getAmount() : PaymentPrices
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param PaymentPrices $amount
     *
     * @return self
     */
    public function setAmount(PaymentPrices $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getConfirmationDate() : string
    {
        return $this->confirmationDate;
    }
    /**
     * 
     *
     * @param string $confirmationDate
     *
     * @return self
     */
    public function setConfirmationDate(string $confirmationDate) : self
    {
        $this->initialized['confirmationDate'] = true;
        $this->confirmationDate = $confirmationDate;
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
    public function getIsProcessed() : bool
    {
        return $this->isProcessed;
    }
    /**
     * 
     *
     * @param bool $isProcessed
     *
     * @return self
     */
    public function setIsProcessed(bool $isProcessed) : self
    {
        $this->initialized['isProcessed'] = true;
        $this->isProcessed = $isProcessed;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }
    /**
     * 
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method) : self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPaymentDate() : string
    {
        return $this->paymentDate;
    }
    /**
     * 
     *
     * @param string $paymentDate
     *
     * @return self
     */
    public function setPaymentDate(string $paymentDate) : self
    {
        $this->initialized['paymentDate'] = true;
        $this->paymentDate = $paymentDate;
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
}