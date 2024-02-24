<?php

namespace Rouda\OpenProviderAPI\Model;

class InvoiceInvoice
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
     * @var InvoicePrices
     */
    protected $amount;
    /**
     * 
     *
     * @var string
     */
    protected $attachmentUrl;
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
     * @var string
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceUrl;
    /**
     * 
     *
     * @return InvoicePrices
     */
    public function getAmount() : InvoicePrices
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param InvoicePrices $amount
     *
     * @return self
     */
    public function setAmount(InvoicePrices $amount) : self
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
    public function getAttachmentUrl() : string
    {
        return $this->attachmentUrl;
    }
    /**
     * 
     *
     * @param string $attachmentUrl
     *
     * @return self
     */
    public function setAttachmentUrl(string $attachmentUrl) : self
    {
        $this->initialized['attachmentUrl'] = true;
        $this->attachmentUrl = $attachmentUrl;
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
     * @return string
     */
    public function getInvoiceNumber() : string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber) : self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceUrl() : string
    {
        return $this->invoiceUrl;
    }
    /**
     * 
     *
     * @param string $invoiceUrl
     *
     * @return self
     */
    public function setInvoiceUrl(string $invoiceUrl) : self
    {
        $this->initialized['invoiceUrl'] = true;
        $this->invoiceUrl = $invoiceUrl;
        return $this;
    }
}