<?php

namespace Rouda\OpenProvider\Api\Model;

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
     * @var InvoicePrices|null
     */
    protected $amount;
    /**
     * 
     *
     * @var string|null
     */
    protected $attachmentUrl;
    /**
     * 
     *
     * @var string|null
     */
    protected $creationDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $invoiceUrl;
    /**
     * 
     *
     * @return InvoicePrices|null
     */
    public function getAmount() : ?InvoicePrices
    {
        return $this->amount;
    }
    /**
     * 
     *
     * @param InvoicePrices|null $amount
     *
     * @return self
     */
    public function setAmount(?InvoicePrices $amount) : self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAttachmentUrl() : ?string
    {
        return $this->attachmentUrl;
    }
    /**
     * 
     *
     * @param string|null $attachmentUrl
     *
     * @return self
     */
    public function setAttachmentUrl(?string $attachmentUrl) : self
    {
        $this->initialized['attachmentUrl'] = true;
        $this->attachmentUrl = $attachmentUrl;
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
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceNumber() : ?string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string|null $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(?string $invoiceNumber) : self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInvoiceUrl() : ?string
    {
        return $this->invoiceUrl;
    }
    /**
     * 
     *
     * @param string|null $invoiceUrl
     *
     * @return self
     */
    public function setInvoiceUrl(?string $invoiceUrl) : self
    {
        $this->initialized['invoiceUrl'] = true;
        $this->invoiceUrl = $invoiceUrl;
        return $this;
    }
}