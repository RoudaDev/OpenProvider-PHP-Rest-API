<?php

namespace Rouda\OpenProviderAPI\Model;

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
     * @var string
     */
    protected $brandName;
    /**
     * 
     *
     * @var string
     */
    protected $brandSeqno;
    /**
     * 
     *
     * @var string
     */
    protected $category;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $productSeqno;
    /**
     * 
     *
     * @var string
     */
    protected $subCategory;
    /**
     * 
     *
     * @return string
     */
    public function getBrandName() : string
    {
        return $this->brandName;
    }
    /**
     * 
     *
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName(string $brandName) : self
    {
        $this->initialized['brandName'] = true;
        $this->brandName = $brandName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBrandSeqno() : string
    {
        return $this->brandSeqno;
    }
    /**
     * 
     *
     * @param string $brandSeqno
     *
     * @return self
     */
    public function setBrandSeqno(string $brandSeqno) : self
    {
        $this->initialized['brandSeqno'] = true;
        $this->brandSeqno = $brandSeqno;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCategory() : string
    {
        return $this->category;
    }
    /**
     * 
     *
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category) : self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProductSeqno() : string
    {
        return $this->productSeqno;
    }
    /**
     * 
     *
     * @param string $productSeqno
     *
     * @return self
     */
    public function setProductSeqno(string $productSeqno) : self
    {
        $this->initialized['productSeqno'] = true;
        $this->productSeqno = $productSeqno;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubCategory() : string
    {
        return $this->subCategory;
    }
    /**
     * 
     *
     * @param string $subCategory
     *
     * @return self
     */
    public function setSubCategory(string $subCategory) : self
    {
        $this->initialized['subCategory'] = true;
        $this->subCategory = $subCategory;
        return $this;
    }
}