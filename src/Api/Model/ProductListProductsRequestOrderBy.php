<?php

namespace Rouda\OpenProvider\Api\Model;

class ProductListProductsRequestOrderBy
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
    protected $brandName;
    /**
     * 
     *
     * @var string|null
     */
    protected $brandSeqno;
    /**
     * 
     *
     * @var string|null
     */
    protected $category;
    /**
     * 
     *
     * @var string|null
     */
    protected $name;
    /**
     * 
     *
     * @var string|null
     */
    protected $productSeqno;
    /**
     * 
     *
     * @var string|null
     */
    protected $subCategory;
    /**
     * 
     *
     * @return string|null
     */
    public function getBrandName() : ?string
    {
        return $this->brandName;
    }
    /**
     * 
     *
     * @param string|null $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName) : self
    {
        $this->initialized['brandName'] = true;
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBrandSeqno() : ?string
    {
        return $this->brandSeqno;
    }
    /**
     * 
     *
     * @param string|null $brandSeqno
     *
     * @return self
     */
    public function setBrandSeqno(?string $brandSeqno) : self
    {
        $this->initialized['brandSeqno'] = true;
        $this->brandSeqno = $brandSeqno;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCategory() : ?string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string|null $category
     *
     * @return self
     */
    public function setCategory(?string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getProductSeqno() : ?string
    {
        return $this->productSeqno;
    }
    /**
     * 
     *
     * @param string|null $productSeqno
     *
     * @return self
     */
    public function setProductSeqno(?string $productSeqno) : self
    {
        $this->initialized['productSeqno'] = true;
        $this->productSeqno = $productSeqno;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getSubCategory() : ?string
    {
        return $this->subCategory;
    }
    /**
     * 
     *
     * @param string|null $subCategory
     *
     * @return self
     */
    public function setSubCategory(?string $subCategory) : self
    {
        $this->initialized['subCategory'] = true;
        $this->subCategory = $subCategory;
        return $this;
    }
}