<?php

namespace Rouda\OpenProvider\Api\Model;

class OrderListOrdersRequestOrderBy
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
    protected $activeDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $commonName;
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
    protected $orderDate = 'desc';
    /**
     * 
     *
     * @var string|null
     */
    protected $productName;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @return string|null
     */
    public function getActiveDate() : ?string
    {
        return $this->activeDate;
    }
    /**
     * 
     *
     * @param string|null $activeDate
     *
     * @return self
     */
    public function setActiveDate(?string $activeDate) : self
    {
        $this->initialized['activeDate'] = true;
        $this->activeDate = $activeDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCommonName() : ?string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string|null $commonName
     *
     * @return self
     */
    public function setCommonName(?string $commonName) : self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
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
     * @return string|null
     */
    public function getProductName() : ?string
    {
        return $this->productName;
    }
    /**
     * 
     *
     * @param string|null $productName
     *
     * @return self
     */
    public function setProductName(?string $productName) : self
    {
        $this->initialized['productName'] = true;
        $this->productName = $productName;
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
}