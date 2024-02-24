<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $activeDate;
    /**
     * 
     *
     * @var string
     */
    protected $commonName;
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
    protected $orderDate = 'desc';
    /**
     * 
     *
     * @var string
     */
    protected $productName;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return string
     */
    public function getActiveDate() : string
    {
        return $this->activeDate;
    }
    /**
     * 
     *
     * @param string $activeDate
     *
     * @return self
     */
    public function setActiveDate(string $activeDate) : self
    {
        $this->initialized['activeDate'] = true;
        $this->activeDate = $activeDate;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCommonName() : string
    {
        return $this->commonName;
    }
    /**
     * 
     *
     * @param string $commonName
     *
     * @return self
     */
    public function setCommonName(string $commonName) : self
    {
        $this->initialized['commonName'] = true;
        $this->commonName = $commonName;
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
     * @return string
     */
    public function getProductName() : string
    {
        return $this->productName;
    }
    /**
     * 
     *
     * @param string $productName
     *
     * @return self
     */
    public function setProductName(string $productName) : self
    {
        $this->initialized['productName'] = true;
        $this->productName = $productName;
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
}