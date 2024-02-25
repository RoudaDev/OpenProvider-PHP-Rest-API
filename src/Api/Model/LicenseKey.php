<?php

namespace Rouda\OpenProvider\Api\Model;

class LicenseKey
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
    protected $item;
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
    protected $title;
    /**
     * 
     *
     * @return string|null
     */
    public function getItem() : ?string
    {
        return $this->item;
    }
    /**
     * 
     *
     * @param string|null $item
     *
     * @return self
     */
    public function setItem(?string $item) : self
    {
        $this->initialized['item'] = true;
        $this->item = $item;
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