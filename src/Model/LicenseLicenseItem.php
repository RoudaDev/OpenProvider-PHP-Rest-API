<?php

namespace Rouda\OpenProviderAPI\Model;

class LicenseLicenseItem
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
    protected $item;
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
    protected $title;
    /**
     * 
     *
     * @return string
     */
    public function getItem() : string
    {
        return $this->item;
    }
    /**
     * 
     *
     * @param string $item
     *
     * @return self
     */
    public function setItem(string $item) : self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
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